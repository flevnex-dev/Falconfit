<?php

namespace App\Http\Controllers;

use App\BookingOrder;
use App\AdminLog;
use Illuminate\Http\Request;
use App\Customer;
                
use App\PaymentMethod;
                
use App\ShippingCost;
                

class BookingOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Booking Order";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tab=BookingOrder::all();
        return view('admin.pages.bookingorder.bookingorder_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


        
        $tab_Customer=Customer::all();
        $tab_PaymentMethod=PaymentMethod::all();
        $tab_ShippingCost=ShippingCost::all();           
        return view('admin.pages.bookingorder.bookingorder_create',['dataRow_Customer'=>$tab_Customer,'dataRow_PaymentMethod'=>$tab_PaymentMethod,'dataRow_ShippingCost'=>$tab_ShippingCost]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    private function SystemAdminLog($module_name="",$action="",$details=""){
        $tab=new AdminLog();
        $tab->module_name=$module_name;
        $tab->action=$action;
        $tab->details=$details;
        $tab->admin_id=$this->sdc->admin_id();
        $tab->admin_name=$this->sdc->UserName();
        $tab->save();
    }


    public function store(Request $request)
    {
        $this->validate($request,[
                
                'customer_id'=>'required',
                'total_amount'=>'required',
                'payable_amount'=>'required',
                'payment_type_id'=>'required',
                'shipping_cost_id'=>'required',
        ]);

        $this->SystemAdminLog("Booking Order","Save New","Create New");

        
        $tab_0_Customer=Customer::where('id',$request->customer_id)->first();
        $customer_id_0_Customer=$tab_0_Customer->name;
        $tab_4_PaymentMethod=PaymentMethod::where('id',$request->payment_type_id)->first();
        $payment_type_id_4_PaymentMethod=$tab_4_PaymentMethod->name;
        $tab_5_ShippingCost=ShippingCost::where('id',$request->shipping_cost_id)->first();
        $shipping_cost_id_5_ShippingCost=$tab_5_ShippingCost->name;
        $tab=new BookingOrder();
        
        $tab->customer_id_name=$customer_id_0_Customer;
        $tab->customer_id=$request->customer_id;
        $tab->total_amount=$request->total_amount;
        $tab->discount_amount=$request->discount_amount;
        $tab->payable_amount=$request->payable_amount;
        $tab->payment_type_id_name=$payment_type_id_4_PaymentMethod;
        $tab->payment_type_id=$request->payment_type_id;
        $tab->shipping_cost_id_name=$shipping_cost_id_5_ShippingCost;
        $tab->shipping_cost_id=$request->shipping_cost_id;
        $tab->order_notes=$request->order_notes;
        $tab->save();

        return redirect('bookingorder')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'customer_id'=>'required',
                'total_amount'=>'required',
                'payable_amount'=>'required',
                'payment_type_id'=>'required',
                'shipping_cost_id'=>'required',
        ]);

        $tab=new BookingOrder();
        
        $tab->customer_id_name=$customer_id_0_Customer;
        $tab->customer_id=$request->customer_id;
        $tab->total_amount=$request->total_amount;
        $tab->discount_amount=$request->discount_amount;
        $tab->payable_amount=$request->payable_amount;
        $tab->payment_type_id_name=$payment_type_id_4_PaymentMethod;
        $tab->payment_type_id=$request->payment_type_id;
        $tab->shipping_cost_id_name=$shipping_cost_id_5_ShippingCost;
        $tab->shipping_cost_id=$request->shipping_cost_id;
        $tab->order_notes=$request->order_notes;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BookingOrder  $bookingorder
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('customer_id','LIKE','%'.$search.'%');
                            $query->orWhere('total_amount','LIKE','%'.$search.'%');
                            $query->orWhere('discount_amount','LIKE','%'.$search.'%');
                            $query->orWhere('payable_amount','LIKE','%'.$search.'%');
                            $query->orWhere('payment_type_id','LIKE','%'.$search.'%');
                            $query->orWhere('shipping_cost_id','LIKE','%'.$search.'%');
                            $query->orWhere('order_notes','LIKE','%'.$search.'%');
                            $query->orWhere('created_at','LIKE','%'.$search.'%');

                        return $query;
                     })
                     ->count();
        return $tab;
    }


    private function methodToGetMembers($start, $length,$search=''){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('customer_id','LIKE','%'.$search.'%');
                            $query->orWhere('total_amount','LIKE','%'.$search.'%');
                            $query->orWhere('discount_amount','LIKE','%'.$search.'%');
                            $query->orWhere('payable_amount','LIKE','%'.$search.'%');
                            $query->orWhere('payment_type_id','LIKE','%'.$search.'%');
                            $query->orWhere('shipping_cost_id','LIKE','%'.$search.'%');
                            $query->orWhere('order_notes','LIKE','%'.$search.'%');
                            $query->orWhere('created_at','LIKE','%'.$search.'%');

                        return $query;
                     })
                     ->skip($start)->take($length)->get();
        return $tab;
    }

    public function datatable(Request $request){

        $draw = $request->get('draw');
        $start = $request->get('start');
        $length = $request->get('length');
        $search = $request->get('search');

        $search = (isset($search['value']))? $search['value'] : '';

        $total_members = $this->methodToGetMembersCount($search); // get your total no of data;
        $members = $this->methodToGetMembers($start, $length,$search); //supply start and length of the table data

        $data = array(
            'draw' => $draw,
            'recordsTotal' => $total_members,
            'recordsFiltered' => $total_members,
            'data' => $members,
        );

        echo json_encode($data);

    }

    
    public function BookingOrderQuery($request)
    {
        $BookingOrder_data=BookingOrder::orderBy('id','DESC')->get();

        return $BookingOrder_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Customer ID','Total Amount','Discount Amount','Payable Amount','Payment Type ID','Shipping Cost ID','Order notes','Created Date');
        array_push($data, $array_column);
        $inv=$this->BookingOrderQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->customer_id,$voi->total_amount,$voi->discount_amount,$voi->payable_amount,$voi->payment_type_id,$voi->shipping_cost_id,$voi->order_notes,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Booking Order Report',
            'report_title'=>'Booking Order Report',
            'report_description'=>'Report Genarated : '.$dataDateTimeIns,
            'data'=>$data
        );

        $this->sdc->ExcelLayout($excelArray);
        
    }

    public function ExportPDF(Request $request)
    {

        $html="<table class='table table-bordered' style='width:100%;'>
                <thead>
                <tr>
                <th class='text-center' style='font-size:12px;'>ID</th>
                            <th class='text-center' style='font-size:12px;' >Customer ID</th>
                        
                            <th class='text-center' style='font-size:12px;' >Total Amount</th>
                        
                            <th class='text-center' style='font-size:12px;' >Discount Amount</th>
                        
                            <th class='text-center' style='font-size:12px;' >Payable Amount</th>
                        
                            <th class='text-center' style='font-size:12px;' >Payment Type ID</th>
                        
                            <th class='text-center' style='font-size:12px;' >Shipping Cost ID</th>
                        
                            <th class='text-center' style='font-size:12px;' >Order notes</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->BookingOrderQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->customer_id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->total_amount."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->discount_amount."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->payable_amount."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->payment_type_id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->shipping_cost_id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->order_notes."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Booking Order Report',$html);


    }
    public function show(BookingOrder $bookingorder)
    {
        
        $tab=BookingOrder::all();return view('admin.pages.bookingorder.bookingorder_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BookingOrder  $bookingorder
     * @return \Illuminate\Http\Response
     */
    public function edit(BookingOrder $bookingorder,$id=0)
    {
        $tab=BookingOrder::find($id); 
        $tab_Customer=Customer::all();
        $tab_PaymentMethod=PaymentMethod::all();
        $tab_ShippingCost=ShippingCost::all();    
        // dd($tab_Customer); 
        return view('admin.pages.bookingorder.bookingorder_edit',['dataRow_Customer'=>$tab_Customer,'dataRow_PaymentMethod'=>$tab_PaymentMethod,'dataRow_ShippingCost'=>$tab_ShippingCost,'dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BookingOrder  $bookingorder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookingOrder $bookingorder,$id=0)
    {
        $this->validate($request,[
                
                'customer_id'=>'required',
                'total_amount'=>'required',
                'payable_amount'=>'required',
                'payment_type_id'=>'required',
                'shipping_cost_id'=>'required',
        ]);

        $this->SystemAdminLog("Booking Order","Update","Edit / Modify");

        
        $tab_0_Customer=Customer::where('id',$request->customer_id)->first();
        $customer_id_0_Customer=$tab_0_Customer->name;
        $tab_4_PaymentMethod=PaymentMethod::where('id',$request->payment_type_id)->first();
        $payment_type_id_4_PaymentMethod=$tab_4_PaymentMethod->name;
        $tab_5_ShippingCost=ShippingCost::where('id',$request->shipping_cost_id)->first();
        $shipping_cost_id_5_ShippingCost=$tab_5_ShippingCost->name;
        $tab=BookingOrder::find($id);
        
        $tab->customer_id_name=$customer_id_0_Customer;
        $tab->customer_id=$request->customer_id;
        $tab->total_amount=$request->total_amount;
        $tab->discount_amount=$request->discount_amount;
        $tab->payable_amount=$request->payable_amount;
        $tab->payment_type_id_name=$payment_type_id_4_PaymentMethod;
        $tab->payment_type_id=$request->payment_type_id;
        $tab->shipping_cost_id_name=$shipping_cost_id_5_ShippingCost;
        $tab->shipping_cost_id=$request->shipping_cost_id;
        $tab->order_notes=$request->order_notes;
        $tab->save();

        return redirect('bookingorder')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BookingOrder  $bookingorder
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookingOrder $bookingorder,$id=0)
    {
        $this->SystemAdminLog("Booking Order","Destroy","Delete");

        $tab=BookingOrder::find($id);
        $tab->delete();
        return redirect('bookingorder')->with('status','Deleted Successfully !');}
}
