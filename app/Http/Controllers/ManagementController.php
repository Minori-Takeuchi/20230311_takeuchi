<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ManagementController extends Controller
{
    public function index()
    {
        $contacts = Contact::paginate(10);

        return view('management.index', ['contacts' => $contacts]);
    }

    public function search(Request $request)
    {
        $name = $request->input('name');
        $gender = $request->input('gender');
        $from = $request->input('from');
        $until = $request->input('until');
        $email = $request->input('email');

        $query = Contact::query();

        if (!empty($name)) {
            $query->where('fullname', 'LIKE', "%{$name}%");
        }
        if (!empty($gender)) {
            $query->where('gender', $gender);
        }
        if (!empty($from) && !empty($until)) {
            $query->whereBetween('created_at', [$from, $until]);
        }
        if (!empty($from)) {
            $query->where('created_at', '>=', $from);
        }
        if (!empty($until)) {
            $query->where('created_at', '<=', $until);
        }
        if (!empty($email)) {
            $query->where('email', 'LIKE', "%{$email}%");
        }

        $contacts = $query->paginate(10);


        return view('management/index', [
            'contacts' => $contacts,
        ]);
    }

    public function delete(Request $request)
    {
        $contact = Contact::find($request->id);
        $contact->delete();
        return back();
    }
}
