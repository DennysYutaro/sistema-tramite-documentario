<?php

use Illuminate\Support\Facades\Route;

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

        //para retornar la lista de provincias al seleccionar un departamento al crear empleado
        Route::get('personal/provinces', 'EmployeeController@getProvinces');
        //para retornar la lista de distritos al seleccionar una provincia al crear empleado
        Route::get('personal/districts', 'EmployeeController@getDistricts');
        //Store: Guarda employee
        Route::post('employee/store', 'EmployeeController@store')->name('employee.store')
            ->middleware('permission:store_employee');
        //Listar empleados
        Route::get('personal/listar', 'EmployeeController@show')->name('employee.show')
            ->middleware('permission:create_employee');
        //Ver empleado
        Route::get('personal/ver/{id}', 'EmployeeController@see')->name('employee.see')
            ->middleware('permission:edit_employee');
        //Vista para modificar un empleado
        Route::get('personal/modificar/{id}', 'EmployeeController@edit')->name('employee.edit')
            ->middleware('permission:edit_employee');
        //Update: guarda la info
        Route::post('employee/update/{id}', 'EmployeeController@update')->name('employee.update')
            ->middleware('permission:update_employee');
        //Destroy: da de baja a un empleado
        Route::post('employee/destroy', 'EmployeeController@destroy')->name('employee.destroy')
            ->middleware('permission:destroy_employee');
        //trashed: devuelve los empleados dados de baja
        Route::get('empleados/dados-de-baja', 'EmployeeController@trashed')->name('employee.trashed')
            ->middleware('permission:restore_employee');
        //restore: restaura un empleado
        Route::post('employee/restore', 'EmployeeController@restore')->name('employee.restore')
            ->middleware('permission:restore_employee');

        //Muestra vista para crud para agregar familar a empleado
        Route::get('personal/familar/crear/{id}', 'RelativeController@index')->name('employee.relative.index')
            ->middleware('permission:create_employee');
        Route::post('employee/relative/store', 'RelativeController@store')->name('employee.relative.store')
            ->middleware('permission:create_employee');
        //Modificar un pariente del empleado
        Route::post('employee/relative/update', 'RelativeController@update')->name('employee.relative.update')
            ->middleware('permission:update_employee');
        //To delete a relative
        Route::post('employee/relative/delete', 'RelativeController@delete')->name('employee.relative.delete')
            ->middleware('permission:update_employee');

        
        
        
        
    });
});