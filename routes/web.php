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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        $role_id = auth()->user()->role_id;
        switch ($role_id) {
            case '1':
                return redirect()->route('admin.dashboard');
                // return view('admin.dashboard');
                break;
            case '2':
                return redirect()->route('lawyer.dashboard');
                break;
            case '3':
                return redirect()->route('client.dashboard');
                break;
            default:
                // code...
                break;
        }
    })->name('dashboard');
});

Route::prefix('/admin')
    ->middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified',
        'admin',
    ])
    ->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');
        Route::get('/documents', function () {
            return view('admin.document');
        })->name('admin.document');
        Route::get('/documents/cases', function () {
            return view('admin.document.cases');
        })->name('admin.cases-document');
        Route::get('/documents/notarial', function () {
            return view('admin.document.notarial');
        })->name('admin.notarial-document');
        Route::get('/appointments', function () {
            return view('admin.appointment');
        })->name('admin.appointment');
        Route::get('/users', function () {
            return view('admin.user');
        })->name('admin.user');
        Route::get('/clients', function () {
            return view('admin.client');
        })->name('admin.client');
    });
