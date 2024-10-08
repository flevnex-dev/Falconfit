<?php

namespace App\Http\Controllers;

use App\testCheckBox;
use App\AdminLog;
use Illuminate\Http\Request;

class testCheckBoxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="testCheckBox";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tab=testCheckBox::all();
        return view('admin.pages.testcheckbox.testcheckbox_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


                   
        return view('admin.pages.testcheckbox.testcheckbox_create');
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

        $this->SystemAdminLog("testCheckBox","Save New","Create New");

        
        $tab=new testCheckBox();
        
        $tab->size=$request->size;
        $tab->save();

        return redirect('testcheckbox')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
        ]);

        $tab=new testCheckBox();
        
        $tab->size=$request->size;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\testCheckBox  $testcheckbox
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('size','LIKE','%'.$search.'%');
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
                            $query->orWhere('size','LIKE','%'.$search.'%');
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

    
    public function testCheckBoxQuery($request)
    {
        $testCheckBox_data=testCheckBox::orderBy('id','DESC')->get();

        return $testCheckBox_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Size','Created Date');
        array_push($data, $array_column);
        $inv=$this->testCheckBoxQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->size,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'testCheckBox Report',
            'report_title'=>'testCheckBox Report',
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
                            <th class='text-center' style='font-size:12px;' >Size</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->testCheckBoxQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->size."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('testCheckBox Report',$html);


    }
    public function show(testCheckBox $testcheckbox)
    {
        
        $tab=testCheckBox::all();return view('admin.pages.testcheckbox.testcheckbox_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\testCheckBox  $testcheckbox
     * @return \Illuminate\Http\Response
     */
    public function edit(testCheckBox $testcheckbox,$id=0)
    {
        $tab=testCheckBox::find($id);      
        return view('admin.pages.testcheckbox.testcheckbox_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\testCheckBox  $testcheckbox
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, testCheckBox $testcheckbox,$id=0)
    {
        $this->validate($request,[
                
        ]);

        $this->SystemAdminLog("testCheckBox","Update","Edit / Modify");

        
        $tab=testCheckBox::find($id);
        
        $tab->size=$request->size;
        $tab->save();

        return redirect('testcheckbox')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\testCheckBox  $testcheckbox
     * @return \Illuminate\Http\Response
     */
    public function destroy(testCheckBox $testcheckbox,$id=0)
    {
        $this->SystemAdminLog("testCheckBox","Destroy","Delete");

        $tab=testCheckBox::find($id);
        $tab->delete();
        return redirect('testcheckbox')->with('status','Deleted Successfully !');}
}
