<?php

use App\Query;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


//Route::get('testforurl','PersonalInfoController@test_get_method')->name("test_get_method");
Route::get('testforurl', 'ProductController@getPath')->name("getPath");


Route::get('/test', 'QueryController@test_rough');

Route::get('/test2', static function () {
    $userid = Auth::user()->id;
    $datTime = date('d-y-m');
    $datTime = time($datTime);
    $submit_id = $userid.$datTime.random_int(100, 1000);

    echo $submit_id;
});
//Route::get('/inbox/{id}', 'MessageController@singleMessage_test');

/*nir test rough*/


Route::get('/', 'IndexController@index')->name('mainhome');

Route::post('/find', 'IndexController@open')->name('find');

Route::post('/event-coordinator', 'MailController@postContact');

Route::post('/contact_us_submit', 'MailController@postContactUs')->name('contact_us_submit');
Route::get('/sendEmail', 'MailController@sendEmail')->name('sendEmail');

Route::get('/Email_Verification/{email}/{token}', 'MailController@mailVerification')->name('Email_Verification');


// Route::post('/save','IndexController@savePhone')->name('savePhone');

Route::post('/save-phn', 'IndexController@onlyphn')->name('login.save');


Route::get('login/{service}', 'Auth\LoginController@redirectToProvider_all');
Route::get('login/{service}/callback', 'Auth\LoginController@handleProviderCallback_all');

