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
/**
 * Models used for routes
 */
use \App\User;
use \App\Role;

Auth::routes();

Route::group(['middleware' => ['web','auth']], function(){
	Route::get('/', function () {
		if (Auth::user()->lvl >= 15) {
			$sessionVars = array(
				"name"=>Auth::user()->name,
				"email"=>Auth::user()->email,
				"lvl"=>Auth::user()->lvl,
			);
			Session::put($sessionVars);
			return view('home');
		} else {
			$sessionVars = array(
				"name"=>Auth::user()->name,
				"email"=>Auth::user()->email,
				"lvl"=>Auth::user()->lvl,
			);
			Session::put($sessionVars);
			$viewBag['users'] = User::all();
			$viewBag['roles'] = Role::all();
			return view('admin/home', $viewBag);
		}
	});

});

/**
 * Admin Only Actions
 */
Route::group(['middleware' => ['admin']], function(){
	/**
	 * CRUD Operations role
	 */	
	Route::get('role/create', ['as' => 'create-role', function () {
		return view('admin/role/create');
	}]);		
	Route::get('role/read', ['as' => 'manage-roles', function () {
		$viewBag['roles'] = Role::all()->where('active', 1);
		return view('admin/role/read', $viewBag);
	}]);			
	Route::post('role/create', ['as' => 'create-role', 'uses' => 'UserRoleController@create']);			
	Route::post('role/readOne', ['as' => 'read-role', 'uses' => 'UserRoleController@read']);			
	Route::post('role/update', ['as' => 'update-role', 'uses' => 'UserRoleController@update']);			
	Route::post('role/delete', ['as' => 'delete-role', 'uses' => 'UserRoleController@delete']);			
	 
	/**
	 * CRUD Operations user
	 */	
	Route::get('user/create', ['as' => 'create-user', function () {
		$viewBag['roles'] = Role::all()->where('active', 1);
		return view('admin/user/create', $viewBag);
	}]);		
	Route::get('user/read', ['as' => 'manage-users', function () {
		$viewBag['roles'] = Role::all()->where('active', 1);
		$viewBag['users'] = User::all()->where('active', 1);
		return view('admin/user/read', $viewBag);
	}]);			
	Route::post('user/create', ['as' => 'create-user', 'uses' => 'ProfileController@create']);			
	Route::post('user/readOne', ['as' => 'read-user', 'uses' => 'ProfileController@read']);			
	Route::post('user/update', ['as' => 'update-user', 'uses' => 'ProfileController@update']);			
});	
Route::group(['middleware' => ['admin', 'notMe']], function(){
	Route::post('user/delete', ['as' => 'delete-user', 'uses' => 'ProfileController@delete']);					
});
