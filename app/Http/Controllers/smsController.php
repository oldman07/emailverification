<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;

class smsController extends Controller
{
    public function sms(){
        Nexmo::message()->send([
            'to'=>'923485851246',
            'from'=>'923485851245',
            'text'=>'test SMS'

        ]);
        echo "message sent";
    }
}
