<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoMail;

class MailController extends Controller
{
    

public function index()
   {
       $mailData = [
           'title' => 'Mail from your_email.com',
           'body' => 'This is for testing email using smtp.'
       ];

      // Mail::to('beasuhi333@gmail.com')->send(new DemoMail($mailData));
      foreach(['testemil9779@gmail.com', 'tesztmarci96@gmail.com',
                'tesztbibanka@gmail.com', 'foloslegesideirni@gmail.com'] as $recipient){Mail::to($recipient)->send(new DemoMail($mailData));};

       dd("Email is sent successfully."); //console loghoz hasonló dolog ez a dd
   }

}
