<?php

namespace App\Http\Controllers;

use App\CustomerShippingaddress;
use App\AdminLog;
use Illuminate\Http\Request;
use App\Customer;
                

class CustomerShippingaddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Customer Shipping address";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tab=CustomerShippingaddress::all();
        return view('admin.pages.customershippingaddress.customershippingaddress_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


        
        $tab_Customer=Customer::all();           
        return view('admin.pages.customershippingaddress.customershippingaddress_create',['dataRow_Customer'=>$tab_Customer]);
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
                'name'=>'required',
                'address'=>'required',
        ]);

        $this->SystemAdminLog("Customer Shipping address","Save New","Create New");

        
        $tab_0_Customer=Customer::where('id',$request->customer_id)->first();
        $customer_id_0_Customer=$tab_0_Customer->name;
        $tab=new CustomerShippingaddress();
        
        $tab->customer_id_name=$customer_id_0_Customer;
        $tab->customer_id=$request->customer_id;
        $tab->name=$request->name;
        $tab->address=$request->address;
        $tab->save();

        return redirect('customershippingaddress')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'customer_id'=>'required',
                'name'=>'required',
                'address'=>'required',
        ]);

        $tab=new CustomerShippingaddress();
        
        $tab->customer_id_name=$customer_id_0_Customer;
        $tab->customer_id=$request->customer_id;
        $tab->name=$request->name;
        $tab->address=$request->address;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CustomerShippingaddress  $customershippingaddress
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('customer_id','LIKE','%'.$search.'%');
                            $query->orWhere('name','LIKE','%'.$search.'%');
                            $query->orWhere('address','LIKE','%'.$search.'%');
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
                            $query->orWhere('name','LIKE','%'.$search.'%');
                            $query->orWhere('address','LIKE','%'.$search.'%');
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

    
    public function CustomerShippingaddressQuery($request)
    {
        $CustomerShippingaddress_data=CustomerShippingaddress::orderBy('id','DESC')->get();

        return $CustomerShippingaddress_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Customer ID','Name','Address','Created Date');
        array_push($data, $array_column);
        $inv=$this->CustomerShippingaddressQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->customer_id,$voi->name,$voi->address,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Customer Shipping address Report',
            'report_title'=>'Customer Shipping address Report',
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
                        
                            <th class='text-center' style='font-size:12px;' >Name</th>
                        
                            <th class='text-center' style='font-size:12px;' >Address</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->CustomerShippingaddressQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->customer_id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->name."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->address."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Customer Shipping address Report',$html);


    }
    public function show(CustomerShippingaddress $customershippingaddress)
    {
        
        $tab=CustomerShippingaddress::all();return view('admin.pages.customershippingaddress.customershippingaddress_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CustomerShippingaddress  $customershippingaddress
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomerShippingaddress $customershippingaddress,$id=0)
    {
        $tab=CustomerShippingaddress::find($id); 
        $tab_Customer=Customer::all();     
        return view('admin.pages.customershippingaddress.customershippingaddress_edit',['dataRow_Customer'=>$tab_Customer,'dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CustomerShippingaddress  $customershippingaddress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CustomerShippingaddress $customershippingaddress,$id=0)
    {
        $this->validate($request,[
                
                'customer_id'=>'required',
                'name'=>'required',
                'address'=>'required',
        ]);

        $this->SystemAdminLog("Customer Shipping address","Update","Edit / Modify");

        
        $tab_0_Customer=Customer::where('id',$request->customer_id)->first();
        $customer_id_0_Customer=$tab_0_Customer->name;
        $tab=CustomerShippingaddress::find($id);
        
        $tab->customer_id_name=$customer_id_0_Customer;
        $tab->customer_id=$request->customer_id;
        $tab->name=$request->name;
        $tab->address=$request->address;
        $tab->save();

        return redirect('customershippingaddress')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CustomerShippingaddress  $customershippingaddress
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerShippingaddress $customershippingaddress,$id=0)
    {
        $this->SystemAdminLog("Customer Shipping address","Destroy","Delete");

        $tab=CustomerShippingaddress::find($id);
        $tab->delete();
        return redirect('customershippingaddress')->with('status','Deleted Successfully !');}
}
