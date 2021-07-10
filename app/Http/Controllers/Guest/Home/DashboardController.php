<?php

namespace App\Http\Controllers\Guest\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Feature;
use App\WhyUs;
use App\International;
use App\Aboutus;
use App\Contact;
use App\Domestic;
use App\SocialMedia;

class DashboardController extends Controller
{
    public function index()
    {
        $data['data_fitur'] = Feature::all();
        $data['contact'] = Contact::find(1);
        $data['active'] = "show active";
        $data['why_us'] = WhyUs::all();
        $data['about'] = Aboutus::find(1);
        $data['internationals'] = International::all();
        $data['domestics'] = Domestic::all();
        $data['sosmed'] = SocialMedia::all();
        return view('pages.guest.home.index', $data);
    }
    
}
