<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Models\Contact;



class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function confirm(ContactRequest $request)
    {
        $contacts = $request->all();
        return view('contact.confirm', [
            'contacts' => $contacts
        ]);
    }

    public function send(Request $request)
    {
        if($request->input('back') == 'back') {
            return redirect('/contact')->withInput();
        }
        Contact::create([
            'fullname' => $request->input('last_name') . ' ' . $request->input('first_name'),
            'gender' => $request->input('gender'),
            'email' => $request->input('email'),
            'postcode' => $request->input('zip11'),
            'address' => $request->input('addr11'),
            'building_name' => $request->input('building_name'),
            'option' => $request->input('option'),
        ]);
        return view('contact.thanks');
    }
}
