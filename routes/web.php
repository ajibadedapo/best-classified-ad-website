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

Route::get('/', 'PageController@index')->name('home');


Route::get('contact-us', function () {
    return view('contact');
});
Route::get('about-us', function () {
    return view('about');
});

Route::get('feedback', function () {
    return view('feedback');
});
Route::get('help', function () {
    return view('help');
});
Route::get('howitworks', function () {
    return view('howitworks');
});
Route::get('regions', 'PageController@regions');

Route::get('postadform', function () {
    $cats = \App\Category::all();
    return view('post-ad')->withCats($cats);
})->name('postform');

Route::get('privacy', function () {
    return view('privacy');
});
Route::get('terms', function () {
    return view('help');
});

Route::get('admin', 'ProductController@reviewpost')->name('reviewpost');

Route::post('approveroute', 'ProductController@approveroute')->name('approveroute');

Auth::routes();

Route::resource('product', 'ProductController');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('categorysearch', 'PageController@categorysearch')->name('categorysearch');

Route::get('localsearch', 'PageController@localsearch')->name('localsearch');

Route::get('all-listings', 'PageController@all_listings')->name('all_listings');

Route::get('{cat}', 'PageController@viewcategory')->name('category');

Route::get('login/{provider}', 'SocialController@redirect');

Route::get('login/twitter/callback', 'SocialController@TwitterCallback');

Route::get('login/{provider}/callback','SocialController@Callback');

Route::get('seller/{slug}', 'PageController@viewseller')->name('viewseller');

Route::get('{cat}/{slug}', 'ProductController@viewproduct')->name('viewproduct');


