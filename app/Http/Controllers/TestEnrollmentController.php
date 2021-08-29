<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\TestEnrollment;

class TestEnrollmentController extends Controller
{
    public function send(){
        $user = User::first();  

        $enrollmentData = [
            'body'=>"this is body of notification",
            'text'=>'this is text',
            'url'=>url('/')
        ];
        $user->notify(new TestEnrollment($enrollmentData));
    }
}
