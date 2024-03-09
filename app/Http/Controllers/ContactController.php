<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Contact;
use App\Models\GlobalSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;

class ContactController extends Controller
{
    //
    public function showContactPage()
    {
        return View::make('pages.contact');
    }

    public function submitContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

       Mail::to(GlobalSetting::first()
            ->admin_email)
            ->cc(GlobalSetting::first()->support_mail_address)
            ->send(new ContactMail($contact));

        return redirect()->back()->with('message', 'Your message has been sent successfully!');
    }
}
