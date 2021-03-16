<?php

namespace App\Http\Controllers;

use App\Models\CompanyLogo;
use App\Models\Content;
use Illuminate\Http\Request;

class OurClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $our_client = Content::select('id', 'meta_title', 'meta_description', 'meta_keyword', 'title', 'content', 'path_img_banner')
            ->where('page_type','our-client-main')
            ->first();
        $company_logo = CompanyLogo::select('path_img')->get();
        if (!$our_client) {
            $our_client = new Content();
        }
        return view('web.our_clients', compact('our_client','company_logo'));
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

    public function ImageBanner($path)
    {
        return response()->download(storage_path('app/client/' . $path));
    }

    public function ImageCompanyLogo($path)
    {
        return response()->download(storage_path('app/company_logo/' . $path));
    }
}
