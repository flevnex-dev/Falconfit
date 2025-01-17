<?php

namespace App\Http\Controllers;

use App\Highlightcategoryproduct;
use App\AdminLog;
use Illuminate\Http\Request;

class HighlightcategoryproductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="High light category product";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tab=Highlightcategoryproduct::all();
        return view('admin.pages.highlightcategoryproduct.highlightcategoryproduct_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


                   
        return view('admin.pages.highlightcategoryproduct.highlightcategoryproduct_create');
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
                
                'image'=>'required',
                'product_link'=>'required',
                'position'=>'required',
                'status'=>'required',
        ]);

        $this->SystemAdminLog("High light category product","Save New","Create New");

        

        $filename_highlightcategoryproduct_1='';
        if ($request->hasFile('image')) {
            $img_highlightcategoryproduct = $request->file('image');
            $upload_highlightcategoryproduct = 'upload/highlightcategoryproduct';
            $filename_highlightcategoryproduct_1 = env('APP_NAME').'_'.time() . '.' . $img_highlightcategoryproduct->getClientOriginalExtension();
            $img_highlightcategoryproduct->move($upload_highlightcategoryproduct, $filename_highlightcategoryproduct_1);
        }

                
        $tab=new Highlightcategoryproduct();
        
        $tab->title=$request->title;
        $tab->image=$filename_highlightcategoryproduct_1;
        $tab->product_link=$request->product_link;
        $tab->position=$request->position;
        $tab->status=$request->status;
        $tab->save();

        return redirect('highlightcategoryproduct')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'image'=>'required',
                'product_link'=>'required',
                'position'=>'required',
                'status'=>'required',
        ]);

        $tab=new Highlightcategoryproduct();
        
        $tab->title=$request->title;
        $tab->image=$filename_highlightcategoryproduct_1;
        $tab->product_link=$request->product_link;
        $tab->position=$request->position;
        $tab->status=$request->status;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Highlightcategoryproduct  $highlightcategoryproduct
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('title','LIKE','%'.$search.'%');
                            $query->orWhere('image','LIKE','%'.$search.'%');
                            $query->orWhere('product_link','LIKE','%'.$search.'%');
                            $query->orWhere('position','LIKE','%'.$search.'%');
                            $query->orWhere('status','LIKE','%'.$search.'%');
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
                            $query->orWhere('image','LIKE','%'.$search.'%');
                            $query->orWhere('product_link','LIKE','%'.$search.'%');
                            $query->orWhere('position','LIKE','%'.$search.'%');
                            $query->orWhere('status','LIKE','%'.$search.'%');
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

    
    public function HighlightcategoryproductQuery($request)
    {
        $Highlightcategoryproduct_data=Highlightcategoryproduct::orderBy('id','DESC')->get();

        return $Highlightcategoryproduct_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Title','Image','Product Link','Position','Status','Created Date');
        array_push($data, $array_column);
        $inv=$this->HighlightcategoryproductQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->title,$voi->image,$voi->product_link,$voi->position,$voi->status,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'High light category product Report',
            'report_title'=>'High light category product Report',
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
                        
                            <th class='text-center' style='font-size:12px;' >Image</th>
                        
                            <th class='text-center' style='font-size:12px;' >Product Link</th>
                        
                            <th class='text-center' style='font-size:12px;' >Position</th>
                        
                            <th class='text-center' style='font-size:12px;' >Status</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->HighlightcategoryproductQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->title."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->image."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->product_link."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->position."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->status."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('High light category product Report',$html);


    }
    public function show(Highlightcategoryproduct $highlightcategoryproduct)
    {
        
        $tab=Highlightcategoryproduct::all();return view('admin.pages.highlightcategoryproduct.highlightcategoryproduct_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Highlightcategoryproduct  $highlightcategoryproduct
     * @return \Illuminate\Http\Response
     */
    public function edit(Highlightcategoryproduct $highlightcategoryproduct,$id=0)
    {
        $tab=Highlightcategoryproduct::find($id);      
        return view('admin.pages.highlightcategoryproduct.highlightcategoryproduct_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Highlightcategoryproduct  $highlightcategoryproduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Highlightcategoryproduct $highlightcategoryproduct,$id=0)
    {
        $this->validate($request,[
                
                'product_link'=>'required',
                'position'=>'required',
                'status'=>'required',
        ]);

        $this->SystemAdminLog("High light category product","Update","Edit / Modify");

        

        $filename_highlightcategoryproduct_1=$request->ex_image;
        if ($request->hasFile('image')) {
            $img_highlightcategoryproduct = $request->file('image');
            $upload_highlightcategoryproduct = 'upload/highlightcategoryproduct';
            $filename_highlightcategoryproduct_1 = env('APP_NAME').'_'.time() . '.' . $img_highlightcategoryproduct->getClientOriginalExtension();
            $img_highlightcategoryproduct->move($upload_highlightcategoryproduct, $filename_highlightcategoryproduct_1);
        }

                
        $tab=Highlightcategoryproduct::find($id);
        
        $tab->title=$request->title;
        $tab->image=$filename_highlightcategoryproduct_1;
        $tab->product_link=$request->product_link;
        $tab->position=$request->position;
        $tab->status=$request->status;
        $tab->save();

        return redirect('highlightcategoryproduct')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Highlightcategoryproduct  $highlightcategoryproduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(Highlightcategoryproduct $highlightcategoryproduct,$id=0)
    {
        $this->SystemAdminLog("High light category product","Destroy","Delete");

        $tab=Highlightcategoryproduct::find($id);
        $tab->delete();
        return redirect('highlightcategoryproduct')->with('status','Deleted Successfully !');}
}
