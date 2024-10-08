<?php

namespace App\Http\Controllers;

use App\FeatureProduct;
use App\AdminLog;
use Illuminate\Http\Request;
use App\Product;
                

class FeatureProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Feature Product";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tab=FeatureProduct::all();
        return view('admin.pages.featureproduct.featureproduct_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


        
        $tab_Product=Product::all();           
        return view('admin.pages.featureproduct.featureproduct_create',['dataRow_Product'=>$tab_Product]);
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
                
                'product'=>'required',
                'feature_status'=>'required',
        ]);

        $this->SystemAdminLog("Feature Product","Save New","Create New");

        
        $tab_0_Product=Product::where('id',$request->product)->first();
        $product_0_Product=$tab_0_Product->product_name;
        $tab=new FeatureProduct();
        
        $tab->product_product_name=$product_0_Product;
        $tab->product=$request->product;
        $tab->feature_status=$request->feature_status;
        $tab->save();

        return redirect('featureproduct')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'product'=>'required',
                'feature_status'=>'required',
        ]);

        $tab=new FeatureProduct();
        
        $tab->product_product_name=$product_0_Product;
        $tab->product=$request->product;
        $tab->feature_status=$request->feature_status;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FeatureProduct  $featureproduct
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('product','LIKE','%'.$search.'%');
                            $query->orWhere('feature_status','LIKE','%'.$search.'%');
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
                            $query->orWhere('product','LIKE','%'.$search.'%');
                            $query->orWhere('feature_status','LIKE','%'.$search.'%');
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

    
    public function FeatureProductQuery($request)
    {
        $FeatureProduct_data=FeatureProduct::orderBy('id','DESC')->get();

        return $FeatureProduct_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Product','Feature Status','Created Date');
        array_push($data, $array_column);
        $inv=$this->FeatureProductQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->product,$voi->feature_status,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Feature Product Report',
            'report_title'=>'Feature Product Report',
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
                            <th class='text-center' style='font-size:12px;' >Product</th>
                        
                            <th class='text-center' style='font-size:12px;' >Feature Status</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->FeatureProductQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->product."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->feature_status."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Feature Product Report',$html);


    }
    public function show(FeatureProduct $featureproduct)
    {
        
        $tab=FeatureProduct::all();return view('admin.pages.featureproduct.featureproduct_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FeatureProduct  $featureproduct
     * @return \Illuminate\Http\Response
     */
    public function edit(FeatureProduct $featureproduct,$id=0)
    {
        $tab=FeatureProduct::find($id); 
        $tab_Product=Product::all();     
        return view('admin.pages.featureproduct.featureproduct_edit',['dataRow_Product'=>$tab_Product,'dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FeatureProduct  $featureproduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FeatureProduct $featureproduct,$id=0)
    {
        $this->validate($request,[
                
                'product'=>'required',
                'feature_status'=>'required',
        ]);

        $this->SystemAdminLog("Feature Product","Update","Edit / Modify");

        
        $tab_0_Product=Product::where('id',$request->product)->first();
        $product_0_Product=$tab_0_Product->product_name;
        $tab=FeatureProduct::find($id);
        
        $tab->product_product_name=$product_0_Product;
        $tab->product=$request->product;
        $tab->feature_status=$request->feature_status;
        $tab->save();

        return redirect('featureproduct')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FeatureProduct  $featureproduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(FeatureProduct $featureproduct,$id=0)
    {
        $this->SystemAdminLog("Feature Product","Destroy","Delete");

        $tab=FeatureProduct::find($id);
        $tab->delete();
        return redirect('featureproduct')->with('status','Deleted Successfully !');}
}
