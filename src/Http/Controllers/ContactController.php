<?php

namespace Samara\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Samara\Contact\Models\Contact;
use Mail;
use Samara\Contact\Mail\ContactMailable;
use Samara\Contact\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact::contact'); // package_name::view_name
    }

    /**
     * Send contact.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function StoreAndsendEmail(ContactRequest $request)
    {
        Contact::create($request->all());
        // This sould be Queueable.
        Mail::to(config('contact.email_to'))->send(new ContactMailable($request->input('message'), $request->input('name'))); // config('contact.email_to') config('package_name.view_name')
        return redirect(route('contacts.index'));
    }
}
