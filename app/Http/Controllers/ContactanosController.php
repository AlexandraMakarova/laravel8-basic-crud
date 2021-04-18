<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class ContactanosController extends Controller
{
    public function index()
    {
        return view('contactanos.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $mail = new ContactanosMailable($request->all());
        Mail::to("sane4ka27@gmail.com")->send($mail);
        return redirect()->route('contactanos.index')->with('info', 'Mensaje enviado');
    }
}