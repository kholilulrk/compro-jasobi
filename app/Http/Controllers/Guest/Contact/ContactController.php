<?php

namespace App\Http\Controllers\Guest\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Inbox;
use App\Rules\ReCaptcha;


class ContactController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.guest.contact.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:200',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => ['required', new ReCaptcha]
        ]);

        $data_contact = Inbox::create($request->all());
        
        if($data_contact){
            return redirect()->route('dashboard')->with(['status' => 'success', 'message' => 'Send Message Successfully']);
        }
        return redirect()->route('dashboard')->with(['status' => 'danger', 'message' => 'Send Message Failed']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
