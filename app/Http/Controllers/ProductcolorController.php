<?php

namespace App\Http\Controllers;

use App\ProductColor;
use App\AdminLog;
use Illuminate\Http\Request;
use App\Product;
                
use App\Color;
                

class ProductColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Product Color";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tab=ProductColor::all();
        return view('admin.pages.productcolor.productcolor_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


        
        $tab_Product=Product::all();
        $tab_Color=Color::all();           
        return view('admin.pages.productcolor.productcolor_create',['dataRow_Product'=>$tab_Product,'dataRow_Color'=>$tab_Color]);
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
                
        ]);

        $this->SystemAdminLog("Product Color","Save New","Create New");

        
        $tab_0_Product=Product::where('id',$request->product_id)->first();
        $product_id_0_Product=$tab_0_Product->product_name;
        $tab_1_Color=Color::where('id',$request->color_id)->first();
        $color_id_1_Color=$tab_1_Color->name;
        $tab=new ProductColor();
        
        $tab->product_id_product_name=$product_id_0_Product;
        $tab->product_id=$request->product_id;
        $tab->color_id_name=$color_id_1_Color;
        $tab->color_id=$request->color_id;
        $tab->save();

        return redirect('productcolor')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
        ]);

        $tab=new ProductColor();
        
        $tab->product_id_product_name=$product_id_0_Product;
        $tab->product_id=$request->product_id;
        $tab->color_id_name=$color_id_1_Color;
        $tab->color_id=$request->color_id;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductColor  $productcolor
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('product_id','LIKE','%'.$search.'%');
                            $query->orWhere('color_id','LIKE','%'.$search.'%');
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
                            $query->orWhere('product_id','LIKE','%'.$search.'%');
                            $query->orWhere('color_id','LIKE','%'.$search.'%');
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

    
    public function ProductColorQuery($request)
    {
        $ProductColor_data=ProductColor::orderBy('id','DESC')->get();

        return $ProductColor_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Product ID','Color ID','Created Date');
        array_push($data, $array_column);
        $inv=$this->ProductColorQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->product_id,$voi->color_id,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Product Color Report',
            'report_title'=>'Product Color Report',
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
                            <th class='text-center' style='font-size:12px;' >Product ID</th>
                        
                            <th class='text-center' style='font-size:12px;' >Color ID</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->ProductColorQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->product_id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->color_id."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Product Color Report',$html);


    }
    public function show(ProductColor $productcolor)
    {
        
        $tab=ProductColor::all();return view('admin.pages.productcolor.productcolor_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductColor  $productcolor
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductColor $productcolor,$id=0)
    {
        $tab=ProductColor::find($id); 
        $tab_Product=Product::all();
        $tab_Color=Color::all();     
        return view('admin.pages.productcolor.productcolor_edit',['dataRow_Product'=>$tab_Product,'dataRow_Color'=>$tab_Color,'dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductColor  $productcolor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductColor $productcolor,$id=0)
    {
        $this->validate($request,[
                
        ]);

        $this->SystemAdminLog("Product Color","Update","Edit / Modify");

        
        $tab_0_Product=Product::where('id',$request->product_id)->first();
        $product_id_0_Product=$tab_0_Product->product_name;
        $tab_1_Color=Color::where('id',$request->color_id)->first();
        $color_id_1_Color=$tab_1_Color->name;
        $tab=ProductColor::find($id);
        
        $tab->product_id_product_name=$product_id_0_Product;
        $tab->product_id=$request->product_id;
        $tab->color_id_name=$color_id_1_Color;
        $tab->color_id=$request->color_id;
        $tab->save();

        return redirect('productcolor')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductColor  $productcolor
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductColor $productcolor,$id=0)
    {
        $this->SystemAdminLog("Product Color","Destroy","Delete");

        $tab=ProductColor::find($id);
        $tab->delete();
        return redirect('productcolor')->with('status','Deleted Successfully !');}
}
