<?php

namespace App\Http\Controllers;

use App\Product;
use App\AdminLog;
use Illuminate\Http\Request;
use App\Category;
                
use App\SubCategory;
                
use App\Size;
                
use App\Color;
use App\ProductImage;
use App\ProductColor;
use App\ProductSize;
use DB;
                

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
        $tab=Product::orderBy('id','DESC')->get();
        // dd($tab);
        return view('admin.pages.product.product_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){

        $tab_Category=Category::where('category_status','Active')->get();
        $tab_SubCategory=SubCategory::where('status','Active')->get();
        $tab_Size=Size::all();
        $tab_Color=Color::all();           
        return view('admin.pages.product.product_create',['dataRow_Category'=>$tab_Category,'dataRow_SubCategory'=>$tab_SubCategory,'dataRow_Size'=>$tab_Size,'dataRow_Color'=>$tab_Color]);
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
                
                'category_name'=>'required',
                'sub_category_name'=>'required',
                'product_name'=>'required',
                'product_code'=>'required',
                'price'=>'required',
                'size'=>'required',
                'color'=>'required',
                'quantity'=>'required',
                'description'=>'required',
        ]);

        $this->SystemAdminLog("Product","Save New","Create New");

        //dd($request->file('product_image'));
        
        $tab_0_Category=Category::where('id',$request->category_name)->first();
        $category_name_0_Category=$tab_0_Category->name;
        $tab_1_SubCategory=SubCategory::where('id',$request->sub_category_name)->first();
        $sub_category_name_1_SubCategory=$tab_1_SubCategory->name;

        $size_5_Size=json_encode($request->size);
        $color_6_Color=json_encode($request->color);
        // dd($request->color);
        $tab=new Product();
        
        $tab->category_name_name=$category_name_0_Category;
        $tab->category_name=$request->category_name;
        $tab->sub_category_name_name=$sub_category_name_1_SubCategory;
        $tab->sub_category_name=$request->sub_category_name;
        $tab->product_name=$request->product_name;
        $tab->product_code=$request->product_code;
        $tab->price=$request->price;
        $tab->old_price=$request->old_price;
        $tab->size=$size_5_Size;
        $tab->color=$color_6_Color;
        $tab->quantity=$request->quantity;
        $tab->short_details=$request->short_details;
        $tab->description=$request->description;
        $tab->created_by= $this->sdc->UserID();
        $tab->save();
        $pro_id = $tab->id;
        if($request->hasFile('product_image')):
            foreach ($request->file('product_image') as $file) :
                $path = 'upload/product';
                $img_product = $request->file('product_image');
                $titre = time().'_'.$file->getClientOriginalName();
                //$titre = env('APP_NAME').'_'.time() . '.' . $file->getClientOriginalExtension();
                $file->move($path, $titre);
                $fichier = New ProductImage();
                $fichier->product_id = $pro_id;
                $fichier->title = $titre;
                $fichier->path = $path;
                $fichier->created_by= $this->sdc->UserID();
                $fichier->save();
    
            endforeach;
    
        endif;
        
        foreach($request->color as $color):
            
            $tab_1_Color=Color::where('name','like',$color)->first();
            $color_id=$tab_1_Color->id;
            // dd($tab_0_Product);
            $tab=new ProductColor();
            
            $tab->product_id_product_name=$request->product_name;
            $tab->product_id=$pro_id;
            $tab->color_id_name=$color;
            $tab->color_id=$color_id;
           $tab->save();
        endforeach;

        foreach($request->size as $size):

            $tab_1_Size=Size::where('name','like',$size)->first();
            $size_id=$tab_1_Size->id;
            // dd($size_id_1_Size);
            $tab=new ProductSize();
            
            $tab->product_id_product_name=$request->product_name;
            $tab->product_id=$pro_id;
            $tab->size_id_name=$size;
            $tab->size_id=$size_id;
            $tab->save();
        endforeach;

        return redirect('adminProduct')->with('status','Added Successfully !');

    }
    public function ajaxSubCat(Request $request) {

        $query = DB::table('sub_categories')->where('category', $request->div)->get();
        return response()->json($query);
    }
    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'category_name'=>'required',
                'sub_category_name'=>'required',
                'product_name'=>'required',
                'price'=>'required',
                'size'=>'required',
                'color'=>'required',
                'quantity'=>'required',
                'description'=>'required',
        ]);

        $tab=new Product();
        
        $tab->category_name_name=$category_name_0_Category;
        $tab->category_name=$request->category_name;
        $tab->sub_category_name_name=$sub_category_name_1_SubCategory;
        $tab->sub_category_name=$request->sub_category_name;
        $tab->product_name=$request->product_name;
        $tab->price=$request->price;
        $tab->discount=$request->discount;
        $tab->size_name=$size_5_Size;
        $tab->size=$request->size;
        $tab->color_name=$color_6_Color;
        $tab->color=$request->color;
        $tab->quantity=$request->quantity;
        $tab->short_details=$request->short_details;
        $tab->description=$request->description;
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
                            $query->orWhere('category_name','LIKE','%'.$search.'%');
                            $query->orWhere('sub_category_name','LIKE','%'.$search.'%');
                            $query->orWhere('product_name','LIKE','%'.$search.'%');
                            $query->orWhere('price','LIKE','%'.$search.'%');
                            $query->orWhere('discount','LIKE','%'.$search.'%');
                            $query->orWhere('size','LIKE','%'.$search.'%');
                            $query->orWhere('color','LIKE','%'.$search.'%');
                            $query->orWhere('quantity','LIKE','%'.$search.'%');
                            $query->orWhere('short_details','LIKE','%'.$search.'%');
                            $query->orWhere('description','LIKE','%'.$search.'%');
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
                            $query->orWhere('category_name','LIKE','%'.$search.'%');
                            $query->orWhere('sub_category_name','LIKE','%'.$search.'%');
                            $query->orWhere('product_name','LIKE','%'.$search.'%');
                            $query->orWhere('price','LIKE','%'.$search.'%');
                            $query->orWhere('discount','LIKE','%'.$search.'%');
                            $query->orWhere('size','LIKE','%'.$search.'%');
                            $query->orWhere('color','LIKE','%'.$search.'%');
                            $query->orWhere('quantity','LIKE','%'.$search.'%');
                            $query->orWhere('short_details','LIKE','%'.$search.'%');
                            $query->orWhere('description','LIKE','%'.$search.'%');
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
                                'ID','Category Name','Sub Category Name','Product Name','Price','Discount','Size','Color','Quantity','Short Details','Description','Created Date');
        array_push($data, $array_column);
        $inv=$this->ProductQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->category_name,$voi->sub_category_name,$voi->product_name,$voi->price,$voi->discount,$voi->size,$voi->color,$voi->quantity,$voi->short_details,$voi->description,formatDate($voi->created_at));
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
                            <th class='text-center' style='font-size:12px;' >Category Name</th>
                        
                            <th class='text-center' style='font-size:12px;' >Sub Category Name</th>
                        
                            <th class='text-center' style='font-size:12px;' >Product Name</th>
                        
                            <th class='text-center' style='font-size:12px;' >Price</th>
                        
                            <th class='text-center' style='font-size:12px;' >Discount</th>
                        
                            <th class='text-center' style='font-size:12px;' >Size</th>
                        
                            <th class='text-center' style='font-size:12px;' >Color</th>
                        
                            <th class='text-center' style='font-size:12px;' >Quantity</th>
                        
                            <th class='text-center' style='font-size:12px;' >Short Details</th>
                        
                            <th class='text-center' style='font-size:12px;' >Description</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->ProductQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->category_name."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->sub_category_name."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->product_name."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->price."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->discount."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->size."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->color."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->quantity."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->short_details."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->description."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";
