<?php

namespace App\Http\Controllers\Client\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.client.contact.index');
    }
}
