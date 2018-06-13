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

use \App\Jobs\JobsSendQueueEmail;
use Illuminate\Http\Request;

Route::post('/jobs-send-queue-email', function(Request $request){
    $email = $request->email;

    $jobs_send_queue_email = (new JobsSendQueueEmail($email))->delay(30);
    dispatch($jobs_send_queue_email);

    return response()->json([
        'message' => "Berhasil ngirim email ke email {$email}"
    ]);
});
