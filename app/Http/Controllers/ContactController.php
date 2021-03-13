<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Content;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact_main = Content::select('id', 'meta_title', 'meta_description', 'meta_keyword', 'title', 'content', 'path_img_banner')
            ->where('page_type', 'contact-main')
            ->first();

        $contact = Contact::select('id', 'address', 'email', 'tell', 'lat', 'long', 'path_logo', 'facebook_page')
            ->where('type', 'admin-contact')
            ->first();

        if (!$contact_main) {
            $contact_main = new Content();
        }
        if (!$contact) {
            $contact = new Contact();
        }

        return view('web.contact', compact('contact_main', 'contact'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function ImageBanner($path)
    {
        return response()->download(storage_path('app/contact/' . $path));
    }

    public function SentContact(Request $request)
    {
        $contact = new Contact();
        $contact->full_name = $request->get('full_name');
        $contact->tell = $request->get('tell');
        $contact->email = $request->get('email');
        $contact->topic = $request->get('topic');
        $contact->note = $request->get('note');
        $contact->type = 'user-contact';
        $contact->save();
        return back()->with('success', true);
    }
}
