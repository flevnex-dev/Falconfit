<?php

namespace App\Http\Controllers;

use App\Category;
use App\AdminLog;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Category";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tab=Category::all();
        return view('admin.pages.category.category_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


                   
        return view('admin.pages.category.category_create');
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
                
                'name'=>'required',
                'high_light_home'=>'required',
                'category_status'=>'required',
        ]);

        $this->SystemAdminLog("Category","Save New","Create New");

        

        $filename_category_2='';
        if ($request->hasFile('image')) {
            $img_category = $request->file('image');
            $upload_category = 'upload/category';
            $filename_category_2 = env('APP_NAME').'_'.time() . '.' . $img_category->getClientOriginalExtension();
            $img_category->move($upload_category, $filename_category_2);
        }

                
        $tab=new Category();
        
        $tab->name=$request->name;
        $tab->description=$request->description;
        $tab->image=$filename_category_2;
        $tab->high_light_home=$request->high_light_home;
        $tab->category_status=$request->category_status;
        $tab->save();

        return redirect('category')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'name'=>'required',
                'description'=>'required',
                'image'=>'required',
                'high_light_home'=>'required',
                'category_status'=>'required',
        ]);

        $tab=new Category();
        
        $tab->name=$request->name;
        $tab->description=$request->description;
        $tab->image=$filename_category_2;
        $tab->high_light_home=$request->high_light_home;
        $tab->category_status=$request->category_status;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('name','LIKE','%'.$search.'%');
                            $query->orWhere('description','LIKE','%'.$search.'%');
                            $query->orWhere('image','LIKE','%'.$search.'%');
                            $query->orWhere('high_light_home','LIKE','%'.$search.'%');
                            $query->orWhere('category_status','LIKE','%'.$search.'%');
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
                            $query->orWhere('name','LIKE','%'.$search.'%');
                            $query->orWhere('description','LIKE','%'.$search.'%');
                            $query->orWhere('image','LIKE','%'.$search.'%');
                            $query->orWhere('high_light_home','LIKE','%'.$search.'%');
                            $query->orWhere('category_status','LIKE','%'.$search.'%');
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

    
    public function CategoryQuery($request)
    {
        $Category_data=Category::orderBy('id','DESC')->get();

        return $Category_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Name','Description','Image','High light Home','Category Status','Created Date');
        array_push($data, $array_column);
        $inv=$this->CategoryQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->name,$voi->description,$voi->image,$voi->high_light_home,$voi->category_status,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Category Report',
            'report_title'=>'Category Report',
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
                            <th class='text-center' style='font-size:12px;' >Name</th>
                        
                            <th class='text-center' style='font-size:12px;' >Description</th>
                        
                            <th class='text-center' style='font-size:12px;' >Image</th>
                        
                            <th class='text-center' style='font-size:12px;' >High light Home</th>
                        
                            <th class='text-center' style='font-size:12px;' >Category Status</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->CategoryQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->name."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->description."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->image."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->high_light_home."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->category_status."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Category Report',$html);


    }
    public function show(Category $category)
    {
        
        $tab=Category::all();return view('admin.pages.category.category_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category,$id=0)
    {
        $tab=Category::find($id);      
        return view('admin.pages.category.category_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category,$id=0)
    {
        $this->validate($request,[
                
                'name'=>'required',
                'high_light_home'=>'required',
                'category_status'=>'required',
        ]);

        $this->SystemAdminLog("Category","Update","Edit / Modify");

        

        $filename_category_2=$request->ex_image;
        if ($request->hasFile('image')) {
            $img_category = $request->file('image');
            $upload_category = 'upload/category';
            $filename_category_2 = env('APP_NAME').'_'.time() . '.' . $img_category->getClientOriginalExtension();
            $img_category->move($upload_category, $filename_category_2);
        }

                
        $tab=Category::find($id);
        
        $tab->name=$request->name;
        $tab->description=$request->description;
        $tab->image=$filename_category_2;
        $tab->high_light_home=$request->high_light_home;
        $tab->category_status=$request->category_status;
        $tab->save();

        return redirect('category')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category,$id=0)
    {
        $this->SystemAdminLog("Category","Destroy","Delete");

        $tab=Category::find($id);
        $tab->delete();
        return redirect('category')->with('status','Deleted Successfully !');}
}
