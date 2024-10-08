<?php

namespace App\Http\Controllers;

use App\SiteSetting;
use App\AdminLog;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Site Setting";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tabCount=SiteSetting::count();
        if($tabCount==0)
        {
            return redirect(url('sitesetting/create'));
        }else{

            $tab=SiteSetting::orderBy('id','DESC')->first();      
        return view('admin.pages.sitesetting.sitesetting_edit',['dataRow'=>$tab,'edit'=>true]); 
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


        
        $tabCount=SiteSetting::count();
        if($tabCount==0)
        {            
        return view('admin.pages.sitesetting.sitesetting_create');
            
        }else{

            $tab=SiteSetting::orderBy('id','DESC')->first();      
        return view('admin.pages.sitesetting.sitesetting_edit',['dataRow'=>$tab,'edit'=>true]); 
        }
        
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
                'main_logo'=>'required',
                'bottom_logo'=>'required',
                'address'=>'required',
                'email'=>'required',
                'mobile_number'=>'required',
                'opening_time'=>'required',
        ]);

        $this->SystemAdminLog("Site Setting","Save New","Create New");

        

        $filename_sitesetting_1='';
        if ($request->hasFile('main_logo')) {
            $img_sitesetting = $request->file('main_logo');
            $upload_sitesetting = 'upload/sitesetting';
            $filename_sitesetting_1 = env('APP_NAME').'_'.time() . '.' . $img_sitesetting->getClientOriginalExtension();
            $img_sitesetting->move($upload_sitesetting, $filename_sitesetting_1);
        }

                

        $filename_sitesetting_2='';
        if ($request->hasFile('bottom_logo')) {
            $img_sitesetting = $request->file('bottom_logo');
            $upload_sitesetting = 'upload/sitesetting';
            $filename_sitesetting_2 = env('APP_NAME').'_'.time() . '.' . $img_sitesetting->getClientOriginalExtension();
            $img_sitesetting->move($upload_sitesetting, $filename_sitesetting_2);
        }

                
        $tab=new SiteSetting();
        
        $tab->name=$request->name;
        $tab->main_logo=$filename_sitesetting_1;
        $tab->bottom_logo=$filename_sitesetting_2;
        $tab->address=$request->address;
        $tab->email=$request->email;
        $tab->mobile_number=$request->mobile_number;
        $tab->opening_time=$request->opening_time;
        $tab->save();

        return redirect('sitesetting')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'name'=>'required',
                'main_logo'=>'required',
                'bottom_logo'=>'required',
                'address'=>'required',
                'email'=>'required',
                'mobile_number'=>'required',
                'opening_time'=>'required',
        ]);

        $tab=new SiteSetting();
        
        $tab->name=$request->name;
        $tab->main_logo=$filename_sitesetting_1;
        $tab->bottom_logo=$filename_sitesetting_2;
        $tab->address=$request->address;
        $tab->email=$request->email;
        $tab->mobile_number=$request->mobile_number;
        $tab->opening_time=$request->opening_time;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SiteSetting  $sitesetting
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('name','LIKE','%'.$search.'%');
                            $query->orWhere('main_logo','LIKE','%'.$search.'%');
                            $query->orWhere('bottom_logo','LIKE','%'.$search.'%');
                            $query->orWhere('address','LIKE','%'.$search.'%');
                            $query->orWhere('email','LIKE','%'.$search.'%');
                            $query->orWhere('mobile_number','LIKE','%'.$search.'%');
                            $query->orWhere('opening_time','LIKE','%'.$search.'%');
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
                            $query->orWhere('main_logo','LIKE','%'.$search.'%');
                            $query->orWhere('bottom_logo','LIKE','%'.$search.'%');
                            $query->orWhere('address','LIKE','%'.$search.'%');
                            $query->orWhere('email','LIKE','%'.$search.'%');
                            $query->orWhere('mobile_number','LIKE','%'.$search.'%');
                            $query->orWhere('opening_time','LIKE','%'.$search.'%');
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

    
    public function SiteSettingQuery($request)
    {
        $SiteSetting_data=SiteSetting::orderBy('id','DESC')->get();

        return $SiteSetting_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Name','Main Logo','Bottom Logo','Address','Email','Mobile Number','Opening Time','Created Date');
        array_push($data, $array_column);
        $inv=$this->SiteSettingQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->name,$voi->main_logo,$voi->bottom_logo,$voi->address,$voi->email,$voi->mobile_number,$voi->opening_time,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Site Setting Report',
            'report_title'=>'Site Setting Report',
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
                        
                            <th class='text-center' style='font-size:12px;' >Main Logo</th>
                        
                            <th class='text-center' style='font-size:12px;' >Bottom Logo</th>
                        
                            <th class='text-center' style='font-size:12px;' >Address</th>
                        
                            <th class='text-center' style='font-size:12px;' >Email</th>
                        
                            <th class='text-center' style='font-size:12px;' >Mobile Number</th>
                        
                            <th class='text-center' style='font-size:12px;' >Opening Time</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->SiteSettingQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->name."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->main_logo."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->bottom_logo."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->address."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->email."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->mobile_number."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->opening_time."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Site Setting Report',$html);


    }
    public function show(SiteSetting $sitesetting)
    {
        
        $tab=SiteSetting::all();return view('admin.pages.sitesetting.sitesetting_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SiteSetting  $sitesetting
     * @return \Illuminate\Http\Response
     */
    public function edit(SiteSetting $sitesetting,$id=0)
    {
        $tab=SiteSetting::find($id);      
        return view('admin.pages.sitesetting.sitesetting_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SiteSetting  $sitesetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiteSetting $sitesetting,$id=0)
    {
        $this->validate($request,[
                
                'name'=>'required',
                'address'=>'required',
                'email'=>'required',
                'mobile_number'=>'required',
                'opening_time'=>'required',
        ]);

        $this->SystemAdminLog("Site Setting","Update","Edit / Modify");

        

        $filename_sitesetting_1=$request->ex_main_logo;
        if ($request->hasFile('main_logo')) {
            $img_sitesetting = $request->file('main_logo');
            $upload_sitesetting = 'upload/sitesetting';
            $filename_sitesetting_1 = env('APP_NAME').'_'.time() . '.' . $img_sitesetting->getClientOriginalExtension();
            $img_sitesetting->move($upload_sitesetting, $filename_sitesetting_1);
        }

                

        $filename_sitesetting_2=$request->ex_bottom_logo;
        if ($request->hasFile('bottom_logo')) {
            $img_sitesetting = $request->file('bottom_logo');
            $upload_sitesetting = 'upload/sitesetting';
            $filename_sitesetting_2 = env('APP_NAME').'_'.time() . '.' . $img_sitesetting->getClientOriginalExtension();
            $img_sitesetting->move($upload_sitesetting, $filename_sitesetting_2);
        }

                
        $tab=SiteSetting::find($id);
        
        $tab->name=$request->name;
        $tab->main_logo=$filename_sitesetting_1;
        $tab->bottom_logo=$filename_sitesetting_2;
        $tab->address=$request->address;
        $tab->email=$request->email;
        $tab->mobile_number=$request->mobile_number;
        $tab->opening_time=$request->opening_time;
        $tab->save();

        return redirect('sitesetting')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SiteSetting  $sitesetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(SiteSetting $sitesetting,$id=0)
    {
        $this->SystemAdminLog("Site Setting","Destroy","Delete");

        $tab=SiteSetting::find($id);
        $tab->delete();
        return redirect('sitesetting')->with('status','Deleted Successfully !');}
}
