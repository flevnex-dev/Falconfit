<?php

namespace App\Http\Controllers;

use App\ManuCategoryCMS;
use App\AdminLog;
use Illuminate\Http\Request;

class ManuCategoryCMSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Manu Category CMS";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tab=ManuCategoryCMS::all();
        return view('admin.pages.manucategorycms.manucategorycms_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


                   
        return view('admin.pages.manucategorycms.manucategorycms_create');
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
                
                'menu_title'=>'required',
                'menu_link'=>'required',
                'menu_position'=>'required',
                'menu_status'=>'required',
        ]);

        $this->SystemAdminLog("Manu Category CMS","Save New","Create New");

        
        $tab=new ManuCategoryCMS();
        
        $tab->menu_title=$request->menu_title;
        $tab->menu_link=$request->menu_link;
        $tab->menu_position=$request->menu_position;
        $tab->menu_status=$request->menu_status;
        $tab->save();

        return redirect('manucategorycms')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'menu_title'=>'required',
                'menu_link'=>'required',
                'menu_position'=>'required',
                'menu_status'=>'required',
        ]);

        $tab=new ManuCategoryCMS();
        
        $tab->menu_title=$request->menu_title;
        $tab->menu_link=$request->menu_link;
        $tab->menu_position=$request->menu_position;
        $tab->menu_status=$request->menu_status;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ManuCategoryCMS  $manucategorycms
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('menu_title','LIKE','%'.$search.'%');
                            $query->orWhere('menu_link','LIKE','%'.$search.'%');
                            $query->orWhere('menu_position','LIKE','%'.$search.'%');
                            $query->orWhere('menu_status','LIKE','%'.$search.'%');
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
                            $query->orWhere('menu_title','LIKE','%'.$search.'%');
                            $query->orWhere('menu_link','LIKE','%'.$search.'%');
                            $query->orWhere('menu_position','LIKE','%'.$search.'%');
                            $query->orWhere('menu_status','LIKE','%'.$search.'%');
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

    
    public function ManuCategoryCMSQuery($request)
    {
        $ManuCategoryCMS_data=ManuCategoryCMS::orderBy('id','DESC')->get();

        return $ManuCategoryCMS_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Menu Title','Menu Link','Menu Position','Menu Status','Created Date');
        array_push($data, $array_column);
        $inv=$this->ManuCategoryCMSQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->menu_title,$voi->menu_link,$voi->menu_position,$voi->menu_status,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Manu Category CMS Report',
            'report_title'=>'Manu Category CMS Report',
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
                            <th class='text-center' style='font-size:12px;' >Menu Title</th>
                        
                            <th class='text-center' style='font-size:12px;' >Menu Link</th>
                        
                            <th class='text-center' style='font-size:12px;' >Menu Position</th>
                        
                            <th class='text-center' style='font-size:12px;' >Menu Status</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->ManuCategoryCMSQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->menu_title."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->menu_link."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->menu_position."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->menu_status."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Manu Category CMS Report',$html);


    }
    public function show(ManuCategoryCMS $manucategorycms)
    {
        
        $tab=ManuCategoryCMS::all();return view('admin.pages.manucategorycms.manucategorycms_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ManuCategoryCMS  $manucategorycms
     * @return \Illuminate\Http\Response
     */
    public function edit(ManuCategoryCMS $manucategorycms,$id=0)
    {
        $tab=ManuCategoryCMS::find($id);      
        return view('admin.pages.manucategorycms.manucategorycms_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ManuCategoryCMS  $manucategorycms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ManuCategoryCMS $manucategorycms,$id=0)
    {
        $this->validate($request,[
                
                'menu_title'=>'required',
                'menu_link'=>'required',
                'menu_position'=>'required',
                'menu_status'=>'required',
        ]);

        $this->SystemAdminLog("Manu Category CMS","Update","Edit / Modify");

        
        $tab=ManuCategoryCMS::find($id);
        
        $tab->menu_title=$request->menu_title;
        $tab->menu_link=$request->menu_link;
        $tab->menu_position=$request->menu_position;
        $tab->menu_status=$request->menu_status;
        $tab->save();

        return redirect('manucategorycms')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ManuCategoryCMS  $manucategorycms
     * @return \Illuminate\Http\Response
     */
    public function destroy(ManuCategoryCMS $manucategorycms,$id=0)
    {
        $this->SystemAdminLog("Manu Category CMS","Destroy","Delete");

        $tab=ManuCategoryCMS::find($id);
        $tab->delete();
        return redirect('manucategorycms')->with('status','Deleted Successfully !');}
}
