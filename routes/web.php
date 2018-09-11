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
// all public route
Route::get('/', 'PageController@index')->name('home');
Route::get('/divisions/{division}', 'DivisionController@show')->name('division.show');
Route::get('/cities/{city}', 'CityController@show')->name('city.show');
Route::get('/hospitals/{hospital}', 'HospitalController@show')->name('hospital.show');
Route::get('/doctors', 'DoctorController@index')->name('doctor.index');
Route::get('/doctors/{doctor}', 'DoctorController@show')->name('doctor.show');
Route::get('/disciplines', 'DisciplineController@index')->name('discipline.index');
Route::get('/disciplines/{discipline}', 'DisciplineController@show')->name('discipline.show');
Route::get('/search', 'PageController@search')->name('search');

// dashboard
Route::group(['middleware' => 'auth'], function () {
  Route::get('/dashboard', [
    'as' => 'dashboard.index',
    'uses' => 'DashboardController@index',
  ]);
  Route::get('/dashboard/hospital/create', [
    'as' => 'dashboard.hospital.create',
    'uses' => 'HospitalController@create'
  ]);
  Route::post('/dashboard/hospital/create', [
    'as' => 'dashboard.hospital.store',
    'uses' => 'HospitalController@store'
  ]);
  Route::delete('/dashboard/hospital/delete/{id}', [
    'as' => 'dashboard.hospital.destroy',
    'uses' => 'HospitalController@destroy'
  ]);

  Route::get('/dashboard/doctors', [
    'as' => 'dashboard.doctors',
    'uses' => 'DoctorController@doctors'
  ]);
  Route::get('/dashboard/doctor/create', [
    'as' => 'dashboard.doctor.create',
    'uses' => 'DoctorController@create'
  ]);
  Route::post('/dashboard/doctor/create', [
    'as' => 'dashboard.doctor.store',
    'uses' => 'DoctorController@store'
  ]);
  Route::delete('/dashboard/doctor/delete/{id}', [
    'as' => 'dashboard.doctor.destroy',
    'uses' => 'DoctorController@destroy'
  ]);


});

// json response 
// all division
Route::get('json/divisions', function () {
  return App\Division::all();
});
Route::get('json/degrees', function () {
  return App\Degree::all();
});
// cities of division
Route::get('json/divisions/{id}', function ($id) {
  return App\City::where('division_id', $id)->get();
});

// hospitals of a city
Route::get('json/cities/{id}', function ($id) {
  return App\Hospital::where('city_id', $id)->get();
});


/// automatic auth

Auth::routes();
