<?php

namespace App\Http\Controllers;

use App\Product;
use App\AdminLog;
use App\ProductImage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Product";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tab=Product::all();
        return view('admin.pages.product.product_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


                   
        return view('admin.pages.product.product_create');
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
                
                'category'=>'required',
                'sub_category'=>'required',
                'product_name'=>'required',
                'price'=>'required',
                'size'=>'required',
                'color'=>'required',
                'quantity'=>'required',
                'product_image'=>'required',
        ]);

        $this->SystemAdminLog("Product","Save New","Create New");

        

        $filename_product_10='';
        /*if ($request->hasFile('product_image')) {
            $img_product = $request->file('product_image');
            $upload_product = 'upload/product';
            $filename_product_10 = env('APP_NAME').'_'.time() . '.' . $img_product->getClientOriginalExtension();
            $img_product->move($upload_product, $filename_product_10);
        }*/
        
                
        $tab=new Product();
        
        $tab->category=$request->category;
        $tab->sub_category=$request->sub_category;
        $tab->product_name=$request->product_name;
        $tab->price=$request->price;
        $tab->discount=$request->discount;
        $tab->size=$request->size;
        $tab->color=$request->color;
        $tab->quantity=$request->quantity;
        $tab->short_details=$request->short_details;
        $tab->description=$request->description;
        $tab->product_image=$filename_product_10;
        $tab->save();

        if($request->hasFile('product_image')):
            foreach ($request->file('product_image') as $file) :
                $path = 'upload/product';
                $titre = $file->getClientOriginalName();
                $file->move($path, $titre);
                $fichier = New ProductImage();
                $fichier->product_id = $article->id;
                $fichier->title = $title;
                $fichier->path = $path;
                $fichier->save();
    
            endforeach;
    
        endif;

        return redirect('product')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'category'=>'required',
                'sub_category'=>'required',
                'product_name'=>'required',
                'price'=>'required',
                'size'=>'required',
                'color'=>'required',
                'quantity'=>'required',
                'product_image'=>'required',
        ]);

        $tab=new Product();
        
        $tab->category=$request->category;
        $tab->sub_category=$request->sub_category;
        $tab->product_name=$request->product_name;
        $tab->price=$request->price;
        $tab->discount=$request->discount;
        $tab->size=$request->size;
        $tab->color=$request->color;
        $tab->quantity=$request->quantity;
        $tab->short_details=$request->short_details;
        $tab->description=$request->description;
        $tab->product_image=$filename_product_10;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('category','LIKE','%'.$search.'%');
                            $query->orWhere('sub_category','LIKE','%'.$search.'%');
                            $query->orWhere('product_name','LIKE','%'.$search.'%');
                            $query->orWhere('price','LIKE','%'.$search.'%');
                            $query->orWhere('discount','LIKE','%'.$search.'%');
                            $query->orWhere('size','LIKE','%'.$search.'%');
                            $query->orWhere('color','LIKE','%'.$search.'%');
                            $query->orWhere('quantity','LIKE','%'.$search.'%');
                            $query->orWhere('short_details','LIKE','%'.$search.'%');
                            $query->orWhere('description','LIKE','%'.$search.'%');
                            $query->orWhere('product_image','LIKE','%'.$search.'%');
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
                            $query->orWhere('category','LIKE','%'.$search.'%');
                            $query->orWhere('sub_category','LIKE','%'.$search.'%');
                            $query->orWhere('product_name','LIKE','%'.$search.'%');
                            $query->orWhere('price','LIKE','%'.$search.'%');
                            $query->orWhere('discount','LIKE','%'.$search.'%');
                            $query->orWhere('size','LIKE','%'.$search.'%');
                            $query->orWhere('color','LIKE','%'.$search.'%');
                            $query->orWhere('quantity','LIKE','%'.$search.'%');
                            $query->orWhere('short_details','LIKE','%'.$search.'%');
                            $query->orWhere('description','LIKE','%'.$search.'%');
                            $query->orWhere('product_image','LIKE','%'.$search.'%');
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

    
    public function ProductQuery($request)
    {
        $Product_data=Product::orderBy('id','DESC')->get();

        return $Product_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Category','Sub Category','Product Name','Price','Discount','Size','Color','Quantity','Short Details','Description','Product Image','Created Date');
        array_push($data, $array_column);
        $inv=$this->ProductQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->category,$voi->sub_category,$voi->product_name,$voi->price,$voi->discount,$voi->size,$voi->color,$voi->quantity,$voi->short_details,$voi->description,$voi->product_image,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Product Report',
            'report_title'=>'Product Report',
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
                            <th class='text-center' style='font-size:12px;' >Category</th>
                        
                            <th class='text-center' style='font-size:12px;' >Sub Category</th>
                        
                            <th class='text-center' style='font-size:12px;' >Product Name</th>
                        
                            <th class='text-center' style='font-size:12px;' >Price</th>
                        
                            <th class='text-center' style='font-size:12px;' >Discount</th>
                        
                            <th class='text-center' style='font-size:12px;' >Size</th>
                        
                            <th class='text-center' style='font-size:12px;' >Color</th>
                        
                            <th class='text-center' style='font-size:12px;' >Quantity</th>
                        
                            <th class='text-center' style='font-size:12px;' >Short Details</th>
                        
                            <th class='text-center' style='font-size:12px;' >Description</th>
                        
                            <th class='text-center' style='font-size:12px;' >Product Image</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->ProductQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->category."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->sub_category."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->product_name."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->price."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->discount."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->size."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->color."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->quantity."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->short_details."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->description."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->product_image."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Product Report',$html);


    }
    public function show(Product $product)
    {
        
        $tab=Product::all();return view('admin.pages.product.product_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product,$id=0)
    {
        $tab=Product::find($id);      
        return view('admin.pages.product.product_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product,$id=0)
    {
        $this->validate($request,[
                
                'category'=>'required',
                'sub_category'=>'required',
                'product_name'=>'required',
                'price'=>'required',
                'size'=>'required',
                'color'=>'required',
                'quantity'=>'required',
        ]);

        $this->SystemAdminLog("Product","Update","Edit / Modify");

        

        $filename_product_10=$request->ex_product_image;
        if ($request->hasFile('product_image')) {
            $img_product = $request->file('product_image');
            $upload_product = 'upload/product';
            $filename_product_10 = env('APP_NAME').'_'.time() . '.' . $img_product->getClientOriginalExtension();
            $img_product->move($upload_product, $filename_product_10);
        }

                
        $tab=Product::find($id);
        
        $tab->category=$request->category;
        $tab->sub_category=$request->sub_category;
        $tab->product_name=$request->product_name;
        $tab->price=$request->price;
        $tab->discount=$request->discount;
        $tab->size=$request->size;
        $tab->color=$request->color;
        $tab->quantity=$request->quantity;
        $tab->short_details=$request->short_details;
        $tab->description=$request->description;
        $tab->product_image=$filename_product_10;
        $tab->save();

        return redirect('product')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product,$id=0)
    {
        $this->SystemAdminLog("Product","Destroy","Delete");

        $tab=Product::find($id);
        $tab->delete();
        return redirect('product')->with('status','Deleted Successfully !');}
}
