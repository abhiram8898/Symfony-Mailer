<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class MailController extends Controller
{
    public function sendEmail(Request $request)
    {
        // Retrieve form input data
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $organization = $request->input('organization');
        $message2 = $request->input('message2');

        // Retrieve uploaded file
        $attachment = $request->file('attachment');
       
        $recipientEmail = 'grp.abhiram@gmail.com';
        if($attachment==!null)
        {
        $attachmentPath = $attachment->store('attachments');
        // Pass file path to the mail constructor
        Mail::to($recipientEmail)->send(new ContactFormMail($name, $email, $phone, $organization, $message2, $attachmentPath));

        return redirect()->back()->with('success', 'Email sent successfully!');
    }
    else{
        Mail::to($recipientEmail)->send(new ContactFormMail($name, $email, $phone, $organization, $message2));

        return redirect()->back()->with('success', 'Email sent successfully!');
    }
    }


    // public function Email(Request $request)
    // {
    //     // Retrieve form input data
    //     $name = $request->input('name');
    //     $email = $request->input('email');
    //     $phone = $request->input('phone');
    //     $organization = $request->input('organization');
    //     $message2 = $request->input('message2');

       

    //     $recipientEmail = 'grp.abhiram@gmail.com';

    //     // Pass file path to the mail constructor
    //     Mail::to($recipientEmail)->send(new ContactFormMail($name, $email, $phone, $organization, $message2));

    //     return redirect()->back()->with('success', 'Email sent successfully!');
    // }

}
