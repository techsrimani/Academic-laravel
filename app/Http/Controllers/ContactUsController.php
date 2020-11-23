<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{




    public function index()
    {
       $contactUs =  ContactUs::latest()->simplePaginate(10);;

        return view('contact_submissions', ['contactUs' => $contactUs]);
    }

    public function create()
    {
        return view('contact_form');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|integer',
            'message' => 'required'
        ]);

        ContactUs::create($request->all());

        $data = array(
            'name'      =>  $request->name,
            'email'    => $request->email,
            'phone'    => $request->phone,
            'message'   =>   $request->message
        );

       Mail::send(new ContactUsMail($data));

        return redirect()->back()->with('success', 'Thanks a lot your message means a lot to us!');
    }
}