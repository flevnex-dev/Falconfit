<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}

Route::get('/', function () {
    return redirect('/index');
});
Route::get('/index','IndexController@index');
Route::get('/shop','IndexController@shop');
Route::get('/login-register','IndexController@loginRegister');
Route::get('/cart','IndexController@cart');
Route::get('/checkout','IndexController@checkout')->name('checkout');;
Route::get('/my-account','IndexController@myAccount');
Route::get('/wishlist','IndexController@wishlist');
Route::get('/product/{id}/{name}','IndexController@productDetails');
Route::get('/contact','IndexController@contact');
Route::post('/contact/request','IndexController@contactRequest');

Route::get('/products/{id}/{any}','IndexController@categoryProduct');
Route::get('/products/{cid}/subcategory/{sid}/{any}','IndexController@subCategoryProduct');

// Route::get('add-to-cart/{id}', 'IndexController@addToCart');
Route::post('add-to-cart/short', 'IndexController@addToCart');
Route::post('add_to_cart', 'IndexController@addToCart');
Route::patch('update-cart', 'IndexController@update');
Route::delete('remove-from-cart', 'IndexController@remove');

Route::post('/products-shop-size-data', 'IndexController@shopSizeData');
Route::post('/products-shop-color-data', 'IndexController@shopColorData');
Route::post('/products-search', 'IndexController@searchProduct');

Route::get('/features','IndexController@featuresProduct');
Route::post('/checkout/ajax/paymentType','IndexController@checkoutPaymentType');
Route::post('/checkout/ajax/shippingcost','IndexController@checkoutShippingCost');
Route::post('/checkout/payment','IndexController@checkoutPayment');
Route::post('/customerLogin','IndexController@CustomerLogin');
Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/crud', 'CrudController@crud')->name('crud');
    Route::post('/crud', 'CrudController@crudgenarate')->name('crudgenarate');
    Route::get('/dashboard', 'FrontServiceController@dashboard')->name('dashboard');
    Route::get('/home', 'FrontServiceController@dashboard');
    Route::get('/bookingorder/view/{id}', 'FrontServiceController@dashboardOrderView');
    Route::post('/order/search', 'FrontServiceController@dashboardOrderView');

    //======================== Sitesociallink Route Start ===============================//
Route::get('/sitesociallink/list','SitesociallinkController@show');
Route::get('/sitesociallink/create','SitesociallinkController@create');
Route::get('/sitesociallink/edit/{id}','SitesociallinkController@edit');
Route::get('/sitesociallink/delete/{id}','SitesociallinkController@destroy');
Route::get('/sitesociallink','SitesociallinkController@index');
Route::get('/sitesociallink/export/excel','SitesociallinkController@ExportExcel');
Route::get('/sitesociallink/export/pdf','SitesociallinkController@ExportPDF');
Route::post('/sitesociallink','SitesociallinkController@store');
Route::post('/sitesociallink/ajax','SitesociallinkController@ajaxSave');
Route::post('/sitesociallink/datatable/ajax','SitesociallinkController@datatable');
Route::post('/sitesociallink/update/{id}','SitesociallinkController@update');
//======================== Sitesociallink Route End ===============================//

//======================== Sitesetting Route Start ===============================//
Route::get('/sitesetting/list','SitesettingController@show');
Route::get('/sitesetting/create','SitesettingController@create');
Route::get('/sitesetting/edit/{id}','SitesettingController@edit');
Route::get('/sitesetting/delete/{id}','SitesettingController@destroy');
Route::get('/sitesetting','SitesettingController@index');
Route::get('/sitesetting/export/excel','SitesettingController@ExportExcel');
Route::get('/sitesetting/export/pdf','SitesettingController@ExportPDF');
Route::post('/sitesetting','SitesettingController@store');
Route::post('/sitesetting/ajax','SitesettingController@ajaxSave');
Route::post('/sitesetting/datatable/ajax','SitesettingController@datatable');
Route::post('/sitesetting/update/{id}','SitesettingController@update');
//======================== Sitesetting Route End ===============================//



