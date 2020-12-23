<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use App\Mail\ContactReplyMail;
use App\Mail\ContactusUserAcknowledgement;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function index()
    {
        $contactUs =  ContactUs::latest()->simplePaginate(10);

        return view('contact_submissions', ['contactUs' => $contactUs]);
    }

    public function create()
    {
        return view('contact_form');
    }

    public function replyView($id)
    {
        $contactUs =  ContactUs::find($id);


        return view('reply_form',compact('contactUs',$contactUs));
    }

    public function replyStore(Request $request, $id)
    {

        $this->validate($request, [
            'message' => 'required'
        ]);

        $data = array(
            'message'   =>   $request->message
        );

        Mail::send(new ContactReplyMail($data));

        return redirect()->back()->with('success', 'successfully replied');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required | numeric | digits:10 | starts_with: 6,7,8,9',
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
        Mail::send(new ContactusUserAcknowledgement($data));

        return redirect()->back()->with('success', 'Thanks a lot your message means a lot to us!');
    }

    public function destroy($id)
    {
        $contactUs =  ContactUs::find($id);
        $contactUs->delete();
        return redirect()->route('contact-requests')
                        ->with('success','Product deleted successfully');
    }
}
