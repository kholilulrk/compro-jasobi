<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserClientController extends Controller
{
    public function find($id)
    {
        $userclient['user_data'] = \App\userClient::find($id)->fisrt()->get();
        return view('pages. admin.dashboard.index', $userclient);
    }
}
