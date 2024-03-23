<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Models\GlobalSetting;
use App\Models\ContactpageBanner;
use App\Models\ContactpageLocation;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Config;

class ContactController extends Controller
{
    //
    public function showContactPage()
    {
        $contactBanners  = ContactpageBanner::first();
        $contactLocation = ContactpageLocation::first();

        return View::make('pages.contact',[

            "contactBanners" => $contactBanners,
            "contactLocation" => $contactLocation,
            ]);

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

        Mail::to(GlobalSetting::first()->admin_email)
            ->bcc(GlobalSetting::first()->support_mail_address)
            ->send(new ContactMail($contact));

        return redirect()->back()->with('message', 'Your message has been sent successfully!');
    }

}
