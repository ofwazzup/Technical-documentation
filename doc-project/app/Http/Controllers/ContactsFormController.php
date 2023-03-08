<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactsFormModel;
use App\Http\Requests\ContactsFormRequest;

class ContactsFormController extends Controller
{

    public function submit(ContactsFormRequest $req) {
        $contactForm = new contactForm();
        $contactForm->name = $req->input('name');
        $contactForm->email = $req->input('email');
        $contactForm->subject = $req->input('subject');
        $contactForm->message = $req->input('message');

        $contactForm->save();

        return redirect()->route('home');
    }
}