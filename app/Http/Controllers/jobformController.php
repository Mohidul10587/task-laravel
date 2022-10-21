<?php

namespace App\Http\Controllers;

use App\Models\Jobform;
use Illuminate\Http\Request;

class jobformController extends Controller
{
    public function getjobform()
    {
        return view('jobform');
    }

    public function postjobformdata(Request $req)
    {
        $contact = new Jobform();
        $contact->name = $req->name;
        $contact->quantity = $req->quantity;
        $contact->price = $req->price;
       

        $contact->save();
        return redirect('/');
    }
}