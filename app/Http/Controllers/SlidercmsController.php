<?php

namespace App\Http\Controllers;

use App\SliderCMS;
use App\AdminLog;
use Illuminate\Http\Request;
use App\Product;
                

class SliderCMSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Slider CMS";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tab=SliderCMS::all();
        return view('admin.pages.slidercms.slidercms_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


        
        $tab_Product=Product::all();           
        return view('admin.pages.slidercms.slidercms_create',['dataRow_Product'=>$tab_Product]);
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
                
                'title'=>'required',
                'slider_image'=>'required',
                'slider_status'=>'required',
        ]);

        $this->SystemAdminLog("Slider CMS","Save New","Create New");

        

        $filename_slidercms_2='';
        if ($request->hasFile('slider_image')) {
            $img_slidercms = $request->file('slider_image');
            $upload_slidercms = 'upload/slidercms';
            $filename_slidercms_2 = env('APP_NAME').'_'.time() . '.' . $img_slidercms->getClientOriginalExtension();
            $img_slidercms->move($upload_slidercms, $filename_slidercms_2);
        }

        $product_3_Product="";
        if($request->product_upcoming_status=="No")
        {
            $tab_3_Product=Product::where('id',$request->product)->first();
            $product_3_Product=$tab_3_Product->product_name;
        }
                
        
        
        $tab=new SliderCMS();
        $tab->title=$request->title;
        $tab->sub_title=$request->sub_title;
        $tab->slider_image=$filename_slidercms_2;
        $tab->product_product_name=$product_3_Product;
        $tab->product=$request->product;
        $tab->product_upcoming_status=$request->product_upcoming_status;
        $tab->product_upcoming_content=$request->product_upcoming_content;
        $tab->slider_status=$request->slider_status;
        $tab->save();

        return redirect('slidercms')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'slider_image'=>'required',
                'slider_status'=>'required',
        ]);

        $tab=new SliderCMS();
        
        $tab->title=$request->title;
        $tab->sub_title=$request->sub_title;
        $tab->slider_image=$filename_slidercms_2;
        $tab->product_product_name=$product_3_Product;
        $tab->product=$request->product;
        $tab->product_upcoming_status=$request->product_upcoming_status;
        $tab->product_upcoming_content=$request->product_upcoming_content;
        $tab->slider_status=$request->slider_status;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SliderCMS  $slidercms
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('title','LIKE','%'.$search.'%');
                            $query->orWhere('sub_title','LIKE','%'.$search.'%');
                            $query->orWhere('slider_image','LIKE','%'.$search.'%');
                            $query->orWhere('product','LIKE','%'.$search.'%');
                            $query->orWhere('product_upcoming_status','LIKE','%'.$search.'%');
                            $query->orWhere('product_upcoming_content','LIKE','%'.$search.'%');
                            $query->orWhere('slider_status','LIKE','%'.$search.'%');
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
                            $query->orWhere('title','LIKE','%'.$search.'%');
                            $query->orWhere('sub_title','LIKE','%'.$search.'%');
                            $query->orWhere('slider_image','LIKE','%'.$search.'%');
                            $query->orWhere('product','LIKE','%'.$search.'%');
                            $query->orWhere('product_upcoming_status','LIKE','%'.$search.'%');
                            $query->orWhere('product_upcoming_content','LIKE','%'.$search.'%');
                            $query->orWhere('slider_status','LIKE','%'.$search.'%');
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

    
    public function SliderCMSQuery($request)
    {
        $SliderCMS_data=SliderCMS::orderBy('id','DESC')->get();

        return $SliderCMS_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Title','Sub Title','Slider Image','Product','Product Upcoming Status','Product Upcoming Content','Slider Status','Created Date');
        array_push($data, $array_column);
        $inv=$this->SliderCMSQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->title,$voi->sub_title,$voi->slider_image,$voi->product,$voi->product_upcoming_status,$voi->product_upcoming_content,$voi->slider_status,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Slider CMS Report',
            'report_title'=>'Slider CMS Report',
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
                            <th class='text-center' style='font-size:12px;' >Title</th>
                        
                            <th class='text-center' style='font-size:12px;' >Sub Title</th>
                        
                            <th class='text-center' style='font-size:12px;' >Slider Image</th>
                        
                            <th class='text-center' style='font-size:12px;' >Product</th>
                        
                            <th class='text-center' style='font-size:12px;' >Product Upcoming Status</th>
                        
                            <th class='text-center' style='font-size:12px;' >Product Upcoming Content</th>
                        
                            <th class='text-center' style='font-size:12px;' >Slider Status</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->SliderCMSQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->title."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->sub_title."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->slider_image."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->product."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->product_upcoming_status."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->product_upcoming_content."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->slider_status."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Slider CMS Report',$html);


    }
    public function show(SliderCMS $slidercms)
    {
        
        $tab=SliderCMS::all();return view('admin.pages.slidercms.slidercms_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SliderCMS  $slidercms
     * @return \Illuminate\Http\Response
     */
    public function edit(SliderCMS $slidercms,$id=0)
    {
        $tab=SliderCMS::find($id); 
        $tab_Product=Product::all();     
        return view('admin.pages.slidercms.slidercms_edit',['dataRow_Product'=>$tab_Product,'dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SliderCMS  $slidercms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SliderCMS $slidercms,$id=0)
    {
        $this->validate($request,[
                
                'title'=>'required',
                'slider_status'=>'required',
        ]);

        $this->SystemAdminLog("Slider CMS","Update","Edit / Modify");

        

        $filename_slidercms_2=$request->ex_slider_image;
        if ($request->hasFile('slider_image')) {
            $img_slidercms = $request->file('slider_image');
            $upload_slidercms = 'upload/slidercms';
            $filename_slidercms_2 = env('APP_NAME').'_'.time() . '.' . $img_slidercms->getClientOriginalExtension();
            $img_slidercms->move($upload_slidercms, $filename_slidercms_2);
        }

        $product_3_Product="";
        if($request->product_upcoming_status=="No")
        {
            $tab_3_Product=Product::where('id',$request->product)->first();
            $product_3_Product=$tab_3_Product->product_name;
        }

        $tab=SliderCMS::find($id);


        
        $tab->title=$request->title;
        $tab->sub_title=$request->sub_title;
        $tab->slider_image=$filename_slidercms_2;
        $tab->product_product_name=$product_3_Product;
        $tab->product=$request->product;
        $tab->product_upcoming_status=$request->product_upcoming_status;
        $tab->product_upcoming_content=$request->product_upcoming_content;
        $tab->slider_status=$request->slider_status;
        $tab->save();

        return redirect('slidercms')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SliderCMS  $slidercms
     * @return \Illuminate\Http\Response
     */
    public function destroy(SliderCMS $slidercms,$id=0)
    {
        $this->SystemAdminLog("Slider CMS","Destroy","Delete");

        $tab=SliderCMS::find($id);
        $tab->delete();
        return redirect('slidercms')->with('status','Deleted Successfully !');}
}