Route::get('google/login', 'Auth\LoginController@googleAuth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
/*Route::get('/admin', 'AdminController@index')->name('admin.dashboard');*/


Route::get('/how-it-works', function () {
    return view('pages.how-it-works');
});

Route::get('/partners', function () {
    return view('pages.partner');
})->name('partners');
Route::post('/partners', 'IndexController@savePartner')->name('savePartner');

// Route::get('/our-services', function(){
//   return view('pages.our-services');
// });
// Route::get('/our-services','OurServices@show')->name('our-service');

Route::get('/services/{catagory}', 'OurServices@CatProducts')->name('CatProducts');
Route::get('/services/{catagory}/{product}', 'OurServices@Services')->name('Services');
Route::post('/services/{catagory}/{product}', 'OurServices@product');

Route::get('/vendors/{catagory}', 'VendorServices@Services')->name('Vendors');
Route::get('/vendors/{catagory}/{vendor}', 'VendorServices@vendor')->name('single-vendor');

/*all vendors*/
Route::get('/all_vendors', 'VendorServices@all_vendors')->name('all_vendors');

// Route::get('/vendors/{catagory}/{vendor}','VendorServices@getAddToQuery')->name('query-vendor');

Route::get('/event-coordinator', static function () {
    return view('pages.event-coordinator');
});

// Route::get('/vendors/{catagory}/{vendor}','VendorServices@getAddToQuery')->name('query-vendor');

Route::get('/event-coordinator', static function () {
    return view('pages.event-coordinator');
})->name('event_coordinator');

Route::get('/contact_us', static function () {
    return view('pages.contact_us');
})->name('contact_us');

Route::get('/about-us', function () {
    return view('pages.about-us');
});

//Route::get('/query-cart', function(){ return view('pages.query-cart'); });

Route::get('/terms-condition', function () {
    return view('pages.terms-condition');
})->name('terms-condition');

Route::get('/privacy', function () {
    return view('pages.privacy');
})->name('privacy');

Route::group(['middleware' => ['auth']], function () {

    Route::get('/my-account', function () {
//        return view('user.my-account');
        return \Illuminate\Support\Facades\Redirect::to('/');
    })->name('my-account');

    // Route::get('/query-cart', 'QueryController@index')->name('my-query-cart');
    // Route::delete('/query-cart/{id}', 'QueryController@destroy')->name('query-delete');

    Route::get('/query-cart/sendquery', 'QueryController@send')->name('send-query');

    Route::post('/query-send/{id}/{item}', 'MailController@queryMail')->name('query-send');

    Route::get('/confirm-query', 'QueryController@show')->name('confirm-query');
    Route::post('/confirm-query/{id}', 'QueryController@confirmOne')->name('confirm-query-id');
    Route::post('/query-delete/{id}', 'QueryController@deleteOne')->name('query-delete');
    Route::post('/delete-all/{id}', 'QueryController@deleteAll')->name('clear-query');


    /*add for my query: 15-5-2019*/
    Route::get('/my-query', 'MyQueryController@index')->name('my_query');
    Route::get('/my-expired_query', 'MyQueryController@expired_query')->name('expired_query');

    Route::get('/load-events/{tag_id}', 'MyQueryController@load_event')->name('load_events');

    Route::get('/my-query-re-request/{ids}', 'MyQueryController@reRequest')->name('reRequest');

    Route::get('/my-query-delete/{ids}', 'MyQueryController@delete')->name('my_query_delete');
    Route::get('/my-query-move-to-expire/{ids}', 'MyQueryController@softDelete')->name('softDelete');

    Route::get('/cash-payments/{ids}/{amounts}', 'MyQueryController@cashPayments')->name('cashPayments');

    Route::get('/add-to-myCart/{ids}', 'MyQueryController@addToCart')->name('addToCart');
    Route::get('/show-dates/{ids}/{status}', 'MyQueryController@showDates')->name('showDates');
    Route::get('/remove-from-myCart/{ids}', 'MyQueryController@removeFromCart')->name('removeFromCart');
    Route::get('/load-myCart/', 'MyQueryController@loadCart')->name('loadCart');
    Route::get('/add-event-to-query/{event_id}/{query_ids}', 'MyQueryController@addEven2Query')->name('addEven2Query');
    Route::get('/remove-event-from-query/{event_id}/{query_ids}/{tag_id}', 'MyQueryController@removeEvent4mQuery')->name('deleteEvent4mQuery');
    Route::post('/add_new_event/{tag_id}', 'MyQueryController@add_new_event')->name('add_new_event');
    Route::get('/timeout-status/{qid}', 'MyQueryController@changeTimeOutStatus')->name('changeTimeOutStatus');


    Route::get('/load-query-detals/{ids}', 'MyQueryController@loadQueryDetails')->name('load_query_details');


    /*End of add for my query: 15-5-2019*/


    //Route::get('/cart', function(){ return view('user.cart'); })->name('my-cart');

    // Route::get('/wishlist', function(){ return view('user.wishlist'); })->name('my-wishlist');

    Route::post('/vendors/{catagory}/{vendor}', 'VendorServices@vendorQuery');

    // Route::get('/checkout', 'CheckoutController@show')->name('check1');
    // Route::post('/checkout', 'CheckoutController@address')->name('check2');
    //
    // Route::get('/shipping', 'CheckoutController@shippingShow')->name('shipping');
    // Route::post('/shipping', 'CheckoutController@shippingAdd')->name('shippingAdd');
    //
    //Route::get('/payment-method', 'CheckoutController@paymentShow')->name('payment-method');
    //Route::post('/payment-method', 'CheckoutController@paymentAdd')->name('paymentAdd');

    /*Payments code*/
    //Route::get('/payment-method', 'CheckoutController@paymentShow')->name('payment-method');
    Route::post('/payment-method', 'CheckoutController@paymentShow')->name('payment-method');
    Route::post('/payment-method/bkash', 'CheckoutController@paymentAdd')->name('paymentAdd');

    // SSLCOMMERZ Start
    Route::POST('/pay', 'PublicSslCommerzPaymentController@index')->name('sslpay');
    Route::POST('/success', 'PublicSslCommerzPaymentController@success');
    Route::POST('/fail', 'PublicSslCommerzPaymentController@fail');
    Route::POST('/cancel', 'PublicSslCommerzPaymentController@cancel');
    Route::POST('/ipn', 'PublicSslCommerzPaymentController@ipn');
    //SSLCOMMERZ END
    Route::POST('/success-checkout', 'CheckoutController@paidOnline')->name('checkout');

    Route::get('/payment/success/', 'OrderController@paySuccess')->name('paySuccess');
    Route::get('/payment/fail/', 'OrderController@payFail');
    Route::get('/payment/cancel/', 'OrderController@payCancel');
    /*End of  Payments code*/

    Route::resource('/wishlist', 'WishlistController', ['except' => ['create', 'edit', 'show', 'update']]);

    // Route::resource('/address', 'AddressController');

    Route::resource('/personal-info', 'PersonalInfoController', ['except' => ['index', 'show', 'destroy', 'create', 'store']]);

    // Route::resource('/cart', 'CartController');

    Route::get('/order', 'MailController@orderMail')->name('confirm-purchase');
    Route::get('/order/{user}', 'OrderController@ClientOrder')->name('client-orderlist');

    Route::get('/inbox', 'MessageController@myMessage')->name('User.Message');
    Route::get('/inbox/{id}', 'MessageController@singleMessage')->name('User.SingleMess');

    /*
   * Nir Edit for user inbox
   * */

    Route::post('/inbox/sendMessage', 'MessageController@sendMessage')->name('User.SendMessage');

    /* End of
     * Nir Edit for user inbox
     * */
    // Route::get('/add-address', function(){ return view('user.add-address'); })->name('add-address');
    // Planning Tools "My Checklist"
    Route::get('/user-checklist/{id}', 'ChecklistController@uploadFirstChecklist')->name('userCheckList_upload');
    Route::get('/my-checklist/{id}', 'ChecklistController@show')->name('mychecklist');
    Route::post('/my-checklist/addNewSection', 'ChecklistController@addNew')->name('addNew');
    Route::post('/my-checklist/deleteChecklist/{id}', 'ChecklistController@deleteChecklist')->name('deleteChecklist');
    Route::get('/my-checklist/checkChecklist/{id}/{status}', 'ChecklistController@checkChecklist')->name('checkChecklist');
    Route::post('/my-checklist/resetChecklist/', 'ChecklistController@resetChecklist')->name('resetChecklist');
    // Planing Tools "My Checklist" Ends

    // Planning Tools "My Vendor"
    Route::get('/my-vendors/{id}', 'OrderController@myvendors')->name('myvendors');
    Route::post('my-vendors/create', 'OrderController@createMyVendor')->name('createMyVendor');
    Route::post('my-vendors/update', 'OrderController@updateMyVendors')->name('updateMyVendor');
    Route::post('my-vendors/delete/{id}', 'OrderController@deleteMyVendor')->name('deleteMyVendor');
    Route::post('my-vendors/deleteall/{id}', 'OrderController@deleteall')->name('deleteall');
    // Planning Tools "My Vendor" Ends

    // Planning Tools "Budget Manager"
    Route::get('/my-budget', 'HomeController@show')->name('mybudget');
    Route::post('/addbudget', 'HomeController@addBudget')->name('addbudget');
    Route::post('/updatebudget', 'HomeController@updateBudget')->name('updateBudget');
    // Planning Tools "Budget Manager" Ends

    Route::get('/payment', 'OrderController@payment')->name('payment');
    Route::post('/payonline/{id}', 'OrderController@payonline')->name('payonline');

    Route::post('/temp/{id}', 'OrderController@tempDel')->name('temp-delete');
    Route::post('/del-payment/{id}', 'OrderController@paymentDel')->name('delete-payment');
    Route::post('/manual-payment/{id}', 'OrderController@manualPayment')->name('manual-payment');

    // Rating & Review
    Route::post('/rating', 'VendorServices@rating')->name('rating');


    Route::get('/invoice/{q_id}', 'InvoiceController@index')->name('showInvoice');

});

Route::group(['middleware' => ['auth:admin']], function () {


    Route::get('/admin/invoice/{user_id}/{q_id}', 'InvoiceController@invoiceFromAdmin')->name('showInvoiceAdmin');


    Route::get('/admin', 'AdminController@index')->name('adminhome');


    Route::post('/confirmManualPayment/{id}', 'OrderController@confirmManualPayment')->name('confirmManualPayment');


    Route::get('/admin/client', 'ClientController@show')->name('client');
    Route::get('/admin/client/{id}', 'ClientController@showsingle')->name('specific-client');
    Route::get('/admin/new-client', 'ClientController@newClient')->name('new_client');
    Route::post('/admin/new-client/', 'ClientController@newClientSubmit')->name('client.store');

    Route::get('/admin/client/load-category/{type}', 'ClientController@loadCategory')->name('loadCategory');
    Route::get('/admin/client/load-item/{category_id}', 'ClientController@loadItem')->name('loadItem');

    Route::post('/admin/client/query', 'ClientController@query_submit')->name('admin.user.query');





    Route::get('/admin/order', 'OrderController@show')->name('order');
    Route::get('/admin/order/{userid}', 'OrderController@showsingle')->name('specific-order');

    Route::post('/admin/order/{id}/{user}', 'OrderController@UpdatePayment')->name('payment-update');

    Route::Post('/admin/status/{id}/{user}', 'OrderController@UpdateStatus')->name('order-update');

    Route::get('/admin/query', 'QueryController@adminlist')->name('query');
    Route::get('/admin/query/{user}', 'QueryController@adminlistdetails')->name('query-details');

    Route::get('/admin/reviewStatus/{query_id}', 'QueryController@reviewStatus')->name('reviewStatus');

    Route::post('/admin/query/{id}', 'QueryController@UpdateStatus')->name('query-update');
    Route::post('/admin/query/status/{id}/{user}', 'QueryController@NoStatus')->name('no-update');

    /*unauthorized Query*/
    Route::get('/admin/anonymous_query', 'unauthorizedQueryController@index')->name('unauthorized_query');
    Route::get('/admin/anonymous_query_delete/{id}', 'unauthorizedQueryController@destroy')->name('delete_anoQuery');

    Route::get('/admin/message', 'MessageController@index')->name('mess');
    Route::get('/admin/message/{id}', 'MessageController@show')->name('mess-single');
    Route::get('/admin/message_delete/{id}', 'MessageController@message_delete')->name('mess-single-delete');

    /*Nir-edit for be our partners */
    Route::get('/admin/partners', 'MessageController@part_index')->name('ad_partners');
    Route::get('/admin/partner/{id}', 'MessageController@part_show')->name('partner-single');
    Route::get('/admin/partner_delete/{id}', 'MessageController@part_message_delete')->name('partner-single-delete');
    /*End Of Nir-edit for be our partners */


    /*Nir-edit for be Event Coordinators */
    Route::get('/admin/event-coordinators', 'MessageController@EV_index')->name('event_coordinators_msg');
    Route::get('/admin/event_coordinator/{id}', 'MessageController@EV_show')->name('event_coordinator-single');
    Route::get('/admin/event_coordinator_delete/{id}', 'MessageController@EV_message_delete')->name('event_coordinator-single-delete');
    /*End Of Nir-edit for be our partners */


    Route::resource('/admin/service', 'ProductController');
    Route::get('/admin/services/{category}', 'ProductController@index2')->name('product.categories');
    Route::post('/admin/service/suspend/{id}', 'ProductController@suspend')->name('service.suspend');
    Route::post('/admin/service/active/{id}', 'ProductController@active')->name('service.active');

    Route::resource('admin/vendors', 'VendorAdmin');
    Route::get('admin/vendor/{category}', 'VendorAdmin@index_as_category')->name('vendor.categories');

    Route::post('/admin/vendors/suspend/{id}', 'VendorAdmin@suspend')->name('vendors.suspend');
    Route::post('/admin/vendors/active/{id}', 'VendorAdmin@active')->name('vendors.active');


    /*Routes conflict -> so vendr instead of vendor*/
    Route::get('/admin/vendrs/packages', 'VendorAdmin@packages')->name('vendor-packages');


    Route::get('/admin/vendor/packages/{id}', 'VendorAdmin@getpackages')->name('vendor.getPack');
    Route::post('/admin/vendor/packages/delete/{id}', 'VendorAdmin@delPackage')->name('vendor.deletePack');
    Route::post('/admin/vendor/packages/add/{id}', 'VendorAdmin@addPackage')->name('vendor.addPack');


    /**Gallery Routes**/
    Route::get('/admin/vendor/galleries/{id}', 'VendorAdmin@getGalleries')->name('vendor.getGalleries');
    Route::post('/admin/vendor/galleries/add/{id}', 'VendorAdmin@addGalleries')->name('vendor.addGalleries');
    Route::post('/admin/vendor/galleries/delete/{id}', 'VendorAdmin@deleteGall')->name('vendor.deleteGall');


    Route::get('/confirm-list', 'OrderController@confirmList')->name('confirm');
    Route::get('/admin/confirm/{user}', 'OrderController@confirmSingle')->name('confirm-details');

    /*nir edit*/
    Route::post('/admin/confirm/{confirm_id}', 'OrderController@confirmOrder')->name('confirm-order');
    Route::get('/admin/delete_order/{confirm_id}', 'OrderController@deleteOrder')->name('delete-order');

    Route::post('/admin/query/sendmail/{user}', 'MailController@Notify')->name('notify-client');

    Route::get('/admin/invoice/{id}', 'OrderController@invoice')->name('invoice');

    /*nir-edit for admin inbox */
    Route::get('/admin/query_box/{id}', 'QueryBoxController@index');

    Route::get('/query_inbox/{id}', 'QueryBoxController@singleMessage');

    Route::post('/query_inbox/sendMessage', 'QueryBoxController@sendMessage')->name('User.SendMessage');


    /*Routes for Admin-User -> Nir*/

    Route::get('/admin/add_new_user', 'AdminController@Show_addNewUser')->name('Show_addNewUser');
    Route::post('/admin/add_new_user_submit', 'AdminController@addNewUserSubmit')->name('addNewUserSubmit');

    Route::get('/admin/show_user_list', 'AdminController@show_UserList')->name('Show_UserList');


    Route::get('/admin/admin_delete/{id}', 'AdminController@adminDelete')->name('admin_delete');

    Route::get('/admin/edit_admin/{id}', 'AdminController@editAdmin')->name('edit_admin');

    Route::post('/admin/edit_admin_submit/{id}', 'AdminController@UpdateAdminUser')->name('UpdateAdminUser');

    //edited by frank

    Route::get('/load-query-details-admin/{ids}', 'MyQueryController@loadQueryDetailsAdmin')->name('load_query_details_admin');
    Route::post('/admin/update-query-details/', 'QueryController@updateQueryDetails')->name('update_query_details');
    Route::get('/admin/dashboard/google', 'AdminAnalyticsController@selectAnalyticsDate')->name('admindash');
    Route::post('/admin/dashboard/google', 'AdminAnalyticsController@showVisitorAnalytics')->name('admindashdate');
    Route::get('/admin/timeout', 'QueryController@timeout')->name('timeout');
});

Route::get('go', 'MyQueryController@go');





