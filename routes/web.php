<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('permission:access_dashboard');
Route::middleware('auth')->group(function (){
    Route::prefix('dashboard')->group(function (){
    	Route::get('home', 'HomeController@dashboard')->name('dashboard')
            ->middleware('permission:access_dashboard');
        // TODO: Rutas módulo Employee
        // Index: Muestra la vista para create employee
        Route::get('personal/crear', 'EmployeeController@index')->name('employee.index')
            ->middleware('permission:create_employee');
        //para retornar la lista de provincias al seleccionar un departamento
        Route::get('personal/provinces', 'EmployeeController@getProvinces');
        //para retornar la lista de distritos al seleccionar una provincia
        Route::get('personal/districts', 'EmployeeController@getDistricts');

        //Store: Guarda employee
        Route::post('employee/store', 'EmployeeController@store')->name('employee.store')
            ->middleware('permission:store_employee');
        //Edit: mostrar el formulario de actualizacion
        Route::get('personal/actualizar/{id}', 'EmployeeController@edit')->name('employee.edit')
            ->middleware('permission:edit_employee');
        //Update: guarda la info
        Route::post('employee/update/{id}', 'EmployeeController@update')->name('employee.update')
            ->middleware('permission:update_employee');
        //Destroy: da de baja a un empleado
        Route::post('employee/destroy', 'EmployeeController@destroy')->name('employee.destroy')
            ->middleware('permission:destroy_employee');
        //trashed: devuelve los empleados dados de baja
        Route::get('empleados/bajas', 'EmployeeController@trashed')->name('employee.trashed')
            ->middleware('permission:restore_employee');
        //restore: restaura un empleado
        Route::get('employee/restore', 'EmployeeController@restore')->name('employee.restore')
            ->middleware('permission:restore_employee');
    });
});