//======================== Subcategory Route Start ===============================//
Route::get('/subcategory/list','SubcategoryController@show');
Route::get('/subcategory/create','SubcategoryController@create');
Route::get('/subcategory/edit/{id}','SubcategoryController@edit');
Route::get('/subcategory/delete/{id}','SubcategoryController@destroy');
Route::get('/subcategory','SubcategoryController@index');
Route::get('/subcategory/export/excel','SubcategoryController@ExportExcel');
Route::get('/subcategory/export/pdf','SubcategoryController@ExportPDF');
Route::post('/subcategory','SubcategoryController@store');
Route::post('/subcategory/ajax','SubcategoryController@ajaxSave');
Route::post('/subcategory/datatable/ajax','SubcategoryController@datatable');
Route::post('/subcategory/update/{id}','SubcategoryController@update');
//======================== Subcategory Route End ===============================//
//======================== Size Route Start ===============================//
Route::get('/size/list','SizeController@show');
Route::get('/size/create','SizeController@create');
Route::get('/size/edit/{id}','SizeController@edit');
Route::get('/size/delete/{id}','SizeController@destroy');
Route::get('/size','SizeController@index');
Route::get('/size/export/excel','SizeController@ExportExcel');
Route::get('/size/export/pdf','SizeController@ExportPDF');
Route::post('/size','SizeController@store');
Route::post('/size/ajax','SizeController@ajaxSave');
Route::post('/size/datatable/ajax','SizeController@datatable');
Route::post('/size/update/{id}','SizeController@update');
//======================== Size Route End ===============================//
//======================== Color Route Start ===============================//
Route::get('/color/list','ColorController@show');
Route::get('/color/create','ColorController@create');
Route::get('/color/edit/{id}','ColorController@edit');
Route::get('/color/delete/{id}','ColorController@destroy');
Route::get('/color','ColorController@index');
Route::get('/color/export/excel','ColorController@ExportExcel');
Route::get('/color/export/pdf','ColorController@ExportPDF');
Route::post('/color','ColorController@store');
Route::post('/color/ajax','ColorController@ajaxSave');
Route::post('/color/datatable/ajax','ColorController@datatable');
Route::post('/color/update/{id}','ColorController@update');
//======================== Color Route End ===============================//
//======================== Product Route Start ===============================//
Route::get('/adminProduct/list','ProductController@show');
Route::get('/adminProduct/create','ProductController@create');
Route::get('/adminProduct/edit/{id}','ProductController@edit');
Route::get('/adminProduct/delete/{id}','ProductController@destroy');
Route::get('/adminProduct','ProductController@index');
Route::get('/adminProduct/export/excel','ProductController@ExportExcel');
Route::get('/adminProduct/export/pdf','ProductController@ExportPDF');
Route::post('/adminProduct','ProductController@store');
Route::post('/adminProduct/ajax','ProductController@ajaxSave');
Route::post('/adminProduct/datatable/ajax','ProductController@datatable');
Route::post('/adminProduct/update/{id}','ProductController@update');
Route::post('/adminProduct/ajax/subCatData', 'ProductController@ajaxSubCat');
//======================== Product Route End ===============================//
//======================== Productimage Route Start ===============================//
Route::get('/productimage/list','ProductimageController@show');
Route::get('/productimage/create','ProductimageController@create');
Route::get('/productimage/edit/{id}','ProductimageController@edit');
Route::get('/productimage/delete/{id}','ProductimageController@destroy');
Route::get('/productimage','ProductimageController@index');
Route::get('/productimage/export/excel','ProductimageController@ExportExcel');
Route::get('/productimage/export/pdf','ProductimageController@ExportPDF');
Route::post('/productimage','ProductimageController@store');
Route::post('/productimage/ajax','ProductimageController@ajaxSave');
Route::post('/productimage/datatable/ajax','ProductimageController@datatable');
Route::post('/productimage/update/{id}','ProductimageController@update');
//======================== Productimage Route End ===============================//


