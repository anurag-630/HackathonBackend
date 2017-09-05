<?php

use Illuminate\Http\Request;

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

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
//    $api->get('/test', function () {
//        return 'dingo working';
//    });

    $api->post('/signup/student', 'App\Api\V1\Controllers\StudentController@store');
    $api->post('/signup/mentor', 'App\Api\V1\Controllers\MentorController@store');
    $api->post('/question', 'App\Api\V1\Controllers\QuestionController@store');
    //  $api->post('/technology', 'App\Api\V1\Controllers\StudentTechnologyController@store');
    $api->get('/authenticate/student', 'App\Api\V1\Controllers\StudentController@authenticate');
    $api->get('/authenticate/mentor', 'App\Api\V1\Controllers\MentorController@authenticate');
    $api->get('/question/all', 'App\Api\V1\Controllers\QuestionController@index');
    $api->get('/mentor/all', 'App\Api\V1\Controllers\MentorController@mentor');
    $api->get('/student/all', 'App\Api\V1\Controllers\StudentController@student');
    $api->get('/question/{id}', 'App\Api\V1\Controllers\StudentController@questionsAll');
    //$api->get('/user/technology/{id}', 'App\Api\V1\Controllers\StudentController@technology');
    // $api->get('technology/all', 'App\Api\V1\Controllers\StudentTechnologyController@index');
    //$api->get('technology/{technology}', 'App\Api\V1\Controllers\StudentTechnologyController@user');
});




