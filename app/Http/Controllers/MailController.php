<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mail;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mails = Mail::all();
        return view('mail.index')->with('mails', $mails);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mail.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //Create lesson
        $mail = new Mail;
        $mail->text = $request->input('text');
        $mail->save();

        return redirect('/mail')->with('success', 'Laiskas issiustas');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mail = Mail::find($id);
        return view('mail.show')->with('mail', $mail);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mail = Mail::find($id);
        return view('mail.edit')->with('mail', $mail);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Create lesson
        $mail = Mail::find($id);
        $mail->text = $request->input('text');
        $mail->save();

        return redirect('/mail')->with('success', 'Laikas pakeistas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mail = Mail::find($id);
        $mail->delete();
        return redirect('/mail')->with('success', 'Laiskas panaikintas');
    }
}
