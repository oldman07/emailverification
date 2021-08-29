<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\AttachmentMail;
use Illuminate\Support\Facades\Mail;
use Nexmo\Laravel\Facade\Nexmo;
class EmailController extends Controller
{
    public function email(){
        Mail::to('backagain010@gmail.com')->send(new AttachmentMail);

    }
    
    
}
