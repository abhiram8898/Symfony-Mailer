<?php

// namespace App\Http\Controllers;

// use App\Mail\MyMailer;

// class MyController extends Controller
// {
//     protected $myMailer;

//     public function __construct(MyMailer $myMailer)
//     {
//         $this->myMailer = $myMailer;
//     }

//     public function sendEmail()
//     {
//         $recipient = 'recipient@example.com';
//         $subject = 'Hello';
//         $content = 'This is the email content.';

//         $this->myMailer->sendEmail($recipient, $subject, $content);

//         // Additional code...
//     }
// }



// namespace App\Http\Controllers;

// use App\Mail\WelcomeMail;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Mail;



// class UserControllerMail extends Controller
// {
//     public function sendWelcomeEmail(Request $request)
//     {
//         $recipientEmail = $request->input('email');
        
//         Mail::to($recipientEmail)->send(new WelcomeMail());
        
//         return "Welcome email sent to $recipientEmail!";
//     }
// }
