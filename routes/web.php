<?php



Route::get('/',['as'=>'/','uses'=>'LoginController@getLogin']);
Route::post('/login',['as'=>'login','uses'=>'LoginController@postLogin']);



Route::group(['middleware'=>['authen','roles']],function(){
    Route::get('/logout',['as'=>'logout','uses' =>'LoginController@getLogout']);
    //if uses route no used it will show function does not exist
    Route::get('/dashboard', ['as'=>'dashboard','uses'=>'DashboardController@dashboard']);
});
