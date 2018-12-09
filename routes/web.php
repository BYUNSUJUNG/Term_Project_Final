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


Route::get('auth', function () {
    $credentials = [
        'email'    => 'susususu07@naver.com',
        'password' => 'password'
    ];

    if (! Auth::attempt($credentials)) {
        return 'Incorrect username and password combination';
    }

    return redirect('protected');
});

Route::get('auth/login', function() {
    return "You've reached to the login page~";
});

Route::get('auth/logout', function () {
    Auth::logout();

    return 'See you again~';
});
/*
Route::get('protected', function () {
    if (! Auth::check()) {
        return 'Illegal access !!! Get out of here~';
    }

    return 'Welcome back, ' . Auth::user()->name;
});

*/

Route::get('/', function() {
	return view('index');
})->name('index');
Auth::routes();


Route::get('index', function(){
	return view('index');
})->name('index');
Auth::routes();

Route::get('home', [
    'middleware' => 'auth',
    function() {
        return 'Welcome back, ' . Auth::user()->name;
    }
]);

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('protected', [
    'middleware' => 'auth',
    function () {
        return 'Welcome back, ' . Auth::user()->name;
    }
]);

/* User Registration */
Route::group(['prefix' => 'auth', 'as' => 'user.'], function () {
    Route::get('register', [
        'as'   => 'create',
        'uses' => 'Auth\AuthController@getRegister'
    ]);
    Route::post('register', [
        'as'   => 'store',
        'uses' => 'Auth\AuthController@postRegister'
    ]);
});

/* Session */
Route::group(['prefix' => 'auth', 'as' => 'session.'], function () {
    Route::get('login', [
        'as'   => 'create',
        'uses' => 'Auth\AuthController@getLogin'
    ]);
    Route::post('login', [
        'as'   => 'store',
        'uses' => 'Auth\AuthController@postLogin'
    ]);
    Route::get('logout', [
        'as'   => 'destroy',
        'uses' => 'Auth\AuthController@getLogout'
    ]);
});

/* Password Reminder */
Route::group(['prefix' => 'password'], function () {
    Route::get('remind', [
        'as'   => 'reminder.create',
        'uses' => 'Auth\PasswordController@getEmail'
    ]);
    Route::post('remind', [
        'as'   => 'reminder.store',
        'uses' => 'Auth\PasswordController@postEmail'
    ]);
    Route::get('reset/{token}', [
        'as'   => 'reset.create',
        'uses' => 'Auth\PasswordController@getReset'
    ]);
    Route::post('reset', [
        'as'   => 'reset.store',
        'uses' => 'Auth\PasswordController@postReset'
    ]);
});


Route::get('home', 'WelcomeController@home')->name('home');
Route::get('main', 'BBSController@index')->name('main');
Route::get('locationSample', 'BBSController@locationSample')->name('locationSample');
Route::get('content', 'BBSController@content')->name('content');
Route::get('sasin', 'BBSController@sasin')->name('sasin');
Route::get('demo', 'BBSController@demo')->name('demo');

Route::get('menuBurger', 'BBSController@menuBurger')->name('menuBurger');
Route::post('menuBurgerSearch', 'BBSController@menuBurgerSearch')->name('menuBurgerSearch');
Route::get('menuChicken', 'BBSController@menuChicken')->name('menuChicken');
Route::post('menuChickenSearch', 'BBSController@menuChickenSearch')->name('menuChickenSearch');
Route::get('menuSide', 'BBSController@menuSide')->name('menuSide');
Route::post('menuSideSearch', 'BBSController@menuSideSearch')->name('menuSideSearch');
Route::get('menuDrink', 'BBSController@menuDrink')->name('menuDrink');
Route::post('menuDrinkSearch', 'BBSController@menuDrinkSearch')->name('menuDrinkSearch');

