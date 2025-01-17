<?php

namespace App\Http\Controllers;

use App\ProductImage;
use App\AdminLog;
use Illuminate\Http\Request;

class ProductImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Product Image";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tab=ProductImage::all();
        return view('admin.pages.productimage.productimage_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


                   
        return view('admin.pages.productimage.productimage_create');
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
                
                'product_id'=>'required',
                'title'=>'required',
                'path'=>'required',
        ]);

        $this->SystemAdminLog("Product Image","Save New","Create New");

        
        $tab=new ProductImage();
        
        $tab->product_id=$request->product_id;
        $tab->title=$request->title;
        $tab->path=$request->path;
        $tab->save();

        return redirect('productimage')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'product_id'=>'required',
                'title'=>'required',
                'path'=>'required',
        ]);

        $tab=new ProductImage();
        
        $tab->product_id=$request->product_id;
        $tab->title=$request->title;
        $tab->path=$request->path;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductImage  $productimage
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('product_id','LIKE','%'.$search.'%');
                            $query->orWhere('title','LIKE','%'.$search.'%');
                            $query->orWhere('path','LIKE','%'.$search.'%');
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
                            $query->orWhere('title','LIKE','%'.$search.'%');
                            $query->orWhere('path','LIKE','%'.$search.'%');
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

    
    public function ProductImageQuery($request)
    {
        $ProductImage_data=ProductImage::orderBy('id','DESC')->get();

        return $ProductImage_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Product ID','title','Path','Created Date');
        array_push($data, $array_column);
        $inv=$this->ProductImageQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->product_id,$voi->title,$voi->path,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Product Image Report',
            'report_title'=>'Product Image Report',
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
                        
                            <th class='text-center' style='font-size:12px;' >title</th>
                        
                            <th class='text-center' style='font-size:12px;' >Path</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->ProductImageQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->product_id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->title."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->path."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Product Image Report',$html);


    }
    public function show(ProductImage $productimage)
    {
        
        $tab=ProductImage::all();return view('admin.pages.productimage.productimage_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductImage  $productimage
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductImage $productimage,$id=0)
    {
        $tab=ProductImage::find($id);      
        return view('admin.pages.productimage.productimage_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductImage  $productimage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductImage $productimage,$id=0)
    {
        $this->validate($request,[
                
                'product_id'=>'required',
                'title'=>'required',
                'path'=>'required',
        ]);

        $this->SystemAdminLog("Product Image","Update","Edit / Modify");

        
        $tab=ProductImage::find($id);
        
        $tab->product_id=$request->product_id;
        $tab->title=$request->title;
        $tab->path=$request->path;
        $tab->save();

        return redirect('productimage')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductImage  $productimage
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductImage $productimage,$id=0)
    {
        $this->SystemAdminLog("Product Image","Destroy","Delete");

        $tab=ProductImage::find($id);
        $tab->delete();
        return redirect('productimage')->with('status','Deleted Successfully !');}
}
