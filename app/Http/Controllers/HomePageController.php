<?php

namespace App\Http\Controllers;

use App\Models\CompanyLogo;
use App\Models\Contact;
use App\Models\Content;
use App\Models\OurClient;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::select('what_we_do')->where('type', 'admin-contact')->first();
        $service_list = Content::select('id', 'path_img', 'name','detail')
            ->where('page_type', 'service-list')
            ->get();
        $company_logo = CompanyLogo::select('path_img')->where('type','logo')->get();
        $slide = CompanyLogo::select('path_img')->where('type','slide')->get();
        $server_list = Content::select('id', 'name')->where('page_type', 'service-list')->get();
        return view('web.home', compact('contact', 'service_list','company_logo','server_list','slide'));
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
        //
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

    public function ContactFooter()
    {
        $data = Contact::select('id', 'path_logo', 'address', 'tell', 'email', 'facebook_page', 'copyright')
            ->where('type', 'admin-contact')
            ->first();
        return response()->json(['data' => $data], 200);
    }

    public function ImageLogo($path)
    {
        return response()->download(storage_path('app/contact/' . $path));
    }

    public function OurClientList(Request $request)
    {
        $tab = $request->get('tap');
        $client = OurClient::select('id', 'service_list_id', 'link', 'name', 'path_img_small', 'path_img_large')
            ->where('service_list_id', $tab)
            ->limit(6)
            ->get();
        return response()->json(['data' => $client, 'success' => true], 200);
    }
    public function ImageSlide($path)
    {
        return response()->download(storage_path('app/slide/' . $path));
    }
}
