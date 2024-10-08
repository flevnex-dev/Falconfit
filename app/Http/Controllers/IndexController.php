<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteSetting;
use App\Product;
use App\ProductImage;
use App\Color;
use DB;
use App\SliderCMS;
use App\ContactUs;
use App\FeatureProduct;
use App\HomePageCategoryPosition;
use App\Category;
use App\SubCategory;
use App\ManuCategoryCMS;

use App\PaymentMethod;
use App\ShippingCost;
use App\BookingOrder;
use App\OrderDetails;
use App\Customer;
use App\CustomerShippingaddress;
use App\Size;
use App\User;
use Auth;
use Validator;
use Illuminate\Support\Facades\Hash;
use Session;
use App\ProductColor;
use App\ProductSize;
use App\CurrentOffer;
use Illuminate\Support\Facades\Input;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Highlightcategoryproduct;

class IndexController extends Controller
{
    private $moduleName = "";
    private $sdc;
    public function __construct()
    {
        $this->sdc = new CoreCustomController();
    }
    private function categoryParseData()
    {
        $data=[];
        $pureCatCheck=category::count();

        if($pureCatCheck > 0 )
        {
            $pureCat=category::where('category_status','=','Active')->orderBy('id','DESC')->take(3)->get();
            foreach($pureCat as $pc){
                $sCatCheck=SubCategory::where('category',$pc->id)->count();
                $subCatData=[];
                if($sCatCheck > 0)
                {
                    $sCat=SubCategory::where('category',$pc->id)->where('status','=','Active')->get();
                    foreach($sCat as $sc)
                    {
                        $subCatData[]=['id'=>$sc->id,'name'=>$sc->name];
                    }
                }
                $data[]=['id'=>$pc->id,'name'=>$pc->name,'scat'=>$subCatData];
            }
        }

        return $data;
    }
    