//======================== Testcheckbox Route Start ===============================//
Route::get('/testcheckbox/list','TestcheckboxController@show');
Route::get('/testcheckbox/create','TestcheckboxController@create');
Route::get('/testcheckbox/edit/{id}','TestcheckboxController@edit');
Route::get('/testcheckbox/delete/{id}','TestcheckboxController@destroy');
Route::get('/testcheckbox','TestcheckboxController@index');
Route::get('/testcheckbox/export/excel','TestcheckboxController@ExportExcel');
Route::get('/testcheckbox/export/pdf','TestcheckboxController@ExportPDF');
Route::post('/testcheckbox','TestcheckboxController@store');
Route::post('/testcheckbox/ajax','TestcheckboxController@ajaxSave');
Route::post('/testcheckbox/datatable/ajax','TestcheckboxController@datatable');
Route::post('/testcheckbox/update/{id}','TestcheckboxController@update');
//======================== Testcheckbox Route End ===============================//
//======================== Slidercms Route Start ===============================//
Route::get('/slidercms/list','SlidercmsController@show');
Route::get('/slidercms/create','SlidercmsController@create');
Route::get('/slidercms/edit/{id}','SlidercmsController@edit');
Route::get('/slidercms/delete/{id}','SlidercmsController@destroy');
Route::get('/slidercms','SlidercmsController@index');
Route::get('/slidercms/export/excel','SlidercmsController@ExportExcel');
Route::get('/slidercms/export/pdf','SlidercmsController@ExportPDF');
Route::post('/slidercms','SlidercmsController@store');
Route::post('/slidercms/ajax','SlidercmsController@ajaxSave');
Route::post('/slidercms/datatable/ajax','SlidercmsController@datatable');
Route::post('/slidercms/update/{id}','SlidercmsController@update');
//======================== Slidercms Route End ===============================//
//======================== Category Route Start ===============================//
Route::get('/category/list','CategoryController@show');
Route::get('/category/create','CategoryController@create');
Route::get('/category/edit/{id}','CategoryController@edit');
Route::get('/category/delete/{id}','CategoryController@destroy');
Route::get('/category','CategoryController@index');
Route::get('/category/export/excel','CategoryController@ExportExcel');
Route::get('/category/export/pdf','CategoryController@ExportPDF');
Route::post('/category','CategoryController@store');
Route::post('/category/ajax','CategoryController@ajaxSave');
Route::post('/category/datatable/ajax','CategoryController@datatable');
Route::post('/category/update/{id}','CategoryController@update');
//======================== Category Route End ===============================//
//======================== Homepagecategoryposition Route Start ===============================//
Route::get('/homepagecategoryposition/list','HomepagecategorypositionController@show');
Route::get('/homepagecategoryposition/create','HomepagecategorypositionController@create');
Route::get('/homepagecategoryposition/edit/{id}','HomepagecategorypositionController@edit');
Route::get('/homepagecategoryposition/delete/{id}','HomepagecategorypositionController@destroy');
Route::get('/homepagecategoryposition','HomepagecategorypositionController@index');
Route::get('/homepagecategoryposition/export/excel','HomepagecategorypositionController@ExportExcel');
Route::get('/homepagecategoryposition/export/pdf','HomepagecategorypositionController@ExportPDF');
Route::post('/homepagecategoryposition','HomepagecategorypositionController@store');
Route::post('/homepagecategoryposition/ajax','HomepagecategorypositionController@ajaxSave');
Route::post('/homepagecategoryposition/datatable/ajax','HomepagecategorypositionController@datatable');
Route::post('/homepagecategoryposition/update/{id}','HomepagecategorypositionController@update');
//======================== Homepagecategoryposition Route End ===============================//

