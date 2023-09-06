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

Auth::routes();

Route::group(['middleware'=>['web','auth']], function(){
	Route::get('/', function () {
	    if(Auth::user()->user_role=="customer"){
			return view('customerHome.view');
		}
		if(Auth::user()->user_role=="admin"){
			$users['users'] = \App\users::all();
			return view('admin_landing_page',$users);
		}
		if(Auth::user()->user_role=="staff"){
			return view('StaffHome.view');
		}} );

	Route::get('/home', function () {
	    if(Auth::user()->user_role=="customer"){
			return view('customerHome.view');
		}
		if(Auth::user()->user_role=="admin"){
			$users['users'] = \App\users::all();
			return view('admin_landing_page',$users);
		}
		if(Auth::user()->user_role=="staff"){
			return view('StaffHome.view');
		}} );

});


Route::resource('users','UserController');

Route::get('users.create','UserController@index');
Route::get('users.edit','ManageUserController@edit');

Route::post('ManageUser.manageUser','ManageUserController@edit');
Route::post('ManageUser.manageUser','ManageUserController@destroy');

Route::get('AddAssets.view','AddAssetsController@index');
Route::post('AddAssets.view','AddAssetsController@store')->name('add_asset');

Route::get('ManageAssets.view','ManageAssetsController@index');
Route::post('ManageAssets.view','ManageAssetsController@store')->name('edit_asset');

Route::get('ManageDepartments.view','ManageDepartmentsController@index');
Route::post('ManageDepartments.view','ManageDepartmentsController@store')->name('edit_department');

Route::get('ManageSuppliers.view','ManageSuppliersController@index');
Route::post('ManageSuppliers.view','ManageSuppliersController@store')->name('edit_supplier');

Route::get('ManageAccessories.view','ManageAccessoriesController@index');
Route::post('ManageAccessories.view','ManageAccessoriesController@store')->name('edit_accessory');

Route::get('ManageConsumables.view','ManageConsumablesController@index');
Route::post('ManageConsumables.view','ManageConsumablesController@store')->name('edit_consumable');

Route::get('ManageComponents.view','ManageComponentsController@index');
Route::post('ManageComponents.view','ManageComponentsController@store')->name('edit_component');

Route::get('RequestAssets.view','RequestAssetsController@index');
Route::post('RequestAssets.view','RequestAssetsController@store')->name('request_asset');

Route::get('ViewAssetRequests.view','ViewAssetRequestsController@index');
Route::post('ViewAssetRequests.view','ViewAssetRequestsController@store')->name('asset_response');

Route::get('ViewAssetResponses.view','ViewAssetResponsesController@index');
//Route::post('ViewAssetRequests.view','ViewAssetRequestsController@store')->name('asset_response');

Route::get('AddDepartment.view','AddDepartmentController@index');
Route::post('AddDepartment.view','AddDepartmentController@store')->name('add_department');

Route::get('AddSuppliers.view','AddSuppliersController@index');
Route::post('AddSuppliers.view','AddSuppliersController@store')->name('add_suppliers');

Route::get('AddAccessory.view','AddAccessoryController@index');
Route::post('AddAccessory.view','AddAccessoryController@store')->name('add_accessory');

Route::get('AddConsumables.view','AddConsumablesController@index');
Route::post('AddConsumables.view','AddConsumablesController@store')->name('add_consumables');

Route::get('AddComponent.view','AddComponentController@index');
Route::post('AddComponent.view','AddComponentController@store')->name('add_component');

Route::get('PassportRegistration.view','PassportRegistrationController@index');
Route::post('PassportRegistration.view','PassportRegistrationController@store')->name('passport');

Route::get('CollectPassport.view','CollectPassportController@index');
Route::post('CollectPassport.view','CollectPassportController@store')->name('collect_passport');

Route::get('ManagePassport.view','ManagePassportController@index');
Route::post('ManagePassport.view','ManagePassportController@store')->name('edit_passport');

Route::get('ViewPassport.view','ViewPassportController@index');
Route::post('ViewPassport.view','ViewPassportController@store')->name('track_passport');

Route::post('users.create','UserController@store')->name('users.store');

Route::get('ManageUser.manageUser','ManageUserController@index');
Route::post('ManageUser.manageUser','ManageUserController@store')->name('manageUser.store');

Route::get('/forgot_password', 'ForgotPassword@forgot');
Route::post('/forgot_password', 'ForgotPassword@password');