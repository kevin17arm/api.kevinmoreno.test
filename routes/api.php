<?php

use App\Http\Controllers\GraduateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcademictitleController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\DepartamentController;
use App\Http\Controllers\GraduatecompanyController;

//Route::apiResource('Academictitle', Academictitle::class)->only(['index', 'show']);
Route::apiResource('', AcademictitleController::class)->only([]);
Route::apiResource('', CountryController::class)->only([]);
Route::apiResource('', CompanyController::class)->only([]);
Route::apiResource('', AreaController::class)->only([]);
Route::apiResource('', CityController::class)->only([]);
Route::apiResource('', DepartamentController::class)->only([]);
Route::apiResource('', GraduatecompanyController::class)->only([]);
Route::apiResource('', GraduateController::class)->only([]);