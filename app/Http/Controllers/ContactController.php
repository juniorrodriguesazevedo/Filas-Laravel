<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Jobs\ContactJob;
use App\Http\Requests\ContactStoreRequest;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\ContactStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactStoreRequest $request)
    {
        $contact = Contact::create($request->validated());

        ContactJob::dispatch($contact)->delay(now()->addSeconds(15));

        return redirect('/')->with(['status' => 'Email enviado']);
    }
}