//======================== Featureproduct Route Start ===============================//
Route::get('/featureproduct/list','FeatureproductController@show');
Route::get('/featureproduct/create','FeatureproductController@create');
Route::get('/featureproduct/edit/{id}','FeatureproductController@edit');
Route::get('/featureproduct/delete/{id}','FeatureproductController@destroy');
Route::get('/featureproduct','FeatureproductController@index');
Route::get('/featureproduct/export/excel','FeatureproductController@ExportExcel');
Route::get('/featureproduct/export/pdf','FeatureproductController@ExportPDF');
Route::post('/featureproduct','FeatureproductController@store');
Route::post('/featureproduct/ajax','FeatureproductController@ajaxSave');
Route::post('/featureproduct/datatable/ajax','FeatureproductController@datatable');
Route::post('/featureproduct/update/{id}','FeatureproductController@update');
//======================== Featureproduct Route End ===============================//
//======================== Manucategorycms Route Start ===============================//
Route::get('/manucategorycms/list','ManucategorycmsController@show');
Route::get('/manucategorycms/create','ManucategorycmsController@create');
Route::get('/manucategorycms/edit/{id}','ManucategorycmsController@edit');
Route::get('/manucategorycms/delete/{id}','ManucategorycmsController@destroy');
Route::get('/manucategorycms','ManucategorycmsController@index');
Route::get('/manucategorycms/export/excel','ManucategorycmsController@ExportExcel');
Route::get('/manucategorycms/export/pdf','ManucategorycmsController@ExportPDF');
Route::post('/manucategorycms','ManucategorycmsController@store');
Route::post('/manucategorycms/ajax','ManucategorycmsController@ajaxSave');
Route::post('/manucategorycms/datatable/ajax','ManucategorycmsController@datatable');
Route::post('/manucategorycms/update/{id}','ManucategorycmsController@update');
//======================== Manucategorycms Route End ===============================//


//======================== Contactus Route Start ===============================//
Route::get('/contactus/list','ContactusController@show');
Route::get('/contactus/create','ContactusController@create');
Route::get('/contactus/edit/{id}','ContactusController@edit');
Route::get('/contactus/delete/{id}','ContactusController@destroy');
Route::get('/contactus','ContactusController@index');
Route::get('/contactus/export/excel','ContactusController@ExportExcel');
Route::get('/contactus/export/pdf','ContactusController@ExportPDF');
Route::post('/contactus','ContactusController@store');
Route::post('/contactus/ajax','ContactusController@ajaxSave');
Route::post('/contactus/datatable/ajax','ContactusController@datatable');
Route::post('/contactus/update/{id}','ContactusController@update');
//======================== Contactus Route End ===============================//
//======================== Customer Route Start ===============================//
Route::get('/customer/list','CustomerController@show');
Route::get('/customer/create','CustomerController@create');
Route::get('/customer/edit/{id}','CustomerController@edit');
Route::get('/customer/delete/{id}','CustomerController@destroy');
Route::get('/customer','CustomerController@index');
Route::get('/customer/export/excel','CustomerController@ExportExcel');
Route::get('/customer/export/pdf','CustomerController@ExportPDF');
Route::post('/customer','CustomerController@store');
Route::post('/customer/ajax','CustomerController@ajaxSave');
Route::post('/customer/datatable/ajax','CustomerController@datatable');
Route::post('/customer/update/{id}','CustomerController@update');
//======================== Customer Route End ===============================//
//======================== Customershippingaddress Route Start ===============================//
Route::get('/customershippingaddress/list','CustomershippingaddressController@show');
Route::get('/customershippingaddress/create','CustomershippingaddressController@create');
Route::get('/customershippingaddress/edit/{id}','CustomershippingaddressController@edit');
Route::get('/customershippingaddress/delete/{id}','CustomershippingaddressController@destroy');
Route::get('/customershippingaddress','CustomershippingaddressController@index');
Route::get('/customershippingaddress/export/excel','CustomershippingaddressController@ExportExcel');
Route::get('/customershippingaddress/export/pdf','CustomershippingaddressController@ExportPDF');
Route::post('/customershippingaddress','CustomershippingaddressController@store');
Route::post('/customershippingaddress/ajax','CustomershippingaddressController@ajaxSave');
Route::post('/customershippingaddress/datatable/ajax','CustomershippingaddressController@datatable');
Route::post('/customershippingaddress/update/{id}','CustomershippingaddressController@update');
//======================== Customershippingaddress Route End ===============================//
//======================== Paymentmethod Route Start ===============================//
Route::get('/paymentmethod/list','PaymentmethodController@show');
Route::get('/paymentmethod/create','PaymentmethodController@create');
Route::get('/paymentmethod/edit/{id}','PaymentmethodController@edit');
Route::get('/paymentmethod/delete/{id}','PaymentmethodController@destroy');
Route::get('/paymentmethod','PaymentmethodController@index');
Route::get('/paymentmethod/export/excel','PaymentmethodController@ExportExcel');
Route::get('/paymentmethod/export/pdf','PaymentmethodController@ExportPDF');
Route::post('/paymentmethod','PaymentmethodController@store');
Route::post('/paymentmethod/ajax','PaymentmethodController@ajaxSave');
Route::post('/paymentmethod/datatable/ajax','PaymentmethodController@datatable');
Route::post('/paymentmethod/update/{id}','PaymentmethodController@update');
//======================== Paymentmethod Route End ===============================//
//======================== Shippingcost Route Start ===============================//
Route::get('/shippingcost/list','ShippingcostController@show');
Route::get('/shippingcost/create','ShippingcostController@create');
Route::get('/shippingcost/edit/{id}','ShippingcostController@edit');
Route::get('/shippingcost/delete/{id}','ShippingcostController@destroy');
Route::get('/shippingcost','ShippingcostController@index');
Route::get('/shippingcost/export/excel','ShippingcostController@ExportExcel');
Route::get('/shippingcost/export/pdf','ShippingcostController@ExportPDF');
Route::post('/shippingcost','ShippingcostController@store');
Route::post('/shippingcost/ajax','ShippingcostController@ajaxSave');
Route::post('/shippingcost/datatable/ajax','ShippingcostController@datatable');
Route::post('/shippingcost/update/{id}','ShippingcostController@update');
//======================== Shippingcost Route End ===============================//