Route::get('menuBurgerView/{id}', 'BBSController@burger_show')->name('menuBurgerView');
Route::get('menuChickenView/{id}', 'BBSController@chicken_show')->name('menuChickenView');
Route::get('menuSideView/{id}', 'BBSController@side_show')->name('menuSideView');
Route::get('menuDrinkView/{id}', 'BBSController@drink_show')->name('menuDrinkView');

Route::get('storeNationwideFranchise', 'BBSController@storeNationwideFranchise')->name('storeNationwideFranchise');
Route::get('storeNewFranchise', 'BBSController@storeNewFranchise')->name('storeNewFranchise');
Route::get('storeGallery', 'BBSController@storeGallery')->name('storeGallery');

Route::get('storePeople', function(){
	return view('bbs.storePeople');
})->name('storePeople');
Auth::routes();

Route::get('storeTime', function(){
	return view('bbs.storeTime');
})->name('storeTime');
Auth::routes();



Route::get('storeNationwideFranchiseView/{id}', 'BBSController@storeNationwideFranchise_show')->name('storeNationwideFranchiseView');

Route::get('customerNotices', 'BBSController@customerNotices')->name('customerNotices');
Route::post('customerNoticesSearch', 'BBSController@customerNoticesSearch')->name('customerNoticesSearch');
Route::get('customerCounselingService', 'BBSController@customerCounselingService')->name('customerCounselingService');
Route::get('customerAdvertisingSchedule', 'BBSController@customerAdvertisingSchedule')->name('customerAdvertisingSchedule');
Route::post('customerAdvertisingScheduleSearch', 'BBSController@customerAdvertisingScheduleSearch')->name('customerAdvertisingScheduleSearch');

Route::get('customerNoticesView/{id}', 'BBSController@customerNotices_show')->name('customerNoticesView');
Route::get('customerAdvertisingScheduleView/{id}', 'BBSController@customerAdvertisingSchedule_show')->name('customerAdvertisingScheduleView');

Route::get('companyInformation', 'BBSController@companyInformation')->name('companyInformation');
Route::get('companyHistory', 'BBSController@companyHistory')->name('companyHistory');
Route::get('companyLocation', 'BBSController@companyLocation')->name('companyLocation');

Route::get('menu_write_form','BBSController@menu_create')->name('menu_write_form');
Route::get('store_write_form','BBSController@menu_create')->name('store_write_form');
Route::get('customer_write_form','BBSController@customer_create')->name('customer_write_form');

Route::post('menu_write', 'BBSController@menu_store')->name('menu_write');
Route::post('store_write', 'BBSController@store_store')->name('store_write');
Route::post('customer_write', 'BBSController@customer_store')->name('customer_write');

Route::get('menu_modify_form/{id}', 'BBSController@menu_edit')->name('menu_modify_form');
Route::get('customer_modify_form/{id}', 'BBSController@customer_edit')->name('customer_modify_form');

Route::post('menu_modify/{id}','BBSController@menu_update')->name('menuu_modify');
Route::post('customer_modify/{id}','BBSController@customer_update')->name('customer_modify');

Route::get('delete/{id}', 'BBSController@destroy')->name('delete');


Route::get('template', function(){
	return view('layouts.template');
});
Auth::routes();




Route::get('about', function(){
	return view('about');
})->name('about');
Auth::routes();

Route::get('products', function(){
	return view('products');
})->name('products');
Auth::routes();

Route::get('store', function(){
	return view('store');
})->name('store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('auth/confirm/{code}', ['as'=>'user_confirm', 'user'=>'UserController@confirm'])
->where('code','[\pL-\pN]{60}');


Route::get('auth/login/google','LoginController@redirectToProvider')->name('google_login');
Route::get('auth/google/callback', 'LoginController@handleProviderCallback');


Route::get('shoppingCartBoard', 'BBSController@shoppingCartBoard')->name('shoppingCartBoard');
Route::get('shoppingCart/{id}', 'BBSController@shoppingCart')->name('shoppingCart');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