// dd($html);
    $this->sdc->PDFLayout('Product Report',$html);
    }
    public function show(Product $product)
    {
        $tab=Product::orderBy('id','DESC')->get();
        return view('admin.pages.product.product_list',['dataRow'=>$tab]);
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
        $tab_Category=Category::all();
        $tab_SubCategory=SubCategory::all();
        $tab_Size=Size::all();
        $tab_Color=Color::all(); 
        $tabImage=ProductImage::where('product_id','=',$id)->get(); 
        //   dd($tabImage);
        return view('admin.pages.product.product_edit',
        [
            'dataRow_Category'=>$tab_Category,
            'dataRow_SubCategory'=>$tab_SubCategory,
            'dataRow_Size'=>$tab_Size,
            'dataRow_Color'=>$tab_Color,
            'tabImage'      =>$tabImage,
            'dataRow'=>$tab,'edit'=>true
        ]);  
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
                
                'category_name'=>'required',
                'sub_category_name'=>'required',
                'product_name'=>'required',
                'price'=>'required',
                'size'=>'required',
                'color'=>'required',
                'quantity'=>'required',
                'description'=>'required',
        ]);

        $this->SystemAdminLog("Product","Update","Edit / Modify");

        
        
        
        $tab_0_Category=Category::where('id',$request->category_name)->first();
        $category_name_0_Category=$tab_0_Category->name;
        $tab_1_SubCategory=SubCategory::where('id',$request->sub_category_name)->first();
        $sub_category_name_1_SubCategory=$tab_1_SubCategory->name;

        $size_5_Size=json_encode($request->size);
        $color_6_Color=json_encode($request->color);
        //dd($color_6_Color);
        $tab=Product::find($id);
        
        $tab->category_name_name=$category_name_0_Category;
        $tab->category_name=$request->category_name;
        $tab->sub_category_name_name=$sub_category_name_1_SubCategory;
        $tab->sub_category_name=$request->sub_category_name;
        $tab->product_name=$request->product_name;
        $tab->product_code=$request->product_code;
        $tab->price=$request->price;
        $tab->old_price=$request->old_price;
        $tab->size=$size_5_Size;
        $tab->color=$color_6_Color;
        $tab->quantity=$request->quantity;
        $tab->short_details=$request->short_details;
        $tab->description=$request->description;
        $tab->updated_by= $this->sdc->UserID();
        // dd($request->description);
        // dd($tab);
        $tab->save();
        
        if($request->hasFile('product_image') !=false){
            $tabDe=ProductImage::where('product_id','=',$id);
            $tabDe->delete();

            if($request->hasFile('product_image')):
                foreach ($request->file('product_image') as $file) :
                    $path = 'upload/product';
                    $img_product = $request->file('product_image');
                    $titre = time().'_'.$file->getClientOriginalName();
                    //$titre = env('APP_NAME').'_'.time() . '.' . $file->getClientOriginalExtension();
                    $file->move($path, $titre);
                    $fichier = New ProductImage();
                    $fichier->product_id = $id;
                    $fichier->title = $titre;
                    $fichier->updated_by= $this->sdc->UserID();
                    $fichier->path = $path;
                    $fichier->save();
        
                endforeach;
        
            endif;
        }

        return redirect('adminProduct')->with('status','Updated Successfully !');
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
        $tab->updated_by= $this->sdc->UserID();
        $tab->delete();
        return redirect('product')->with('status','Deleted Successfully !');}
}
