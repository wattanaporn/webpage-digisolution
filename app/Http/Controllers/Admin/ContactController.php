<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Content;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
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
        return view('admin.contact.contact_index', compact('contact_main', 'contact'));
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
        return $this->update($request, null);
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
        $id = $request->get('id');
        $contact_id = $request->get('contact_id');
        if ($id) {
            $contact_main = Content::find($id);
            $contact = Contact::find($contact_id);
        } else {
            $contact_main = new Content();
            $contact = new Contact();
        }
        $contact_main->meta_title = $request->get('meta_title');
        $contact_main->meta_description = $request->get('meta_description');
        $contact_main->meta_keyword = $request->get('meta_keyword');
        $contact_main->title = $request->get('title');
        if ($request->file('image')) {
            $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(storage_path('app/contact/'), $imageName);
            $contact_main->path_img_banner = $imageName;
        }
        $contact_main->page_type = 'contact-main';
        $contact_main->save();

        $contact->address = $request->get('address');
        $contact->email = $request->get('email');
        $contact->tell = $request->get('tell');
        $contact->lat = $request->get('lat');
        $contact->long = $request->get('long');
        $contact->facebook_page = $request->get('facebook_page');
        if ($request->file('image_icon')) {
            $imageIconName = time() . '_logo.' . $request->file('image_icon')->getClientOriginalExtension();
            $request->file('image_icon')->move(storage_path('app/contact/'), $imageIconName);
            $contact->path_logo = $imageIconName;
        }
        $contact->type = 'admin-contact';
        $contact->save();

        return back()->with('success', true);
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

    public function ImageLogo($path)
    {
        return response()->download(storage_path('app/contact/' . $path));
    }
}
