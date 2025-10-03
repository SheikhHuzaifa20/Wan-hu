<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CourseController;

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

if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}

//===================== Admin Routes =====================//

Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function () {


    Route::get('/', 'Admin\AdminController@dashboard');

    Route::get('/dashboard', 'Admin\AdminController@dashboard')->name('admin.dashboard');

    Route::get('account/settings', 'Admin\UsersController@getSettings');
    Route::post('account/settings', 'Admin\UsersController@saveSettings');

    Route::get('project', function () {
        return view('dashboard.index-project');
    });

    Route::get('analytics', function () {
        return view('admin.dashboard.index-analytics');
    });


    Route::get('logo/edit', 'Admin\AdminController@logoEdit')->name('admin.logo.edit');
    Route::post('logo/upload', 'Admin\AdminController@logoUpload')->name('logo_upload');

    Route::get('favicon/edit', 'Admin\AdminController@faviconEdit')->name('admin.favicon.edit');

    Route::post('favicon/upload', 'Admin\AdminController@faviconUpload')->name('favicon_upload');

    Route::get('config/setting', 'Admin\AdminController@configSetting')->name('admin.config.setting');

    Route::get('contact/inquiries', 'Admin\AdminController@contactSubmissions');
    Route::get('contact/inquiries/{id}', 'Admin\AdminController@inquiryshow');
    Route::get('newsletter/inquiries', 'Admin\AdminController@newsletterInquiries');

    Route::any('contact/submissions/delete/{id}', 'Admin\AdminController@contactSubmissionsDelete');
    Route::any('newsletter/inquiries/delete/{id}', 'Admin\AdminController@newsletterInquiriesDelete');

    // #SubcriptionPlan management
    // Route::get('subscription','Admin\SubscriptionPlanController@index')->name('admin.subscription.index');
    // Route::get('subscription/create','Admin\SubscriptionPlanController@create')->name('admin.subscription.create');
    // Route::post('subscription/create','Admin\SubscriptionPlanController@store')->name('admin.subscription.store');
    // Route::get('subscription/delete/{id}','Admin\SubscriptionPlanController@delete')->name('admin.subscription.delete');
    // Route::get('subscription/edit/{id}','Admin\SubscriptionPlanController@edit')->name('admin.subscription.edit');
    // Route::post('subscription/edit/{id}','Admin\SubscriptionPlanController@update')->name('admin.subscription.update');

    /* Config Setting Form Submit Route */
    Route::post('config/setting', 'Admin\AdminController@configSettingUpdate')->name('config_settings_update');




    //==============================================================//

    //==================== Error pages Routes ====================//
    Route::get('403', function () {
        return view('pages.403');
    });

    Route::get('404', function () {
        return view('pages.404');
    });

    Route::get('405', function () {
        return view('pages.405');
    });

    Route::get('500', function () {
        return view('pages.500');
    });
    //============================================================//

    #Permission management
    Route::get('permission-management', 'PermissionController@getIndex');
    Route::get('permission/create', 'PermissionController@create');
    Route::post('permission/create', 'PermissionController@save');
    Route::get('permission/delete/{id}', 'PermissionController@delete');
    Route::get('permission/edit/{id}', 'PermissionController@edit');
    Route::post('permission/edit/{id}', 'PermissionController@update');

    #Role management
    Route::get('role-management', 'RoleController@getIndex');
    Route::get('role/create', 'RoleController@create');
    Route::post('role/create', 'RoleController@save');
    Route::get('role/delete/{id}', 'RoleController@delete');
    Route::get('role/edit/{id}', 'RoleController@edit');
    Route::post('role/edit/{id}', 'RoleController@update');

    #CRUD Generator
    Route::get('/crud-generator', ['uses' => 'ProcessController@getGenerator']);
    Route::post('/crud-generator', ['uses' => 'ProcessController@postGenerator']);

    # Activity log
    Route::get('activity-log', 'LogViewerController@getActivityLog');
    Route::get('activity-log/data', 'LogViewerController@activityLogData')->name('activity-log.data');

    #User Management routes
    Route::get('users', 'Admin\\UsersController@Index')->name('admin.user.index');
    Route::get('users/create', 'Admin\\UsersController@create')->name('admin.user.create');
    Route::post('users/store', 'Admin\\UsersController@store')->name('admin.user.store');
    Route::get('user/edit/{id}', 'Admin\\UsersController@edit')->name('admin.user.edit');
    Route::post('users/update/{id}', 'Admin\\UsersController@update')->name('admin.user.update');
    Route::get('users/delete/{id}', 'Admin\\UsersController@destroy')->name('admin.user.delete');
    // Route::get('user/deleted/', 'Admin\\UsersController@getDeletedUsers')->name('admin.user.');
    // Route::get('user/restore/{id}', 'Admin\\UsersController@restoreUser')->name('admin.user.');


    Route::resource('product', 'Admin\\ProductController');
    Route::get('product/{id}/delete', ['as' => 'product.delete', 'uses' => 'Admin\\ProductController@destroy']);
    Route::get('product/get/index', 'Admin\ProductController@getIndex')->name('product.getIndex');

    Route::get('order-product/list', ['as' => 'order.list', 'uses' => 'Admin\\ProductController@orderList']);
    Route::get('order-courses/list', ['as' => 'order.list', 'uses' => 'Admin\\CourseController@ordercourses']);
    Route::get('order/detail/{id}', ['as' => 'order.list.detail', 'uses' => 'Admin\\ProductController@orderListDetail']);
    Route::get('order-course/detail/{id}', ['as' => 'order.course.list.detail', 'uses' => 'Admin\\CourseController@orderCourseListDetail']);

    Route::resource('course', 'Admin\\CourseController');
    Route::get('course/{id}/delete', ['as' => 'course.delete', 'uses' => 'Admin\\CourseController@destroy']);
    Route::get('course/get/index', 'Admin\CourseController@getIndex')->name('course.getIndex');
    Route::get('/order/list', 'Admin\ProductController@orderList')->name('orderList');
    // Route::get('order/list', ['as' => 'order.list', 'uses' => 'Admin\\CourseController@orderList']);
    // Route::get('order/detail/{id}', ['as' => 'order.list.detail', 'uses' => 'Admin\\CourseController@orderListDetail']);

    //Order Status Change Routes//
    Route::get('status/paid/{id}', 'Admin\\ProductController@updatestatusPaid')->name('status.paid');
    Route::get('status/pending/{id}', 'Admin\\ProductController@updatestatusPending')->name('status.pending');
    Route::get('status/failed/{id}', 'Admin\\ProductController@updatestatusFailed')->name('status.failed');
    Route::get('admin/order/delete/{id}', 'Admin\\ProductController@deleteOrder')
    ->name('order.delete');
    Route::post('course/move', 'Admin\\CourseController@move')->name('course.move');

});

