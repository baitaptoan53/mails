<?php

namespace App\Http\Controllers;

use App\Mail\NotifyMail;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
     public function index()
     {

          Mail::to('emmyt2k2@gmail.com')->send(new NotifyMail());

          if (Mail::failures()) {
               return response()->Fail('Sorry! Please try again latter');
          } else {
               return response()->success('Great! Successfully send in your mail');
          }
     }
}
