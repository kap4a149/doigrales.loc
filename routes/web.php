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

// Route::get('/', function () {
//     return view('welcome');
// });

// This is the main page
Route::get('/', 'MainController@mainPage')->name('home');

//This is the departments page
Route::get('/departments', 'MainController@departments')->name('departments');

//Open list of news
Route::get('/news', 'MainController@allNews')->name('allNews');

//Open full news
Route::get('/news/{news_name}', 'MainController@fullNews')->where('news_name','[a-zA-Z0-9_-]+'); 

//Open all news by category
Route::get('/news/category/{category}', 'MainController@showByCategories')->where('category', '[A-Za-z0-9_-]+');

//Open full news by category
Route::get('/{selectedCategory}/{news_name}', 'MainController@fullNews')->where([
                                                                                'Selectedcategory' =>'[a-zA-Z0-9_-]', 
                                                                                'news_name','[a-zA-Z0-9_-]+'
                                                                                ]); 