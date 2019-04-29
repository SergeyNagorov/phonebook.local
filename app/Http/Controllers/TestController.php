<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Contact;

class TestController extends Controller
{
    public function show(Contact $contact)
    {
        return view('contacts.show', ['contact' => $contact]);
    }
}
