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

Route::get('/', [
    'as'   => 'onepager.welcome',
    'uses' => 'WelcomeController@show',
]);

Route::post('/subscribe', [
    'as'   => 'onepager.subscribe',
    'uses' => 'WelcomeController@subscribe',
]);

Route::get('/impressum', function () {
    return view('imprint');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/presse', function () {
    return view('press');
});

Route::get('/support', function () {
    return view('support');
});

Route::get('/hartzhurts', function () {
    return view('hartzhurts');
});

Route::get('/stream', function () {
    return redirect('https://www.youtube.com/watch?v=gS65yoNcq88', 307);
});

Route::get('/live', function () {
    return redirect('https://www.youtube.com/watch?v=gS65yoNcq88', 307);
});

Route::get('blog', [
    'as'   => 'blog.posts.index',
    'uses' => 'PostController@index',
]);

Route::get('blog/category/{category}', [
    'as'   => 'blog.category.show',
    'uses' => 'CategoryController@index',
]);

Route::get('blog/{post}', [
    'as'   => 'blog.posts.show',
    'uses' => 'PostController@show',
]);

Route::group(['prefix' => 'cdn'], function () {

    Route::get('images/{file}', [
        'as'   => 'cdn.image.show',
        'uses' => 'Cdn\ImageController@show',
    ]);

});

/*
 * Newsletter routes
 *
 */
Route::group(['middleware' => 'auth', 'prefix' => 'dashboard', 'namespace' => 'Dashboard'], function () {


    Route::get('/', function () {
        return redirect()->route('dashboard.newsletter.index');
    });

    Route::resource('donation', 'DonationController');

    Route::resource('posts', 'PostController', [
        'parameters' => 'singular',
    ]);

    Route::resource('categories', 'CategoryController', [
        'parameters' => 'singular',
    ]);

    /*
   * Media routs
   * ########################################################################
   */
    Route::resource('media', 'MediaController', [
        'parameters' => 'singular',
        'only'       => ['index', 'destroy', 'create', 'store'],
    ]);


    Route::get('/export', function () {

        $newsletters = \App\Newsletter::get();

        $subscriber = new \Illuminate\Support\Collection();

        foreach ($newsletters as $newsletter) {
            $subscriber->push([
                'id'    => $newsletter->id,
                'email' => $newsletter->email,
            ]);
        }


        Excel::create('Newsletter_Subscriber', function ($excel) use ($subscriber) {

            $excel->sheet('Subscriber', function ($sheet) use ($subscriber) {

                $sheet->fromArray($subscriber, null, 'A1', false);
            });

        })->download('csv');

    });

    Route::get('/newsletter', [
        'as'   => 'dashboard.newsletter.index',
        'uses' => 'NewsletterController@index',
    ]);

});

/*
 * Authentication routes
 */
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', ['uses' => 'Auth\AuthController@postLogin']);
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', ['uses' => 'Auth\AuthController@postRegister']);
