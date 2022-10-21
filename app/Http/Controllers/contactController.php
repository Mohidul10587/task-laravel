<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function contactform()
    {
        return view('contact');
    }

    public function contactdata(Request $req)
    {
        $contact = new Contact;
        $contact->name = $req->name;
        $contact->email = $req->email;
        $contact->pass = $req->pass;
        $contact->save();
        return redirect('/');
    }
}
