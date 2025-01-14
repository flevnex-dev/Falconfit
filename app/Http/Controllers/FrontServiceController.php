<?php

namespace App\Http\Controllers;

use App\AdminLog;
use App\BookingOrder;
use Auth;
use Illuminate\Http\Request;
use App\Customer;
use App\OrderDetails;
use DB;


class FrontServiceController extends Controller
{

    private $moduleName = "";
    private $sdc;
    public function __construct()
    {
        $this->sdc = new CoreCustomController();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function dashboard(){

       // dd(Auth::user());

        if(Auth::user()->user_type_id==1)
        {
            /*$tab=BookingOrder::leftJoin('order_detailses','order_detailses.order_id','=','booking_orders.id')
                            ->leftJoin('customers','booking_orders.customer_id','=','customers.id')
                            ->leftJoin('sizes','order_detailses.size_id','=','sizes.id')
                            ->leftJoin('colors','order_detailses.color_id','=','colors.id')
                            ->leftJoin('shipping_costs','booking_orders.shipping_cost_id','=','shipping_costs.id')
                            ->leftJoin('payment_methods','booking_orders.payment_type_id','=','payment_methods.id')
                            ->leftJoin('products','order_detailses.product_id','=','products.id')
                            ->select(DB::raw('booking_orders.*,
                            customers.phone_number as cus_phone_number,
                            customers.address as cus_address,
                            customers.shipping_different_address as cus_shipping_address,
                            order_detailses.size_id,
                            order_detailses.color_id,
                            order_detailses.product_id,
                            order_detailses.product_id_product_name,
                            products.product_code,
                            shipping_costs.amount as shipping_amount,
                            payment_methods.mobile_number as payment_number,
                            sizes.name as size_name,
                            colors.name as color_name'
                            
                            ))
                            ->orderBy('booking_orders.id','ASC')
                            // ->whereDate('booking_orders.created_at', '=', date('Y-m-d'))
                            ->get();
                            */
            $tab=BookingOrder::leftJoin('shipping_costs','booking_orders.shipping_cost_id','=','shipping_costs.id')
                                ->leftJoin('customers','booking_orders.customer_id','=','customers.id')                    
                                ->leftJoin('payment_methods','booking_orders.payment_type_id','=','payment_methods.id')
                                ->select(DB::raw('booking_orders.*,
                                    customers.phone_number as cus_phone_number,
                                    customers.address as cus_address,
                                    customers.shipping_different_address as cus_shipping_address,
                                    shipping_costs.amount as shipping_amount,
                                    payment_methods.mobile_number as payment_number,
                                    (select count(order_detailses.id) FROM order_detailses where order_detailses.order_id = booking_orders.id) as total_product
                                '))
                            ->orderBy('booking_orders.id','ASC')
                            ->whereDate('booking_orders.created_at', '=', date('Y-m-d'))
                            ->get();
            // $tab=BookingOrder::all();                
            $total_booking = BookingOrder::select('id')->count();
            $total_booking_Accepted = BookingOrder::select('id')->count();
            $total_booking_Pickup = BookingOrder::select('id')->count();
            $total_booking_Delivered = BookingOrder::select('id')->count();
            $total_booking_Pending = BookingOrder::select('id')->count();
            $total_booking_Cancel = BookingOrder::select('id')->count();

            $data=[
                'dataRow'=>$tab,
                'total_booking'=>$total_booking,
                'total_booking_accepted'=>$total_booking_Accepted,
                'total_booking_Pickup'=>$total_booking_Pickup,
                'total_booking_Delivered'=>$total_booking_Delivered,
                'total_booking_Pending'=>$total_booking_Pending,
                'total_booking_Cancel'=>$total_booking_Cancel,
               ];
            //    dd($tab);
           return view('admin.pages.dashboard.index',$data);
        }
        else if(Auth::user()->user_type_id==2)
        {
            dd(1);
        }
        else
        {
          

            //dd($customer);
            // $tab=BookingOrder::all();

            // $total_booking = BookingOrder::select('id')->where('created_by',$this->sdc->UserID())->count();
            // $total_booking_Accepted = BookingOrder::select('id')->where('created_by',$this->sdc->UserID())->where('parcel_status','Accepted')->count();
            // $total_booking_Pickup = BookingOrder::select('id')->where('created_by',$this->sdc->UserID())->where('parcel_status','Pickup')->count();
            // $total_booking_Delivered = BookingOrder::select('id')->where('created_by',$this->sdc->UserID())->where('parcel_status','Delivered')->count();
            // $total_booking_Pending = BookingOrder::select('id')->where('created_by',$this->sdc->UserID())->where('parcel_status','Pending')->count();
            // $total_booking_Cancel = BookingOrder::select('id')->where('created_by',$this->sdc->UserID())->where('parcel_status','Cancel')->count();
        }

         $data=[
             'customer'=>$customer
            ];

        return view('site.pages.checkout',$data);
    }

    private function SystemAdminLog($module_name = "", $action = "", $details = "")
    {
        $tab = new AdminLog();
        $tab->module_name = $module_name;
        $tab->action = $action;
        $tab->details = $details;
        $tab->admin_id = $this->sdc->admin_id();
        $tab->admin_name = $this->sdc->UserName();
        $tab->save();
    }
    public function dashboardOrderView(Request $request, $id=0)
    {
        // dd($request->search);
        if($request->search ==""){
            $ids = $request->id;
        }
        else{
            $ids = $request->search;
        }
        $tab=OrderDetails::where('order_id',$ids)->get();
        // dd($tab);
        return view('admin.pages.orderdetails.orderdetails_list_view',['dataRow'=>$tab]);
    }
    public function booking($arrival='',$departure='',$adult='',$children=''){

        $country=Country::select('id','name','code')->orderBy('id','ASC')->get();
        // $region=Region::select('name','code','country_id')->orderBy('id','ASC')->get();
        // $city=City::select('name')->orderBy('id','ASC')->get();
        $slider=Slider::orderBy('id','DESC')->first();
        
        // $bookingCount=BookingRequest::whereDate('created_at',$arrival)->count();

        $data=[
            'slider'=>$slider,
            'arrival'=>$arrival,
            'departure'=>$departure,
            'adult'=>$adult,
            'children'=>$children,
            'country'=>$country

        ];

        //dd($data);

        return view('front-end.pages.booking',$data);
    }

    public function getRegion(Request $request){

        $country=Country::where('code',$request->country_id)->first();
        $region=Region::where('country_id',$country->id)->get();
        return response()->json($region);
    }

    public function bookingRoom($room=0, $arrival='',$departure='',$adult='',$children=''){

        $slider=Slider::orderBy('id','DESC')->first();
        $roomData = Room::find($room);
        // $bookingCount=BookingRequest::whereDate('created_at',$arrival)->count();
        return view('front-end.pages.booking-room',['roomData'=>$roomData,'room'=>$room,'slider'=>$slider,'arrival'=>$arrival,'departure'=>$departure,'adult'=>$adult,'children'=>$children]);
    }

    private function bookingTemplate($request, $room){


        $siteMessage='  <h2>
                            <strong><span style="color: #ff9900;">Room Reservation Detail</span></strong>
                        </h2>

                        <table style="border: 2px solid #000000; width: 436px;">

                        <tbody>

                        <tr style="height: 32px;">

                        <td style="width: 184px; height: 32px;">Reservation Created</td>

                        <td style="width: 244px; height: 32px;">&nbsp;'.date('dS M Y, h:i A').'</td>

                        </tr>

                        <tr style="height: 46px;">

                        <td style="width: 428px; height: 46px;" colspan="2">

                        <h3 style="display: block; width: 80%; border-bottom: 3px #000 solid;"><strong>Reservation Detail</strong></h3>

                        </td>

                        </tr>

                        <tr style="height: 18px;">

                        <td style="width: 184px; height: 18px;">&nbsp;Room Name</td>

                        <td style="width: 244px; height: 18px;">'.$room->room_name.' ('.$room->room_size.')</td>

                        </tr>
                        <tr style="height: 18px;">

                        <td style="width: 184px; height: 18px;">&nbsp;Room Quantity</td>

                        <td style="width: 244px; height: 18px;">'.$room->room_quantity.'</td>

                        </tr>
                        <tr style="height: 18px;">

                        <td style="width: 184px; height: 18px;">&nbsp;Booking Status</td>

                        <td style="width: 244px; height: 18px;">Pending</td>

                        </tr>
                        <tr style="height: 18px;">

                        <td style="width: 184px; height: 18px;">&nbsp;Name</td>

                        <td style="width: 244px; height: 18px;">'.$request->customer_name.'</td>

                        </tr>

                        <tr style="height: 18px;">

                        <td style="width: 184px; height: 18px;">&nbsp;Email&nbsp;</td>

                        <td style="width: 244px; height: 18px;">'.$request->customer_email.'</td>

                        </tr>

                        <tr style="height: 18px;">

                        <td style="width: 184px; height: 18px;">&nbsp;Phone&nbsp;</td>

                        <td style="width: 244px; height: 18px;">'.$request->customer_phone.'</td>

                        </tr>

                        <tr style="height: 18px;">

                        <td style="width: 184px; height: 18px;">&nbsp;Address&nbsp;</td>

                        <td style="width: 244px; height: 18px;">'.$request->customer_address.'</td>

                        </tr>

                        <tr style="height: 18px;">

                        <td style="width: 184px; height: 18px;">&nbsp;Reservation Date</td>

                        <td style="width: 244px; height: 18px;">'.$request->reservation_date.'</td>

                        </tr>

                        <tr style="height: 18px;">

                        <td style="width: 184px; height: 18px;">&nbsp;Arrival Date</td>

                        <td style="width: 244px; height: 18px;">'.$request->arrival_date.'</td>

                        </tr>
                        <tr style="height: 18px;">

                        <td style="width: 184px; height: 18px;">&nbsp;Departure Date</td>

                        <td style="width: 244px; height: 18px;">'.$request->departure_date.'</td>

                        </tr>
                        <tr style="height: 18px;">

                        <td style="width: 184px; height: 18px;">&nbsp;Adults</td>

                        <td style="width: 244px; height: 18px;">'.$request->adults.'</td>

                        </tr>
                        <tr style="height: 18px;">

                        <td style="width: 184px; height: 18px;">&nbsp;Children</td>

                        <td style="width: 244px; height: 18px;">'.$request->children.'</td>

                        </tr>
                        </tbody>

                        </table>

                        <p>Kind Regards, '.$this->sdc->SiteName.'&nbsp;</p>

                        <p>&nbsp;</p>';

        return $siteMessage;
    }

    public function bookingConfirm(Request $request){

        if(empty($request->room)){
            return response()->json(['status'=>1,'msg'=>'Invalid Room ID, Please Select a valid room.']);
        }
        $tab_0_Room=Room::where('id',$request->room)->first();
        $room_0_Room=$tab_0_Room->room_name;
        $tab=new BookingRequest();

        if(empty($request->room_quantity)){
            return response()->json(['status'=>1,'msg'=>'Please select a room quantity.']);
        }
        elseif(empty($request->customer_name)){
            return response()->json(['status'=>1,'msg'=>'Please Type Customer Name.']);
        }
        elseif(empty($request->customer_phone)){
            return response()->json(['status'=>1,'msg'=>'Please Type Customer Phone.']);
        }
        elseif(empty($request->customer_email)){
            return response()->json(['status'=>1,'msg'=>'Please Type Customer Email.']);
        }
        elseif(empty($request->customer_address)){
            return response()->json(['status'=>1,'msg'=>'Please Type Customer Address.']);
        }
        elseif(empty($request->arrival_date)){
            return response()->json(['status'=>1,'msg'=>'Please Type Arrival Date.']);
        }
        elseif(empty($request->departure_date)){
            return response()->json(['status'=>1,'msg'=>'Please Type Departure Date.']);
        }
        elseif(empty($request->adults)){
            return response()->json(['status'=>1,'msg'=>'Minimum One Adults Required.']);
        }
        
        $tab->room_room_name=$room_0_Room;
        $tab->room=$request->room;
        $tab->room_quantity=$request->room_quantity;
        $tab->customer_name=$request->customer_name;
        $tab->customer_phone=$request->customer_phone;
        $tab->customer_email=$request->customer_email;
        $tab->customer_address=$request->customer_address;
        $tab->arrival_date=$request->arrival_date;
        $tab->departure_date=$request->departure_date;
        $tab->adults=$request->adults;
        $tab->children=$request->children;
        $tab->booking_from="Online Booking";
        $tab->booking_status="Pending";
        $tab->save();

        $booking_Template=$this->bookingTemplate($request, $tab_0_Room);
        //echo $booking_Template; die();

        $BookingConfiguration=BookingConfiguration::orderBy('id','DESC')->first();

        $this->sdc->initMail($BookingConfiguration->booking_admin_email,'Online Room Reservation - '.$this->sdc->SiteName,$booking_Template);

            //$BookingConfiguration->booking_admin_email,

        return response()->json(['status'=>0,'msg'=>$BookingConfiguration->booking_success_message]);


    }

    public function checkBooking(Request $request){

        $from = date('Y-m-d',strtotime($request->arrival_date));
        $to = date('Y-m-d',strtotime($request->departure_date));

        $total=BookingRequest::whereBetween(\DB::Raw('DATE(arrival_date)'), [$from, $to])->count();
        return response()->json($total);
    }

    public function pages($pages=''){
        $FotterMenu=FotterMenu::where('menu_link',$pages)->first();
        $pageID=$FotterMenu->id;
        //dd($FotterMenu);
        $FotterPageContent=FotterPageContent::where('page_name',$pageID)->orderBy('id','ASC')->get();
        //dd($FotterPageContent);
        return view('front-end.pages.pages',['page'=>$FotterPageContent]);
    }

    public function index(){
        $SiteSetting=SiteSetting::orderBy('id','DESC')->first();
        $slider=Slider::orderBy('id','DESC')->first();
        $dreamContent=DreamContent::orderBy('id','DESC')->first();
        $videosContent=VideosContent::orderBy('id','DESC')->first();
        $exploreShelterInfo=ExploreShelterInfo::orderBy('id','DESC')->first();
        $peopleAndStory=PeopleAndStory::orderBy('id','DESC')->first();
        $RoomInfo=RoomInfo::orderBy('id','DESC')->first();
        $shelterPhoto=ShelterPhoto::where('module_status','Active')->orderBy('id','DESC')->get();
        $PeopleFeedback=PeopleFeedback::where('module_status','Active')->orderBy('id','DESC')->get();
        $RoomDetail=RoomDetail::where('module_status','Active')->orderBy('id','DESC')->get();
        $data=[
            'site'=>$SiteSetting,
            'dream'=>$dreamContent,
            'slider'=>$slider,
            'video'=>$videosContent,
            'shelter'=>$exploreShelterInfo,
            'shelterPhoto'=>$shelterPhoto,
            'peopleAndStory'=>$peopleAndStory,
            'peopleFeedback'=>$PeopleFeedback,
            'roomInfo'=>$RoomInfo,
            'roomDetail'=>$RoomDetail,
        ];
        return view('front-end.pages.index',$data);
    }
    
}
