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

Route::get('/', 'WelcomeController@index');

Route::get('links', 'LinksController@index');

Route::get('about', 'AboutController@index');

Route::get('articles', 'ArticlesController@index');

Route::get('article-one', 'ArticlesController@getArticleOne');

Route::get('article-two', 'ArticlesController@getArticleTwo');

Route::get('article-three', 'ArticlesController@getArticleThree');

Route::get('article-four', 'ArticlesController@getArticleFour');
