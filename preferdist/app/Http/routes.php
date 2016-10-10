<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/', function () {
    //return view('welcome');
    return view('londrymaster');
});
*/

Route::get('ID/{id?}',function($id = 'Virat'){
   echo 'ID: '.$id;
});

Route::get('role',[
   'middleware' => 'Role:editor',
   'uses' => 'TestController@index',
   //'uses' => 'UserController@showPath',
]);

Route::resource('my','MyController');

Route::controller('test','ImplicitController');


class MyClass{
   public $foo000 = 'RAjubar';
}
Route::get('/myclass','ImplicitController@index');


Route::get('/foo/bar','UriController@index');



Route::get('/register',function(){
   return view('register');
});
Route::post('/user/register',array('uses'=>'UserRegistration@postRegister'));


Route::get('/cookie/set','CookieController@setCookie');
Route::get('/cookie/get','CookieController@getCookie');



Route::get('/cookie',function(){
   return response("Hello", 200)->header('Content-Type', 'text/html')
      ->withcookie('name','Virat Gandhi');
});



Route::get('json',function(){
   return response()->json(['name' => 'Virat Gandhi', 'state' => 'Gujarat']);
});

Route::get('/test', ['as'=>'testing',function(){
   return view('test2');
}]);
Route::get('redirect',function(){
   return redirect()->route('testing');
});


Route::get('rr','TestController@index');
Route::get('/redirectcontroller',function(){
   return redirect()->action('TestController@index');
});

Route::get('view-records','StudViewController@index');


Route::get('session/get','SessionController@accessSessionData');
Route::get('session/set','SessionController@storeSessionData');
Route::get('session/remove','SessionController@deleteSessionData');


Route::get('/validation','ValidationController@showform');
Route::post('/validation','ValidationController@validateform');



Route::get('/uploadfile','UploadFileController@index');
Route::post('/uploadfile','UploadFileController@showUploadFile');

Route::get('/form',function(){
   return view('form');
});






