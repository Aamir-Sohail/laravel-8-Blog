<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.contact');
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
            'firstname'=>'required|max:120',
            'lastname'=>'required|max:120',
            'email'=>'required|email',
            'description'=>'required|max:255',
            'contact_no'=>'required|max:20',
        ]);
        $contact = new Contact;
        $contact->firstname = $request->input('firstname');
        $contact->lastname = $request->input('lastname');
        $contact->email = $request->input('email');
        $contact->description = $request->input('description');
        $contact->contact_no = $request->input('contact_no');


        // $contact->user_id = Auth::user()->id;
        $contact->save();
        return back()->with('success', 'The item is successfully add');


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
