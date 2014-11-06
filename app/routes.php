<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', function()
{
	return View::make('index');
});
//contact
Route::post('mailPost', function()
{
    $date = Input::all();

    Mail::send('emails.inquiry', array('subject'=>$date['subject'],'mes'=>$date['mes'],'email'=>$date['email']),function($message){
        $message->to(array('admin@hanvyzj.com','vp05@hanvyzj.com'), 'inquiry')->subject('hanvy沥拌 - 英语 - 网站询盘');
    });

    return Redirect::back()->with('message', 'Message Send Successfully! We will contact you as soon as possible.');
});

//page
Route::get('about', function()
{
    return View::make('page.about_us');
});
Route::get('contact', function()
{
    return View::make('page.contact');
});
Route::get('customer_visit', function()
{
    return View::make('page.customer_visit');
});
Route::get('service', function()
{
    return View::make('page.service');
});
Route::get('solution', function()
{
    return View::make('page.solution');
});
Route::get('tour', function()
{
    return View::make('page.tour');
});