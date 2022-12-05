<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{


    public function store(Request $request)
    {
        // Storage::put('public/img/', $request->file('src'));
        $request->validate([
            'name' => 'required| string | max:255',
            'email' => 'required| string | max:255',
            'comment' => 'required| string | max:255',
        ]);
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'comment' => $request->comment,


        ]);
        return redirect()->back()->with('success', "We've received your email");
    }

    public function index()
    {

        $messages = Contact::where('archive', false)->get();
        return view('backoffice.pages.customer', compact('messages'));
    }

    public function archived()
    {

        $messages = Contact::where('archive', true)->get();
        return view('backoffice.pages.archive', compact('messages'));
    }

    public function show($id)
    {
        $messages = Contact::find($id);
        if ($messages->read == false) {
            $messages->read =   true;
            $messages->save();
        }


        return view('backoffice.pages.showMessage', compact('messages'));
    }
    public function archive($id)
    {
        $messages = Contact::find($id);
        if ($messages->archive == false) {
            $messages->archive =   true;
            $messages->save();
        }


        return redirect()->back()->with('message', 'Message is in archives');
    }
}
