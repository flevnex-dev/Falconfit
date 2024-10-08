<?php

namespace App\Http\Controllers;

use App\OrderDetails;
use App\AdminLog;
use Illuminate\Http\Request;
use App\BookingOrder;
                
use App\Product;
use Auth;
                

class OrderDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Order Details";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tab=OrderDetails::all();
        return view('admin.pages.orderdetails.orderdetails_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


        
        $tab_BookingOrder=BookingOrder::all();
        $tab_Product=Product::all();           
        return view('admin.pages.orderdetails.orderdetails_create',['dataRow_BookingOrder'=>$tab_BookingOrder,'dataRow_Product'=>$tab_Product]);
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
                
                'order_id'=>'required',
                'product_id'=>'required',
                'quantity'=>'required',
                'product_price'=>'required',
        ]);

        $this->SystemAdminLog("Order Details","Save New","Create New");

        
        $tab_0_BookingOrder=BookingOrder::where('id',$request->order_id)->first();
        $order_id_0_BookingOrder=$tab_0_BookingOrder->customer_id;
        $tab_1_Product=Product::where('id',$request->product_id)->first();
        $product_id_1_Product=$tab_1_Product->product_name;
        $tab=new OrderDetails();
        
        $tab->order_id_customer_id=$order_id_0_BookingOrder;
        $tab->order_id=$request->order_id;
        $tab->product_id_product_name=$product_id_1_Product;
        $tab->product_id=$request->product_id;
        $tab->quantity=$request->quantity;
        $tab->product_price=$request->product_price;
        $tab->save();

        return redirect('orderdetails')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'order_id'=>'required',
                'product_id'=>'required',
                'quantity'=>'required',
                'product_price'=>'required',
        ]);

        $tab=new OrderDetails();
        
        $tab->order_id_customer_id=$order_id_0_BookingOrder;
        $tab->order_id=$request->order_id;
        $tab->product_id_product_name=$product_id_1_Product;
        $tab->product_id=$request->product_id;
        $tab->quantity=$request->quantity;
        $tab->product_price=$request->product_price;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OrderDetails  $orderdetails
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('order_id','LIKE','%'.$search.'%');
                            $query->orWhere('product_id','LIKE','%'.$search.'%');
                            $query->orWhere('quantity','LIKE','%'.$search.'%');
                            $query->orWhere('product_price','LIKE','%'.$search.'%');
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
                            $query->orWhere('order_id','LIKE','%'.$search.'%');
                            $query->orWhere('product_id','LIKE','%'.$search.'%');
                            $query->orWhere('quantity','LIKE','%'.$search.'%');
                            $query->orWhere('product_price','LIKE','%'.$search.'%');
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

    
    public function OrderDetailsQuery($request)
    {
        $OrderDetails_data=OrderDetails::orderBy('id','DESC')->get();

        return $OrderDetails_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Order ID','Product ID','Quantity','Product Price','Created Date');
        array_push($data, $array_column);
        $inv=$this->OrderDetailsQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->order_id,$voi->product_id,$voi->quantity,$voi->product_price,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Order Details Report',
            'report_title'=>'Order Details Report',
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
                            <th class='text-center' style='font-size:12px;' >Order ID</th>
                        
                            <th class='text-center' style='font-size:12px;' >Product ID</th>
                        
                            <th class='text-center' style='font-size:12px;' >Quantity</th>
                        
                            <th class='text-center' style='font-size:12px;' >Product Price</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->OrderDetailsQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->order_id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->product_id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->quantity."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->product_price."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Order Details Report',$html);


    }
    public function show(OrderDetails $orderdetails)
    {
        
        $tab=OrderDetails::all();return view('admin.pages.orderdetails.orderdetails_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OrderDetails  $orderdetails
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderDetails $orderdetails,$id=0)
    {
        $tab=OrderDetails::find($id); 
        $tab_BookingOrder=BookingOrder::all();
        $tab_Product=Product::all();     
        return view('admin.pages.orderdetails.orderdetails_edit',['dataRow_BookingOrder'=>$tab_BookingOrder,'dataRow_Product'=>$tab_Product,'dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OrderDetails  $orderdetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrderDetails $orderdetails,$id=0)
    {
        // $this->validate($request,[
                
        //         'order_id'=>'required',
        //         'product_id'=>'required',
        //         'quantity'=>'required',
        //         'product_price'=>'required',
        // ]);

        $this->SystemAdminLog("Order Details","Update","Edit / Modify");

        
        // $tab_0_BookingOrder=BookingOrder::where('id',$request->order_id)->first();
        // $order_id_0_BookingOrder=$tab_0_BookingOrder->customer_id;
        // $tab_1_Product=Product::where('id',$request->product_id)->first();
        // $product_id_1_Product=$tab_1_Product->product_name;
        $tab=OrderDetails::find($id);
        
        // $tab->order_id_customer_id=$order_id_0_BookingOrder;
        // $tab->order_id=$request->order_id;
        // $tab->product_id_product_name=$product_id_1_Product;
        // $tab->product_id=$request->product_id;
        // $tab->quantity=$request->quantity;
        // $tab->product_price=$request->product_price;
        $tab->status=$request->status;
        $tab->store_id=auth()->user()->id;
        $tab->save();

        return redirect('orderdetails')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OrderDetails  $orderdetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderDetails $orderdetails,$id=0)
    {
        $this->SystemAdminLog("Order Details","Destroy","Delete");

        $tab=OrderDetails::find($id);
        $tab->delete();
        return redirect('orderdetails')->with('status','Deleted Successfully !');}
}