/////////login/////////////////
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('/', 'Auth\AuthController@getLogin');
Route::post('/', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


/////////londryMaster///////
Route::get('/admin', function () {
    return view('londrymaster');
});
/*Route::get('/register', function () {
    return view('auth.register');
});
Route::post('/register', function () {
    return view('auth.register');
});*/

Route::post('/taxcodeoption', 'QueryController@taxcodeoption');

Route::post('/nominaloption', 'QueryController@nominaloption');

Route::post('/itemcategoryoption', 'QueryController@itemcategoryoption');

Route::post('/itemunitadd', 'QueryController@itemunitadd');

Route::post('/suppliersoption', 'QueryController@suppliersoption');

Route::post('/itemsOption', 'QueryController@itemsOption');

Route::post('/customersOption', 'QueryController@customersOption');



Route::get('/customerslist', 'QueryController@customerslist');
Route::post('/customerslist', 'QueryController@customerslist');

Route::get('/customeradd', 'QueryController@customeradd');
Route::post('/customeradd', 'QueryController@customeradd');

Route::get('/delete_customer', 'QueryController@customerdelete');
Route::post('/delete_customer', 'QueryController@customerdelete');

Route::get('/catagorylisttable', 'QueryController@catagorylist');
Route::post('/catagorylisttable', 'QueryController@catagorylist');


Route::get('/addcatagory', 'QueryController@addcatagory');
Route::post('/addcatagory', 'QueryController@addcatagory');


Route::get('/updatecatagorylist', 'QueryController@updatecatagorylist');
Route::post('/updatecatagorylist', 'QueryController@updatecatagorylist');


Route::get('/deletecatagory', 'QueryController@deletecatagory');
Route::post('/deletecatagory', 'QueryController@deletecatagory');


Route::get('/itemlist', 'QueryController@itemlist');
Route::post('/itemlist', 'QueryController@itemlist');


Route::get('/deleteitemlist', 'QueryController@deleteitemlist');
Route::post('/deleteitemlist', 'QueryController@deleteitemlist');


Route::get('/addnewitem', 'QueryController@addnewitem');
Route::post('/addnewitem', 'QueryController@addnewitem');


Route::get('/itemunitlist', 'QueryController@itemunitlist');
Route::post('/itemunitlist', 'QueryController@itemunitlist');


Route::get('/itemunitoption', 'QueryController@itemunitoption');
Route::post('/itemunitoption', 'QueryController@itemunitoption');





Route::get('/updateitemunitlist', 'QueryController@updateitemunitlist');
Route::post('/updateitemunitlist', 'QueryController@updateitemunitlist');


Route::get('/itemunitdelete', 'QueryController@itemunitdelete');
Route::post('/itemunitdelete', 'QueryController@itemunitdelete');


Route::get('/supplierlisttable', 'QueryController@supplierlisttable');
Route::post('/supplierlisttable', 'QueryController@supplierlisttable');


Route::get('/deletesupplierlist', 'QueryController@deletesupplierlist');
Route::post('/deletesupplierlist', 'QueryController@deletesupplierlist');


Route::get('/addnewsupplier', 'QueryController@addnewsupplier');
Route::post('/addnewsupplier', 'QueryController@addnewsupplier');


Route::post('/nextpurchaseno', 'QueryController@nextpurchaseno');

Route::post('/addpurchaseobject', 'QueryController@addpurchaseobject');

Route::post('/PurchaseIdsearch', 'QueryController@PurchaseIdsearch');

Route::post('/UpdateActualdelivarydate', 'QueryController@UpdateActualdelivarydate');

Route::post('/productslist', 'QueryController@productslist');

Route::post('/customersProductsadd', 'QueryController@customersProductsadd');

Route::post('/productlistbycustomerid', 'QueryController@productlistbycustomerid');
Route::post('/productstocklistbycustomerid', 'QueryController@productstocklistbycustomerid');
Route::post('/deliverydaybycustomerid', 'QueryController@deliverydaybycustomerid');
Route::post('/previousdeleverylistbycustomerid', 'QueryController@previousdeleverylistbycustomerid');
Route::post('/pendingdeliverynotebycustomerid', 'QueryController@pendingdeliverynotebycustomerid');
Route::post('/customer_message_bycustomerid', 'QueryController@customer_message_bycustomerid');
Route::post('/delivery_note_msg_save', 'QueryController@delivery_note_msg_save');

Route::post('/productlist_predelivery_bycustomerid', 'QueryController@productlist_predelivery_bycustomerid');

Route::post('/delete_single_product', 'QueryController@delete_single_product');
Route::post('/delivery_note_save', 'QueryController@delivery_note_save');


Route::get('/purchaselisttable', 'QueryController@purchaselisttable');
Route::post('/purchaselisttable', 'QueryController@purchaselisttable');

Route::post('/todaydeleverynoterequest', 'QueryController@todaydeleverynoterequest');
Route::post('/newtaxlisttable', 'QueryController@newtaxlisttable');
Route::post('/addnewtax1', 'QueryController@addnewtax1');
Route::post('/updatenewtaxtable', 'QueryController@updatenewtaxtable');
Route::post('/deletenewtaxtable', 'QueryController@deletenewtaxtable');

Route::post('/Restore_Backup_Database', 'QueryController@Restore_Backup_Database');




Route::post('/previous_delivery_note_bycustomerid', 'QueryController@previous_delivery_note_bycustomerid');
Route::post('/previous_delivery_note_modify_info_show', 'QueryController@previous_delivery_note_modify_info_show');
Route::post('/modify_previous_deliverynote_save', 'QueryController@modify_previous_deliverynote_save');
Route::post('/statement_by_customer_Genarate', 'QueryController@statement_by_customer_Genarate');

Route::post('/deliverynotepdfcustomerinforequest', 'QueryController@deliverynotepdfcustomerinforequest');




// route to show the login form
Route::get('login', array('uses' => 'HomeController@showLogin'));

// route to process the form
Route::post('login', array('uses' => 'HomeController@doLogin'));

Route::get('logout', array('uses' => 'HomeController@doLogout'));

Route::get('register', array('uses' => 'HomeController@showcreateuser'));
Route::post('register', array('uses' => 'HomeController@createuser'));

Route::get('deleverynotepdf', array('uses' => 'HomeController@deleverynotepdf'));
Route::post('deleverynotepdf', array('uses' => 'HomeController@deleverynotepdf'));

Route::get('dbbackup', array('uses' => 'HomeController@dbbackup'));
Route::post('dbbackup', array('uses' => 'HomeController@dbbackup'));








Route::get('query/taxcodeoption', function()
{
   echo  "rrrrrrrrrrrrrrrrrrrrrr"   ;
});

Route::get('ajax',function(){
   return view('welcome');
});
Route::get('/getmsg','AjaxController@index');
Route::post('/getmsg','AjaxController@index');


Route::get('/basic_response', function () {
   return 'Hello World';
});