    private function proCategoryParseData()
    {
        $data=[];
        $pureCatCheck=category::count();

        if($pureCatCheck > 0 )
        {
            $pureCat=category::where('category_status','=','Active')->orderBy('id','ASC')->get();
            foreach($pureCat as $pc){
                $sCatCheck=SubCategory::where('category',$pc->id)->count();
                $subCatData=[];
                if($sCatCheck > 0)
                {
                    $sCat=SubCategory::where('category',$pc->id)->where('status','=','Active')->get();
                    foreach($sCat as $sc)
                    {
                        $subCatData[]=['id'=>$sc->id,'name'=>$sc->name];
                    }
                }
                $data[]=['id'=>$pc->id,'name'=>$pc->name,'scat'=>$subCatData];
            }
        }

        return $data;
    }
    private function totalCatData(){
        $data=[];
        $subCat = DB::table('sub_categories')
                    ->where('status','=','Active')
                    ->select("sub_categories.id","sub_categories.name","sub_categories.id as subcat");

        $totalCatData = DB::table('categories')
                    ->where('category_status','=','Active')
                    ->select("categories.id","categories.name","categories.id as cat")
                    ->union($subCat)
                    ->get();
        return $totalCatData;
    }
    public function categoryPositionOne (){
        $data = DB::select('
        SELECT cp.*,pro.product_name,pro.price,pro.old_price,pro.id as proID,
        (SELECT GROUP_CONCAT(pi.title) FROM product_images as pi where pi.product_id = pro.id and pi.deleted_at is null) as image
                    
        FROM home_page_category_positions cp
        JOIN products pro on pro.category_name = cp.category
        WHERE cp.category_position =1 and pro.deleted_at is null
        order by pro.id desc        
        ');
        return $data;
    }
    public function categoryPositionTwo (){
        $data = DB::select(' SELECT * FROM home_page_category_positions cp WHERE cp.category_position =2 ');
        return $data;
    }
    public function categoryPositionThree (){
        $data = DB::select('
        SELECT cp.*,pro.product_name,pro.price,pro.old_price,pro.id as proID,
        (SELECT GROUP_CONCAT(pi.title) FROM product_images as pi where pi.product_id = pro.id and pi.deleted_at is null) as image
                    
        FROM home_page_category_positions cp
        JOIN products pro on pro.category_name = cp.category
        WHERE cp.category_position =3 and pro.deleted_at is null
        order by pro.id desc        
        ');
        return $data;
    }
    public function categoryPositionThreeCat (){
        $data = DB::select('
                    SELECT cp.id, cp.category,cp.category_name,sc.id as scID,sc.name FROM home_page_category_positions cp
            JOIN sub_categories sc on sc.category = cp.category
            #GROUP BY sc.name
            WHERE cp.category_position =3 and sc.deleted_at is null
            ORDER BY cp.id LIMIT 3

                    ');
        return $data;
    }
    public function categoryPositionFour (){
        $data = DB::select('
        SELECT cp.*,pro.product_name,pro.price,pro.old_price,pro.id as proID,
        (SELECT GROUP_CONCAT(pi.title) FROM product_images as pi where pi.product_id = pro.id and pi.deleted_at is null) as image
                    
        FROM home_page_category_positions cp
        JOIN products pro on pro.category_name = cp.category
        WHERE cp.category_position =4 and pro.deleted_at is null
        order by pro.id desc        
        ');
        return $data;
    }
    public function categoryPositionFive (){
        $data = DB::select(' SELECT * FROM home_page_category_positions cp WHERE cp.category_position =5 ');
        return $data;
    }
    public function categoryPositionSix (){
        $data = DB::select(' SELECT * FROM home_page_category_positions cp WHERE cp.category_position =6 ');
        return $data;
    }
    public function paginateArray($data, $perPage = 20)
    {
        $page = Paginator::resolveCurrentPage();
        $total = count($data);
        $results = array_slice($data, ($page - 1) * $perPage, $perPage);

        return new LengthAwarePaginator($results, $total, $perPage, $page, [
            'path' => Paginator::resolveCurrentPath(),
        ]);
    }
    public function index(){
        
        $SiteSetting = SiteSetting::first();
        $SliderCMS = SliderCMS::where('slider_status','=','Yes')->orderBy('id', 'desc')->get();
        $featureProduct = FeatureProduct::where('feature_status','=','Yes')->orderBy('id', 'desc')->get();
        $highLightHome = Highlightcategoryproduct::where('status','=','Active')->orderBy('id', 'ASC')->take(5)->get();
        $cat = $this->categoryParseData();
        $ManuCategory = ManuCategoryCMS::where('menu_status','=','Active')->orderBy('id','DESC')->get();
        $featureProduct = DB::select('
            SELECT fp.*, p.price,p.old_price,
            (SELECT GROUP_CONCAT(pi.title) FROM product_images as pi where pi.product_id = fp.product and pi.deleted_at is null) as image
            FROM feature_products AS fp
            LEFT JOIN products p on p.id = fp.product
            WHERE fp.deleted_at is null AND
            fp.feature_status ="Active"
            ORDER BY fp.id DESC limit 10
        ');
        $bestProduct = DB::select('
            SELECT COUNT(od.product_id) as count_data,pro.* ,
            (SELECT GROUP_CONCAT(pi.title) FROM product_images as pi where pi.product_id = od.product_id and pi.deleted_at is null) as image
            FROM order_detailses od 
            LEFT JOIN products AS pro on pro.id = od.product_id
            GROUP BY od.product_id
            ORDER by od.id Asc
        ');
        $totalCatData = $this->totalCatData();
        
        $category_position1 = $this->categoryPositionOne();
        $category_position2 = $this->categoryPositionTwo();
        $category_position3 = $this->categoryPositionThree();
        $category_position3_cat = $this->categoryPositionThreeCat();
        $category_position4 = $this->categoryPositionFour();
        $category_position5 = $this->categoryPositionFive();
        $category_position6 = $this->categoryPositionSix();
        $CurrentOffer = CurrentOffer::where('status','Active')->take(1)->first();

        // dd($highLightHome);
        return view('site.pages.index',compact(
            'SiteSetting',
            'cat',
            'SliderCMS',
            'featureProduct',
            'highLightHome',
            'ManuCategory',
            'totalCatData',
            'category_position1',
            'category_position2',
            'category_position3',
            'category_position3_cat',
            'category_position4',
            'category_position5',
            'category_position6',
            'CurrentOffer',
            'bestProduct'
        ));
    }
    public function featuresProduct(){

        $SiteSetting = SiteSetting::first();
        $cat = $this->categoryParseData();
        $pureCat=$this->proCategoryParseData();
        $ManuCategory = ManuCategoryCMS::where('menu_status','=','Active')->orderBy('id','DESC')->get();
        $size=Size::all();
        $color=Color::all();  
        $Product = $this->paginateArray(DB::select('
            SELECT fp.*, p.*,
            (SELECT GROUP_CONCAT(pi.title) FROM product_images as pi where pi.product_id = fp.product and pi.deleted_at is null) as image
            FROM feature_products AS fp
            LEFT JOIN products p on p.id = fp.product
            WHERE fp.deleted_at is null AND
            fp.feature_status ="Active"
            ORDER BY fp.id DESC
        '));
        $totalCatData = $this->totalCatData();
        // dd($Product);
        return view(
            'site.pages.shop',
            compact(
                'SiteSetting',
                'cat',
                'Product',
                'pureCat',
                'ManuCategory',
                'totalCatData',
                'size','color'
            ));
    }
    public function shop(){
        $SiteSetting = SiteSetting::first();
        $size=Size::all();
        $color=Color::all();
        $Product = $this->paginateArray(DB::select('
        SELECT pro.*,
        (SELECT GROUP_CONCAT(pi.title) FROM product_images as pi where pi.product_id = pro.id and pi.deleted_at is null) as image
        FROM products AS pro
        WHERE pro.deleted_at is null
        ORDER BY pro.id DESC
        '));
        $totalCatData = $this->totalCatData();

        // dd($res);
        return view(
            'site.pages.shop',
            compact(
                'SiteSetting',
                'Product',
                'totalCatData',
                'size','color'
            ));
    }
    public function categoryProduct(Request $request,$id=0,$any=''){

        $SiteSetting = SiteSetting::first();
        $cat = $this->categoryParseData();
        $pureCat=$this->proCategoryParseData();
        $ManuCategory = ManuCategoryCMS::where('menu_status','=','Active')->orderBy('id','DESC')->get();
        $size=Size::all();
        $color=Color::all();
        $Product = $this->paginateArray(DB::select('
        SELECT pro.*,
        (SELECT GROUP_CONCAT(pi.title) FROM product_images as pi where pi.product_id = pro.id and pi.deleted_at is null) as image
        FROM products AS pro
        WHERE pro.deleted_at is null and
        pro.category_name = "'.$id.'"
        ORDER BY pro.id DESC
        '));
        // $total = count($data);
        // $results = array_slice($data, ($page - 1) * $perPage, $perPage);

        $totalCatData = $this->totalCatData();

        // dd($Product);
        return view(
            'site.pages.shop',
            compact(
                'SiteSetting',
                'cat',
                'Product',
                'pureCat',
                'ManuCategory',
                'totalCatData',
                'size',
                'color'
            ));
    }
    public function shopColorData(Request $request)
    {
        // dd($request);
        $SiteSetting = SiteSetting::first();
        $cat = $this->categoryParseData();
        $pureCat=$this->proCategoryParseData();
        $ManuCategory = ManuCategoryCMS::where('menu_status','=','Active')->orderBy('id','DESC')->get();
        $size=Size::all();
        $color=Color::all();
        $Product = $this->paginateArray(DB::select('
        SELECT pro.*,
        (SELECT GROUP_CONCAT(pi.title) FROM product_images as pi where pi.product_id = pro.id and pi.deleted_at is null) as image,pc.color_id_name
        FROM products AS pro
        LEFT JOIN product_colors as pc on pc.product_id = pro.id
        WHERE pro.deleted_at is null and
        pc.color_id="'.$request->product_colors.'"
        ORDER BY pro.id DESC
        '));

        $totalCatData = $this->totalCatData();

        // dd($color);
        // return redirect()->back();
        return view(
            'site.pages.shop',
            compact(
                'SiteSetting',
                'cat',
                'Product',
                'pureCat',
                'ManuCategory',
                'totalCatData',
                'size',
                'color'
            ));
    }
    public function shopSizeData(Request $request)
    {
        // dd($request);
        $SiteSetting = SiteSetting::first();
        $cat = $this->categoryParseData();
        $pureCat=$this->proCategoryParseData();
        $ManuCategory = ManuCategoryCMS::where('menu_status','=','Active')->orderBy('id','DESC')->get();
        $size=Size::all();
        $color=Color::all();
        $Product = $this->paginateArray(DB::select('
        SELECT pro.*,
        (SELECT GROUP_CONCAT(pi.title) FROM product_images as pi where pi.product_id = pro.id and pi.deleted_at is null) as image,ps.size_id_name
        FROM products AS pro
        LEFT JOIN product_sizes as ps on ps.product_id = pro.id
        WHERE pro.deleted_at is null and
        ps.size_id="'.$request->product_size.'"
        ORDER BY pro.id DESC
        '));

        $totalCatData = $this->totalCatData();

        // dd($color);
        return view(
            'site.pages.shop',
            compact(
                'SiteSetting',
                'cat',
                'Product',
                'pureCat',
                'ManuCategory',
                'totalCatData',
                'size',
                'color'
            ));
    }
    public function subCategoryProduct($cid=0, $sid=0, $any=''){

        $SiteSetting = SiteSetting::first();
        $cat = $this->categoryParseData();
        $pureCat=$this->proCategoryParseData();
        $ManuCategory = ManuCategoryCMS::where('menu_status','=','Active')->orderBy('id','DESC')->get();
        $size=Size::all();
        $color=Color::all();
        $Product = $this->paginateArray(DB::select('
        SELECT pro.*,
        (SELECT GROUP_CONCAT(pi.title) FROM product_images as pi where pi.product_id = pro.id and pi.deleted_at is null) as image
        FROM products AS pro
        WHERE pro.deleted_at is null and
        pro.category_name = "'.$cid.'" AND
        pro.sub_category_name = "'.$sid.'" 
        ORDER BY pro.id DESC
        '));
        $totalCatData = $this->totalCatData();

        // dd($Product);
        return view(
            'site.pages.shop',
            compact(
                'SiteSetting',
                'cat',
                'Product',
                'pureCat',
                'ManuCategory',
                'totalCatData',
                'size','color'
            ));
    }
    public function productDetails(Request $request){
        $SiteSetting = SiteSetting::first();
        $cat = $this->categoryParseData();
        $pureCat=$this->proCategoryParseData();
        $ManuCategory = ManuCategoryCMS::where('menu_status','=','Active')->orderBy('id','DESC')->get();
        $pro_id = $request->id;
        
        $product = DB::select('
            SELECT pro.*,
            (SELECT GROUP_CONCAT(pi.title) FROM product_images as pi where pi.product_id = pro.id and pi.deleted_at is null) as image
            FROM products AS pro
            WHERE pro.deleted_at is null
            and pro.id ="'.$pro_id.'"
            ORDER BY pro.id DESC
        ');
        $totalCatData = $this->totalCatData();
        $colorDB = ProductColor::leftjoin('colors','product_colors.color_id','=','colors.id')
                    ->select('product_colors.*','colors.color_code')
                    ->where('product_id',$pro_id)
                    ->get();
        $size = ProductSize::leftjoin('sizes','product_sizes.size_id','=','sizes.id')
                    ->select('product_sizes.*')
                    ->where('product_id',$pro_id)
                    ->get();
        $pro_cat_id = $product[0]->category_name;
        $caterogyWiseProduct = DB::select('
                    SELECT pro.*,
                    (SELECT GROUP_CONCAT(pi.title) FROM product_images as pi where pi.product_id = pro.id and pi.deleted_at is null) as image
                    FROM products AS pro
                    WHERE pro.deleted_at is null
                    and pro.category_name ="'.$pro_cat_id.'" and pro.id != "'.$pro_id.'"
                    ORDER BY pro.id DESC
                ');
        // dd($caterogyWiseProduct);
        return view('site.pages.product_details',compact(
            'SiteSetting',
            'cat',
            'pureCat',
            'product',
            'size',
            'colorDB',
            'ManuCategory',
            'totalCatData',
            'caterogyWiseProduct'
        ));
    }
    
    public function loginRegister(){
        $SiteSetting = SiteSetting::first();
        $cat = $this->categoryParseData();
        $ManuCategory = ManuCategoryCMS::where('menu_status','=','Active')->orderBy('id','DESC')->get();
        $totalCatData = $this->totalCatData();
        return view('site.pages.login-register',compact(
            'SiteSetting',
            'ManuCategory',
            'cat',
            'totalCatData'
        ));
    }
    public function cart(){
        $SiteSetting = SiteSetting::first();
        $cat = $this->categoryParseData();
        $ManuCategory = ManuCategoryCMS::where('menu_status','=','Active')->orderBy('id','DESC')->get();
        $totalCatData = $this->totalCatData();
        return view('site.pages.cart',compact(
            'SiteSetting',
            'ManuCategory',
            'cat',
            'totalCatData'
        ));
    }
    public function addToCart(Request $request)
    {
        // dd($request);
        // $product = Product::find($id);
        // $product_quantity = '';
        // if($id ==0){
        //     $product_quantity = $request->product_quantity;
        //     $product = Product::leftJoin('product_images','products.id','=','product_images.product_id')
        //                     ->leftJoin('product_colors','products.id','=','product_colors.product_id')
        //                     ->leftJoin('product_sizes','products.id','=','product_sizes.product_id')
        //                     ->select(DB::raw('products.*, product_images.title as photo,
        //                             product_colors.color_id_name as product_color_name, 
        //                             product_sizes.size_id_name as product_size_name'))
        //                     ->where('products.id', '=', $request->product_id)
        //                     ->where('product_colors.color_id', '=', $request->product_color)
        //                     ->where('product_sizes.size_id', '=', $request->product_size)
        //                     ->first();
        //     $id=$product->id;
        //     $price = ($product->price) * ($product_quantity);
        // }
        // else
        // {
        //     $product_quantity = 1;
        //     $product = Product::leftJoin('product_images','products.id','=','product_images.product_id')
        //                     ->select(DB::raw('products.*, product_images.title as photo,
        //                     (select color_id_name from product_colors where product_colors.product_id = products.id limit 1 ) as product_color_name,
        //                     (select size_id_name from product_sizes where product_sizes.product_id = products.id limit 1 ) as product_size_name'))
        //                     ->where('products.id', '=', $id)
        //                     ->first();
        //     $price = $product->price;
        // }
        
        if(isset($request->product_id))
        {
            if(!isset($request->product_color))
            {
                $product = Product::leftJoin('product_images','products.id','=','product_images.product_id')
                            ->select(DB::raw('products.*, product_images.title as photo,
                            (select color_id_name from product_colors where product_colors.product_id = products.id limit 1 ) as product_color_name,
                            (select size_id_name from product_sizes where product_sizes.product_id = products.id limit 1 ) as product_size_name'))
                            ->where('products.id', '=', $request->product_id)
                            ->first();
            }
            else
            {
                $product = Product::leftJoin('product_images','products.id','=','product_images.product_id')
                                    ->leftJoin('product_colors','products.id','=','product_colors.product_id')
                                    ->leftJoin('product_sizes','products.id','=','product_sizes.product_id')
                                    ->select(DB::raw('products.*, product_images.title as photo,
                                            product_colors.color_id_name as product_color_name, 
                                            product_sizes.size_id_name as product_size_name'))
                                    ->where('products.id', '=', $request->product_id)
                                    ->where('product_colors.color_id', '=', $request->product_color)
                                    ->where('product_sizes.size_id', '=', $request->product_size)
                                    ->first();
            }
        }

        // dd($product);

        if(!$product) {
            abort(404);
        }

        $id = $request->product_id;
        $cart = session()->get('cart');
        if(is_array($id) && array_key_exists($id, $cart))
        // if(array_key_exists($id, $cart))
        {
            if(!isset($request->product_color))
            {
                $cart[$id]['quantity']+=1;
                $cart[$id]['price'] = $cart[$id]['price'] + $cart[$id]['unit_price'];
            }
            else
            {
                $cart[$id]=[
                    "name" => $product->product_name,
                    "quantity" => $request->product_quantity,
                    "unit_price" =>$product->price,
                    "price" =>$product->price * $request->product_quantity,
                    "photo" => $product->photo,
                    "product_id" => $product->id,
                    "product_color_name" => $product->product_color_name,
                    "product_size_name" => $product->product_size_name
                  ];
            }
            
        }
        else
        {
            if(!isset($request->product_color))
            {
                $cart[$id] = [
                    "name" => $product->product_name,
                    "quantity" => 1,
                    "unit_price" =>$product->price,
                    "price" =>$product->price,
                    "photo" => $product->photo,
                    "product_id" => $product->id,
                    "product_color_name" => $product->product_color_name,
                    "product_size_name" => $product->product_size_name
                ];
            }
            else
            {
                $cart[$id] = [
                                "name" => $product->product_name,
                                "quantity" => $request->product_quantity,
                                "unit_price" =>$product->price,
                                "price" =>$product->price * $request->product_quantity,
                                "photo" => $product->photo,
                                "product_id" => $product->id,
                                "product_color_name" => $product->product_color_name,
                                "product_size_name" => $product->product_size_name
                            ];
            }
            //$product;
        }

        // if(!$cart) {

        //     $cart = [
        //             $id => [
        //                 "name" => $product->product_name,
        //                 "quantity" => $product_quantity,
        //                 "price" => $price,
        //                 "photo" => $product->photo,
        //                 "product_id" => $product->id,
        //                 "product_color_name" => $product->product_color_name,
        //                 "product_size_name" => $product->product_size_name,
                        
        //             ]
        //     ];

        //     session()->put('cart', $cart);
  
        //     return redirect()->back()->with('status', 'Product added to cart successfully!');
        // }
        
        // if cart not empty then check if this product exist then increment quantity
        // if(isset($cart[$id])) {

        //     $cart[$id]['quantity']++;

        //     session()->put('cart', $cart);

        //     return redirect()->back()->with('status', 'Product added to cart successfully!');

        // }

        // if item not exist in cart then add to cart with quantity = 1
        // $cart[$id] = [
        //     "name" => $product->product_name,
        //     "quantity" => 1,
        //     "price" => $product->price,
        //     "photo" => $product->photo,
        //     "product_id" => $product->id
        // ];

        session()->put('cart', $cart);
        // dd($cart);

        return response()->json($cart); //redirect()->back()->with('status', 'Product added to cart successfully!');
    }
    
    public function update(Request $request)
    {
        // dd($request->quantity);
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('status', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->flash('status', 'Product removed successfully');
            return response()->json($cart); 
        }
    }

    public function checkoutPaymentType(Request $request){
        $query = DB::table('payment_methods')->where('id', $request->data)->get();
        return response()->json($query);
    }
    public function checkoutShippingCost(Request $request){
        $query = DB::table('shipping_costs')->where('id', $request->data)->get();
        return response()->json($query);
    }

    public function checkout(){
        $SiteSetting = SiteSetting::first();
        $cat = $this->categoryParseData();
        $ManuCategory = ManuCategoryCMS::where('menu_status','=','Active')->orderBy('id','DESC')->get();
        $totalCatData = $this->totalCatData();
        $PaymentMethod = PaymentMethod::where('status','=','Active')->get();
        $ShippingCost = ShippingCost::all();
        return view('site.pages.checkout',compact(
            'SiteSetting',
            'cat',
            'ManuCategory',
            'totalCatData',
            'PaymentMethod',
            'ShippingCost'
        ));
    }
    public function checkoutPayment(Request $request){
        if(Auth::user() ==''){
            $this->validate($request,[
                'name'=>'required',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6', 
                'mobile_number' => 'required', 
                'address' => 'required', 
            ]);
        }
        $cart = session()->get('cart');
        //dd($cart);
        // dd($request);
        // dd(Auth::user());
        //use App\Customer;
        //use App\CustomerShippingaddress;

        
        $customer_id = 0;
        $customer_name = $request->name;

        if(Auth::user()){
            $cusid = Customer::where("email","=",$this->sdc->UserEmail())->first();
            // dd($cusid);
            $customer_id = Auth::user()->id;
        }
        // dd($customer_name);
        if($request->createAccount =='on'){
            
            $user_type_id =3;
            $user_type_name='Customer';
            
            $user=new User();
            $user->name=$customer_name;
            $user->email=$request->email;
            $user->password=Hash::make($request->password);
            $user->user_type_id=$user_type_id;
            $user->user_type_name=$user_type_name;
            //dd($user);
            $user->save();

            $tab=new Customer();
        
            $tab->name=$customer_name;
            $tab->email=$request->email;
            $tab->phone_number=$request->mobile_number;
            $tab->address=$request->address;
            $tab->shipping_different_address=$request->shipping_different_address;
            $tab->save();

            $customer_id = $tab->id;
            $customer_name = $customer_name;

        }
        
        if($request->is_ship =='on'){
            
            $tab=new CustomerShippingaddress();
            
            $tab->customer_id_name=$customer_name;
            $tab->customer_id=$customer_id;
            $tab->name=$request->nameShip;
            $tab->address=$request->address;
            $tab->save();
        }

        //Booking Order

        
        $tab_4_PaymentMethod=PaymentMethod::where('id',$request->payment_type)->first();
        $payment_type_id_4_PaymentMethod=$tab_4_PaymentMethod->name;
        $tab_5_ShippingCost=ShippingCost::where('id',$request->shipping_cost)->first();
        $shipping_cost_id_5_ShippingCost=$tab_5_ShippingCost->name;

        $bTab=new BookingOrder();
        
        $bTab->customer_id_name=$customer_name;
        $bTab->customer_id=$customer_id;
        $bTab->total_amount=$request->hiddenSubTotal;
        $bTab->discount_amount=$request->discount_amount ? $request->discount_amount : 0;
        $bTab->payable_amount=$request->hiddenTotal;
        $bTab->payment_type_id_name=$payment_type_id_4_PaymentMethod;
        $bTab->payment_type_id=$request->payment_type;
        $bTab->shipping_cost_id_name=$shipping_cost_id_5_ShippingCost;
        $bTab->shipping_cost_id=$request->shipping_cost;
        $bTab->order_notes=$request->order_notes;
        $bTab->save();
        $order_id = $bTab->id;

        //order booking details
        foreach($cart as $row){
            $proname = $row['name'];
            $quantity = $row['quantity'];
            $price = $row['price'];
            $product_id = $row['product_id'];
            $color = $row['product_color_name'];
            $size = $row['product_size_name'];
            // dd($row);

            $OdTab=new OrderDetails();
        
            $OdTab->order_id_customer_id=$customer_id;
            $OdTab->order_id=$order_id;
            $OdTab->product_id_product_name=$proname;
            $OdTab->product_id=$product_id;
            $OdTab->quantity=$quantity;
            $OdTab->product_price=$price;
            $OdTab->size_id=$size;
            $OdTab->color_id=$color;
            $OdTab->status='Pending';
            $OdTab->save();
        }

        // unset($cart[$request->id]);
        // $request->session()->flush();
        // dd($OdTab);
        
        
        // dd($lstPendingOrder);
        return redirect('my-account')->with('status','Thanks for shopping!');
        /*$SiteSetting = SiteSetting::first();
        $cat = $this->categoryParseData();
        $ManuCategory = ManuCategoryCMS::where('menu_status','=','Active')->orderBy('id','DESC')->get();
        $totalCatData = $this->totalCatData();
        $PaymentMethod = PaymentMethod::where('status','=','Active')->get();
        $ShippingCost = ShippingCost::all();

        return view('site.pages.my-account',compact(
            'SiteSetting',
            'cat',
            'ManuCategory',
            'totalCatData',
            'PaymentMethod',
            'ShippingCost'
        ));*/
    }
    public function CustomerLogin(Request $request) {
        $SiteSetting = SiteSetting::first();
        $cat = $this->categoryParseData();
        $ManuCategory = ManuCategoryCMS::where('menu_status','=','Active')->orderBy('id','DESC')->get();
        $totalCatData = $this->totalCatData();
        $PaymentMethod = PaymentMethod::where('status','=','Active')->get();
        $ShippingCost = ShippingCost::all();
        //dd($request);
        if (Auth::attempt ( array (
                'email' => $request->get ( 'email' ),
                'password' => $request->get ( 'password' ) 
        ) )) {
            session ( [ 
                    'email' => $request->get ( 'email' ) 
            ] );
            $email = Auth::user()->email;
            $customer = Customer::where('email','=',$email)->first();
            // dd($customer);
            // return \Redirect::back ();
            // return redirect('checkout');
            return \Redirect::route('checkout');
           
            // return redirect('checkout');
        } else {
            Session::flash ( 'status', "Invalid Credentials , Please try again." );
            return \Redirect::back ();
        }
    }
    public function myAccount(){
        $SiteSetting = SiteSetting::first();
        $cat = $this->categoryParseData();
        $ManuCategory = ManuCategoryCMS::where('menu_status','=','Active')->orderBy('id','DESC')->get();
        $totalCatData = $this->totalCatData();
        
        $customer_id = 0;
        $customer_name = $request->name;

        if(Auth::user()){
            $cusid = Customer::where("email","=",$this->sdc->UserEmail())->first();
            // dd($cusid);
            $customer_id = Auth::user()->id;
        }

        $lstPendingOrder = OrderDetails::where('order_id_customer_id',$customer_id)->where('status','Pending')->orderBy('id', 'DESC')->get();
        $lstConfirmedOrder = OrderDetails::where('order_id_customer_id',$customer_id)->where('status','Confirmed')->orderBy('id', 'DESC')->get();
        $lstProcessingOrder = OrderDetails::where('order_id_customer_id',$customer_id)->where('status','Processing')->orderBy('id', 'DESC')->get();
        $lstFinishedOrder = OrderDetails::where('order_id_customer_id',$customer_id)->where('status','Finished')->orderBy('id', 'DESC')->get();
        $lstCancelOrder = OrderDetails::where('order_id_customer_id',$customer_id)->where('status','Cancelled')->orderBy('id', 'DESC')->get();
        $lstOrder = OrderDetails::where('order_id_customer_id',$customer_id)->orderBy('id', 'DESC')->get();
        // dd($lstCancelOrder);
        return view('site.pages.my-account',compact(
            'SiteSetting',
            'cat',
            'ManuCategory',
            'totalCatData',
            'lstPendingOrder',
            'lstConfirmedOrder',
            'lstProcessingOrder',
            'lstFinishedOrder',
            'lstCancelOrder',
            'lstOrder'
        ));
    }
    public function wishlist(){
        $SiteSetting = SiteSetting::first();
        $cat = $this->categoryParseData();
        $ManuCategory = ManuCategoryCMS::where('menu_status','=','Active')->orderBy('id','DESC')->get();
        $totalCatData = $this->totalCatData();
        return view('site.pages.wishlist',compact(
            'SiteSetting',
            'cat',
            'ManuCategory',
            'totalCatData'
        ));
    }
    
    private function mailTemplate(Request $request){


        $siteMessage='  <h2>
                            <strong><span style="color: #ff9900;">Contact Detail</span></strong>
                        </h2>

                        <table style="border: 2px solid #000000; width: 436px;">

                        <tbody>

                        <tr style="height: 32px;">

                        <td style="width: 184px; height: 32px;">Contact Created</td>

                        <td style="width: 244px; height: 32px;">&nbsp;'.date('dS M Y, h:i A').'</td>

                        </tr>


                        <tr style="height: 18px;">

                        <td style="width: 184px; height: 18px;">&nbsp;First Name</td>

                        <td style="width: 244px; height: 18px;">'.$request->firstname.'</td>

                        </tr>
                        <tr style="height: 18px;">

                        <td style="width: 184px; height: 18px;">&nbsp;last name </td>

                        <td style="width: 244px; height: 18px;">'.$request->lastname.'</td>

                        </tr>
                        <tr style="height: 18px;">

                        <td style="width: 184px; height: 18px;">&nbsp;subject</td>

                        <td style="width: 244px; height: 18px;">'.$request->subject.'</td>

                        </tr>

                        <tr style="height: 18px;">

                        <td style="width: 184px; height: 18px;">&nbsp;Email&nbsp;</td>

                        <td style="width: 244px; height: 18px;">'.$request->email.'</td>

                        </tr>

                        <tr style="height: 18px;">

                        <td style="width: 184px; height: 18px;">&nbsp;message&nbsp;</td>

                        <td style="width: 244px; height: 18px;">'.$request->message.'</td>

                        </tr>

                        </tbody>

                        </table>

                        <p>Kind Regards, '.$this->sdc->SiteName.'&nbsp;</p>

                        <p>&nbsp;</p>';

        return $siteMessage;
    }

    public function contactRequest(Request $request){

        $this->validate($request,[
                'firstname'=>'required',
                'lastname'=>'required',
                'email'=>'required',
                'subject'=>'required',
        ]);
        
        $tab=new ContactUs();
        
        $tab->first_name=$request->firstname;
        $tab->last_name=$request->lastname;
        $tab->email=$request->email;
        $tab->subject=$request->subject;
        $tab->message=$request->message;
        $tab->save();
        
        $template=$this->mailTemplate($request);
        
        $mail = $this->sdc->initMail('fakhrulislamtalukder@gmail.com','Contact Request - '.$this->sdc->SiteName,$template);

        //dd($template);
        return redirect('contact')->with('status','Successfully sent message!');
        
    }
    public function contact(Request $request){
        $SiteSetting = SiteSetting::first();
        $cat = $this->categoryParseData();
        $ManuCategory = ManuCategoryCMS::where('menu_status','=','Active')->orderBy('id','DESC')->get();
        $totalCatData = $this->totalCatData();
        
        //dd($product);
        return view('site.pages.contact',compact(
            'SiteSetting',
            'cat',
            'ManuCategory',
            'totalCatData'
        ));
    }
    public function searchProduct(Request $request){
        
        $SiteSetting = SiteSetting::first();
        $cat = $this->categoryParseData();
        $pureCat=$this->proCategoryParseData();
        $ManuCategory = ManuCategoryCMS::where('menu_status','=','Active')->orderBy('id','DESC')->get();
        $totalCatData = $this->totalCatData();
        $size=Size::all();
        $color=Color::all();
        $Product = $this->paginateArray(DB::select('
                SELECT pro.*,
                (SELECT GROUP_CONCAT(pi.title) FROM product_images as pi where pi.product_id = pro.id and pi.deleted_at is null) as image
                FROM products AS pro
                WHERE 
                pro.deleted_at is null AND
                pro.category_name_name ="'.$request->select.'" OR
                pro.sub_category_name_name ="'.$request->select.'" OR
                pro.product_name like "%'.$request->search.'%"
                ORDER BY pro.id DESC
        '));
        // dd($Product);
        return view('site.pages.shop',compact(
            'SiteSetting',
            'cat',
            'Product',
            'pureCat',
            'ManuCategory',
            'totalCatData',
            'size','color'
        ));
    }

    
}
