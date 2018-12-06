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
//Dashboard Route
Route::get('/', 'DashboardController@index');

Route::resource('/products','ProductController');

Route::resource('/orders','OrderController');
Route::get('/confirm/{id}','OrderController@confirm')->name('order.confirm');
Route::get('/pending/{id}','OrderController@pending')->name('order.pending');

Route::resource('/users','');


//Auth::routes();
/*
Route::get('/post','PostController@index');
Route::get('/seed',function(\App\Post $post){
    //สร้างข้อมูลหลอกๆๆ
    $faker = \Faker\Factory::create();

    foreach (range(1,50) as $i){
        $post->create([
            'title' => $faker->sentence(10),
            'body' => $faker->sentence(50),
            'status' => rand(0,1),
        ]);
    }


});

*/

/*
Route::get('/send','MailController@index');
Route::get('/','ContactController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/','ContactController@store')->name('contact.store');
Route::post('/mail','MailController@store')->name('mail.store');
Route::get('/login','LoginController@index')->name('login');
Route::post('/login','LoginController@store')->name('user.login');

Route::get('/success', function(){
    echo "<strong>Successfully</strong>";

})->name('success');
*/