//======================== Bookingorder Route Start ===============================//
Route::get('/bookingorder/list','BookingorderController@show');
Route::get('/bookingorder/create','BookingorderController@create');
Route::get('/bookingorder/edit/{id}','BookingorderController@edit');
Route::get('/bookingorder/delete/{id}','BookingorderController@destroy');
Route::get('/bookingorder','BookingorderController@index');
Route::get('/bookingorder/export/excel','BookingorderController@ExportExcel');
Route::get('/bookingorder/export/pdf','BookingorderController@ExportPDF');
Route::post('/bookingorder','BookingorderController@store');
Route::post('/bookingorder/ajax','BookingorderController@ajaxSave');
Route::post('/bookingorder/datatable/ajax','BookingorderController@datatable');
Route::post('/bookingorder/update/{id}','BookingorderController@update');
//======================== Bookingorder Route End ===============================//
//======================== Orderdetails Route Start ===============================//
Route::get('/orderdetails/list','OrderdetailsController@show');
Route::get('/orderdetails/create','OrderdetailsController@create');
Route::get('/orderdetails/edit/{id}','OrderdetailsController@edit');
Route::get('/orderdetails/delete/{id}','OrderdetailsController@destroy');
Route::get('/orderdetails','OrderdetailsController@index');
Route::get('/orderdetails/export/excel','OrderdetailsController@ExportExcel');
Route::get('/orderdetails/export/pdf','OrderdetailsController@ExportPDF');
Route::post('/orderdetails','OrderdetailsController@store');
Route::post('/orderdetails/ajax','OrderdetailsController@ajaxSave');
Route::post('/orderdetails/datatable/ajax','OrderdetailsController@datatable');
Route::post('/orderdetails/update/{id}','OrderdetailsController@update');
//======================== Orderdetails Route End ===============================//

});



