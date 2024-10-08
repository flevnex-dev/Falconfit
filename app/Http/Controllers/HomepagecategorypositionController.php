<?php

namespace App\Http\Controllers;

use App\HomePageCategoryPosition;
use App\AdminLog;
use Illuminate\Http\Request;
use App\Category;
                
use App\Product;
                

class HomePageCategoryPositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Home Page Category Position";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tab=HomePageCategoryPosition::all();
        return view('admin.pages.homepagecategoryposition.homepagecategoryposition_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


        
        $tab_Category=Category::all();
        $tab_Product=Product::all();           
        return view('admin.pages.homepagecategoryposition.homepagecategoryposition_create',['dataRow_Category'=>$tab_Category,'dataRow_Product'=>$tab_Product]);
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
                
                // 'category'=>'required',
                'category_position'=>'required',
                'section_status'=>'required',
        ]);

        $this->SystemAdminLog("Home Page Category Position","Save New","Create New");

        $category_0_Category='';
        if(!empty($request->category))
        {
            $tab_0_Category=Category::where('id',$request->category)->first();
            $category_0_Category=$tab_0_Category->name;
        }
        $filename_homepagecategoryposition_1='';
        if ($request->hasFile('side_image')) {
            $img_homepagecategoryposition = $request->file('side_image');
            $upload_homepagecategoryposition = 'upload/homepagecategoryposition';
            $filename_homepagecategoryposition_1 = env('APP_NAME').'_'.time() . '.' . $img_homepagecategoryposition->getClientOriginalExtension();
            $img_homepagecategoryposition->move($upload_homepagecategoryposition, $filename_homepagecategoryposition_1);
        }
        $product_2_Product="";
        if(!empty($request->product))
        {
            $tab_2_Product=Product::where('id',$request->product)->first();
            $product_2_Product=$tab_2_Product->product_name;
        }        
        
        $tab=new HomePageCategoryPosition();
        $tab->category_name=$category_0_Category;
        $tab->category=$request->category;
        $tab->side_image=$filename_homepagecategoryposition_1;
        $tab->product_product_name=$product_2_Product;
        $tab->product=$request->product;
        $tab->category_position=$request->category_position;
        $tab->section_status=$request->section_status;
        $tab->save();

        return redirect('homepagecategoryposition')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                // 'category'=>'required',
                'side_image'=>'required',
                // 'product'=>'required',
                'category_position'=>'required',
                'section_status'=>'required',
        ]);

        $tab=new HomePageCategoryPosition();
        
        $tab->category_name=$category_0_Category;
        $tab->category=$request->category;
        $tab->side_image=$filename_homepagecategoryposition_1;
        $tab->product_product_name=$product_2_Product;
        $tab->product=$request->product;
        $tab->category_position=$request->category_position;
        $tab->section_status=$request->section_status;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HomePageCategoryPosition  $homepagecategoryposition
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('category','LIKE','%'.$search.'%');
                            $query->orWhere('side_image','LIKE','%'.$search.'%');
                            $query->orWhere('product','LIKE','%'.$search.'%');
                            $query->orWhere('category_position','LIKE','%'.$search.'%');
                            $query->orWhere('section_status','LIKE','%'.$search.'%');
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
                            $query->orWhere('side_image','LIKE','%'.$search.'%');
                            $query->orWhere('product','LIKE','%'.$search.'%');
                            $query->orWhere('category_position','LIKE','%'.$search.'%');
                            $query->orWhere('section_status','LIKE','%'.$search.'%');
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

    
    public function HomePageCategoryPositionQuery($request)
    {
        $HomePageCategoryPosition_data=HomePageCategoryPosition::orderBy('id','DESC')->get();

        return $HomePageCategoryPosition_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Category','Side Image','Product','Category Position','Section Status','Created Date');
        array_push($data, $array_column);
        $inv=$this->HomePageCategoryPositionQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->category,$voi->side_image,$voi->product,$voi->category_position,$voi->section_status,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Home Page Category Position Report',
            'report_title'=>'Home Page Category Position Report',
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
                        
                            <th class='text-center' style='font-size:12px;' >Side Image</th>
                        
                            <th class='text-center' style='font-size:12px;' >Product</th>
                        
                            <th class='text-center' style='font-size:12px;' >Category Position</th>
                        
                            <th class='text-center' style='font-size:12px;' >Section Status</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->HomePageCategoryPositionQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->category."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->side_image."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->product."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->category_position."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->section_status."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Home Page Category Position Report',$html);


    }
    public function show(HomePageCategoryPosition $homepagecategoryposition)
    {
        
        $tab=HomePageCategoryPosition::all();return view('admin.pages.homepagecategoryposition.homepagecategoryposition_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HomePageCategoryPosition  $homepagecategoryposition
     * @return \Illuminate\Http\Response
     */
    public function edit(HomePageCategoryPosition $homepagecategoryposition,$id=0)
    {
        $tab=HomePageCategoryPosition::find($id); 
        $tab_Category=Category::all();
        $tab_Product=Product::all();     
        return view('admin.pages.homepagecategoryposition.homepagecategoryposition_edit',['dataRow_Category'=>$tab_Category,'dataRow_Product'=>$tab_Product,'dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HomePageCategoryPosition  $homepagecategoryposition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomePageCategoryPosition $homepagecategoryposition,$id=0)
    {
        $this->validate($request,[
                
                // 'category'=>'required',
                // 'product'=>'required',
                'category_position'=>'required',
                'section_status'=>'required',
        ]);

        $this->SystemAdminLog("Home Page Category Position","Update","Edit / Modify");

        
        $category_0_Category='';
        if(!empty($request->category))
        {
            $tab_0_Category=Category::where('id',$request->category)->first();
            $category_0_Category=$tab_0_Category->name;
        }

        $filename_homepagecategoryposition_1=$request->ex_side_image;
        if ($request->hasFile('side_image')) {
            $img_homepagecategoryposition = $request->file('side_image');
            $upload_homepagecategoryposition = 'upload/homepagecategoryposition';
            $filename_homepagecategoryposition_1 = env('APP_NAME').'_'.time() . '.' . $img_homepagecategoryposition->getClientOriginalExtension();
            $img_homepagecategoryposition->move($upload_homepagecategoryposition, $filename_homepagecategoryposition_1);
        }

        $product_2_Product="";        
        if(!empty($request->product))
        {
            $tab_2_Product=Product::where('id',$request->product)->first();
            $product_2_Product=$tab_2_Product->product_name;
        }   
        //dd($tab_2_Product);
        $tab=HomePageCategoryPosition::find($id);
        $tab->category_name=$category_0_Category;
        $tab->category=$request->category;
        $tab->side_image=$filename_homepagecategoryposition_1;
        $tab->product_product_name=$product_2_Product;
        $tab->product=$request->product;
        $tab->category_position=$request->category_position;
        $tab->section_status=$request->section_status;
        $tab->save();

        return redirect('homepagecategoryposition')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HomePageCategoryPosition  $homepagecategoryposition
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomePageCategoryPosition $homepagecategoryposition,$id=0)
    {
        $this->SystemAdminLog("Home Page Category Position","Destroy","Delete");

        $tab=HomePageCategoryPosition::find($id);
        $tab->delete();
        return redirect('homepagecategoryposition')->with('status','Deleted Successfully !');}
}
