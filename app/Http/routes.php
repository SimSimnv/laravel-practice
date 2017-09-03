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


Route::get('/',function(){
	return view('welcome');
});

//posts
Route::get('/posts','PostsController@index');
Route::get('/posts/create','PostsController@create');
Route::get('/posts/{id}','PostsController@show');
Route::post('/posts/','PostsController@store');
Route::post('/posts/','PostsController@store');

Route::post('/posts/{id}/comments','CommentsController@store');
//tasks
Route::get('/task', 'TasksController@index');
Route::get('/task/{task}', 'TasksController@show');



















Route::get('/test',function(){

	//$tasks=DB::table('tasks')->get();

	//dd($tasks);

	//$tasks=App\Task::all();

	$tasks=App\Task::incomplete();

	return view('tests.all',
		[
			'tasks'=>$tasks,
			'var'=>'This is a test var', 
			'var2'=>'Second var'
		]
	);
});

Route::get('/test/{id}',function($id){
	//$task=DB::table('tasks')->find($id);
	
	$task=App\Task::find($id);
	return view('tests.show',['task'=>$task]);

});



Route::get('/old', function () {
    return view('home');
});
Route::get('/old/about', function () {
    return view('about');
});
Route::get('/old/contact', function () {
    return view('contact');
});