//======================== Productcolor Route Start ===============================//
Route::get('/productcolor/list','ProductcolorController@show');
Route::get('/productcolor/create','ProductcolorController@create');
Route::get('/productcolor/edit/{id}','ProductcolorController@edit');
Route::get('/productcolor/delete/{id}','ProductcolorController@destroy');
Route::get('/productcolor','ProductcolorController@index');
Route::get('/productcolor/export/excel','ProductcolorController@ExportExcel');
Route::get('/productcolor/export/pdf','ProductcolorController@ExportPDF');
Route::post('/productcolor','ProductcolorController@store');
Route::post('/productcolor/ajax','ProductcolorController@ajaxSave');
Route::post('/productcolor/datatable/ajax','ProductcolorController@datatable');
Route::post('/productcolor/update/{id}','ProductcolorController@update');
//======================== Productcolor Route End ===============================//
//======================== Productsize Route Start ===============================//
Route::get('/productsize/list','ProductsizeController@show');
Route::get('/productsize/create','ProductsizeController@create');
Route::get('/productsize/edit/{id}','ProductsizeController@edit');
Route::get('/productsize/delete/{id}','ProductsizeController@destroy');
Route::get('/productsize','ProductsizeController@index');
Route::get('/productsize/export/excel','ProductsizeController@ExportExcel');
Route::get('/productsize/export/pdf','ProductsizeController@ExportPDF');
Route::post('/productsize','ProductsizeController@store');
Route::post('/productsize/ajax','ProductsizeController@ajaxSave');
Route::post('/productsize/datatable/ajax','ProductsizeController@datatable');
Route::post('/productsize/update/{id}','ProductsizeController@update');
//======================== Productsize Route End ===============================//
//======================== Currentoffer Route Start ===============================//
Route::get('/currentoffer/list','CurrentofferController@show');
Route::get('/currentoffer/create','CurrentofferController@create');
Route::get('/currentoffer/edit/{id}','CurrentofferController@edit');
Route::get('/currentoffer/delete/{id}','CurrentofferController@destroy');
Route::get('/currentoffer','CurrentofferController@index');
Route::get('/currentoffer/export/excel','CurrentofferController@ExportExcel');
Route::get('/currentoffer/export/pdf','CurrentofferController@ExportPDF');
Route::post('/currentoffer','CurrentofferController@store');
Route::post('/currentoffer/ajax','CurrentofferController@ajaxSave');
Route::post('/currentoffer/datatable/ajax','CurrentofferController@datatable');
Route::post('/currentoffer/update/{id}','CurrentofferController@update');
//======================== Currentoffer Route End ===============================//
//======================== Highlightcategoryproduct Route Start ===============================//
Route::get('/highlightcategoryproduct/list','HighlightcategoryproductController@show');
Route::get('/highlightcategoryproduct/create','HighlightcategoryproductController@create');
Route::get('/highlightcategoryproduct/edit/{id}','HighlightcategoryproductController@edit');
Route::get('/highlightcategoryproduct/delete/{id}','HighlightcategoryproductController@destroy');
Route::get('/highlightcategoryproduct','HighlightcategoryproductController@index');
Route::get('/highlightcategoryproduct/export/excel','HighlightcategoryproductController@ExportExcel');
Route::get('/highlightcategoryproduct/export/pdf','HighlightcategoryproductController@ExportPDF');
Route::post('/highlightcategoryproduct','HighlightcategoryproductController@store');
Route::post('/highlightcategoryproduct/ajax','HighlightcategoryproductController@ajaxSave');
Route::post('/highlightcategoryproduct/datatable/ajax','HighlightcategoryproductController@datatable');
Route::post('/highlightcategoryproduct/update/{id}','HighlightcategoryproductController@update');
//======================== Highlightcategoryproduct Route End ===============================//
//======================== Highlightcategoryproduct Route Start ===============================//
Route::get('/highlightcategoryproduct/list','HighlightcategoryproductController@show');
Route::get('/highlightcategoryproduct/create','HighlightcategoryproductController@create');
Route::get('/highlightcategoryproduct/edit/{id}','HighlightcategoryproductController@edit');
Route::get('/highlightcategoryproduct/delete/{id}','HighlightcategoryproductController@destroy');
Route::get('/highlightcategoryproduct','HighlightcategoryproductController@index');
Route::get('/highlightcategoryproduct/export/excel','HighlightcategoryproductController@ExportExcel');
Route::get('/highlightcategoryproduct/export/pdf','HighlightcategoryproductController@ExportPDF');
Route::post('/highlightcategoryproduct','HighlightcategoryproductController@store');
Route::post('/highlightcategoryproduct/ajax','HighlightcategoryproductController@ajaxSave');
Route::post('/highlightcategoryproduct/datatable/ajax','HighlightcategoryproductController@datatable');
Route::post('/highlightcategoryproduct/update/{id}','HighlightcategoryproductController@update');
//======================== Highlightcategoryproduct Route End ===============================//