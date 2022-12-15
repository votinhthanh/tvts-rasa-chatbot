<?php

use App\Models\AbbreviationMajor;
use App\Models\Major;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/majors', function () {
    return Major::all();
});
Route::get('/majors/find', function (Request $request) {
    if ($request->get('field') && $request->get('value')) {
        try {
            return Major::where($request->get('field'), 'like' ,'%' . $request->get('value') . '%')->firstOrFail();
        } catch (Exception $e) {
            $majorId = AbbreviationMajor::where(
                $request->get('field'), 'like' ,'%' . $request->get('value') . '%')->first()->only('major_id');
            return Major::where('id', $majorId)->firstOrFail();
        }
    }
    abort(400, 'Missing search parameter');
});