//==============================================================//

//Log Viewer
Route::get('log-viewers', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@index')->name('log-viewers');
Route::get('log-viewers/logs', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@listLogs')->name('log-viewers.logs');
Route::delete('log-viewers/logs/delete', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@delete')->name('log-viewers.logs.delete');
Route::get('log-viewers/logs/{date}', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@show')->name('log-viewers.logs.show');
Route::get('log-viewers/logs/{date}/download', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@download')->name('log-viewers.logs.download');
Route::get('log-viewers/logs/{date}/{level}', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@showByLevel')->name('log-viewers.logs.filter');
Route::get('log-viewers/logs/{date}/{level}/search', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@search')->name('log-viewers.logs.search');
Route::get('log-viewers/logcheck', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@logCheck')->name('log-viewers.logcheck');


Route::get('auth/{provider}/', 'Auth\SocialLoginController@redirectToProvider');
Route::get('{provider}/callback', 'Auth\SocialLoginController@handleProviderCallback');
Route::get('logout', 'Auth\LoginController@logout');
Auth::routes();


//===================== Account Area Routes =====================//


Route::get('signin', 'GuestController@signin')->name('signin');
Route::get('signup', 'GuestController@signup')->name('signup');
Route::post('register', 'GuestController@register')->name('register');
Route::get('subscription', 'GuestController@subscription')->name('subscription.payment');
Route::get('account', 'LoggedInController@account')->name('account');
Route::get('purchased-course', 'LoggedInController@purchased_course')->name('purchased-course');
Route::get('orders', 'LoggedInController@orders')->name('orders');
Route::get('account-detail', 'LoggedInController@accountDetail')->name('accountDetail');

Route::post('update/account', 'LoggedInController@updateAccount')->name('update.account');
Route::get('signout', function () {
    Auth::logout();

    Session::flash('flash_message', 'You have logged out  Successfully');
    Session::flash('alert-class', 'alert-success');

    return redirect('signin');
});

Route::get('logout', 'Auth\LoginController@logout');
Auth::routes();

Route::get('account/friends', 'LoggedInController@friends')->name('friends');
Route::get('account/upload', 'LoggedInController@upload')->name('upload');
Route::get('account/password', 'LoggedInController@password')->name('password');
Route::get('/get-audio', 'HomeController@search')->name('audio.search');

Route::get('/success', 'OrderController@success')->name('success');

Route::post('update/profile', 'LoggedInController@update_profile')->name('update_profile');
Route::post('update/uploadPicture', 'LoggedInController@uploadPicture')->name('uploadPicture');

//===================== Front Routes =====================//

Route::get('/', 'HomeController@index')->name('home');
Route::get('/military-federal', 'HomeController@military')->name('military');
Route::get('/professional-responders', 'HomeController@professional')->name('professional');
Route::get('/contractor_compliance', 'HomeController@contractor')->name('contractor');
Route::get('/we_are_content', 'HomeController@we_are_content')->name('we_are_content');

Route::get('/contact-us', 'HomeController@contact')->name('contact');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/staff', 'HomeController@staff')->name('staff');
Route::get('/accreditations', 'HomeController@accreditations')->name('accreditations');
Route::get('/terms-of-service', 'HomeController@terms')->name('terms');
Route::get('/courses', 'HomeController@courses')->name('courses');
Route::get('/course-detail/{id}', 'HomeController@course_detail')->name('course_detail');
Route::post('/mark-content-viewed', 'HomeController@markViewed')->name('content.markViewed');
Route::get('/upcoming-training', 'HomeController@upcoming')->name('upcoming');
Route::get('/get-upcoming-training', 'HomeController@upcoming_ajax')->name('upcoming_ajax');
Route::get('/upcoming-details/{id}', 'HomeController@upcoming_detail')->name('upcoming-details');
Route::get('/grant-opportunities', 'HomeController@grant_opportunities')->name('grant_opportunities');
Route::get('/grant-registration', 'HomeController@grant_registration')->name('grant_registration');
Route::get('/vendors', 'HomeController@vendors')->name('vendors');
Route::get('/stickers', 'HomeController@stickers')->name('stickers');
Route::get('/t-shirts', 'HomeController@t_shirts')->name('t_shirts');
Route::get('/hats', 'HomeController@hats')->name('hats');
Route::get('/faq', 'HomeController@faq')->name('faq');


Route::get('/set_sub_category', 'Admin\ProductController@set_sub_category')->name('set_sub_category');

//=================================================================//

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);
/* Form Validation */


//===================== Shop Routes Below ========================//


Route::post('/cartAdd', 'ProductController@saveCart')->name('save_cart');
Route::any('/remove-cart/{id}', 'ProductController@removeCart')->name('remove_cart');
Route::post('/updateCart', 'ProductController@updateCart')->name('update_cart');
Route::get('/cart', 'ProductController@cart')->name('cart');
Route::get('/payment', 'OrderController@payment')->name('payment');
Route::get('invoice/{id}', 'LoggedInController@invoice')->name('invoice');
Route::get('/payment', 'OrderController@payment')->name('payment');
Route::get('/checkout', 'OrderController@checkout')->name('checkout');
Route::post('/place-order', 'OrderController@placeOrder')->name('order.place');
//==============================================================//

Route::get('user-ip', 'HomeController@getusersysteminfo');

//===================== New Crud-Generators Routes Will Auto Display Below ========================//
route::get('status/delivered/{id}', 'admin\\productcontroller@updatestatusdelivered')->name('status.delivered');
route::get('status/cancelled/{id}', 'admin\\productcontroller@updatestatuscancelled')->name('status.cancelled');

Route::resource('admin/blog', 'Admin\\BlogController');
Route::resource('admin/category', 'Admin\\CategoryController');

Route::resource('admin/banner', 'Admin\\BannerController', ['names' => 'admin.banner']);
Route::get('admin/banner/{id}/delete', ['as' => 'banner.delete', 'uses' => 'Admin\\BannerController@destroy']);
Route::resource('admin/category', 'Admin\\CategoryController');
Route::resource('admin/attributes', 'Admin\\AttributesController');
Route::resource('admin/attributes-value', 'Admin\\AttributesValueController');
Route::post('admin/get-attributes', 'Admin\\AttributesValueController@getdata')->name('get-attributes');
Route::post('admin/pro-img-id-delet', 'Admin\\AttributesValueController@img_delete')->name('pro-img-id-delet');
Route::post('admin/delete-product-variant', 'Admin\\AttributesValueController@deleteProVariant')->name('delete.product.variant');
Route::resource('admin/testimonial', 'Admin\\TestimonialController');
Route::resource('admin/page', 'Admin\\PageController');



Route::get('/about', 'HomeController@about')->name('about');
// Route::get('/blogs', 'HomeController@blogs')->name('blogs');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/book/{id}', 'HomeController@product_detail')->name('book.detail');
Route::post('newsletter-submit', 'HomeController@newsletterSubmit')->name('newsletterSubmit');
Route::post('/inquiry', 'HomeController@inquiry')->name('inquiry.store');
Route::get('/legend_wanhu', 'HomeController@legend_wanhu')->name('legend_wanhu');
Route::get('/macabee_brothers', 'HomeController@macabee_brothers')->name('macabee_brothers');
Route::get('/farmer_dell_jezebell', 'HomeController@farmer_dell_jezebell')->name('farmer_dell_jezebell');
Route::get('/the_crossing', 'HomeController@the_crossing')->name('the_crossing');