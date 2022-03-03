<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Atymic\Twitter\Facade\Twitter;

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

Route::get('test', function()
{
    return "L'API est en ligne";
});

Route::get('twitter/tweet', function()
{
    return Twitter::postTweet(['status' => 'Laravel is beautiful', 'response_format' => 'json']);
});
// https://developer.twitter.com/en/portal/projects/1498969489580384259/apps/23536596/auth-settings https://github.com/atymic/twitter