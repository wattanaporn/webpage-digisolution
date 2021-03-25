<?php

namespace App\Http\Controllers;

use App\Models\CompanyLogo;
use App\Models\Content;
use App\Models\OurClient;
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
            ->where('page_type', 'our-client-main')
            ->first();
        $company_logo = CompanyLogo::select('path_img')
            ->where('type', 'logo')
            ->orderby('updated_at','desc')
            ->get();
        $server_list = Content::select('id', 'name')
            ->where('page_type', 'service-list')
            ->orderby('updated_at','desc')
            ->get();
        $client = OurClient::select('id')
            ->get();
        if (!$our_client) {
            $our_client = new Content();
        }
        if (count($server_list)>0){
            $server_list_id = $server_list[0]['id'];

        }else{
            $server_list_id = 0;
        }
        return view('web.our_clients', compact('our_client', 'company_logo', 'server_list','server_list_id'));
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
        return response()->download(storage_path('app/client/' . $path));
    }

    public function ImageCompanyLogo($path)
    {
        return response()->download(storage_path('app/company_logo/' . $path));
    }

    public function OurClientList(Request $request)
    {
        $tab = $request->get('tap');
        $current_page = $request->get('page');
        $per_page = $request->get('per_page');
        $page = ($current_page * $per_page);
        $client = OurClient::select('id', 'service_list_id', 'link', 'name', 'path_img_small', 'path_img_large')
            ->where('service_list_id', $tab)
            ->orderby('updated_at','desc')
            ->skip($page)->take($per_page)
            ->get();
        return response()->json(['data' => $client, 'success' => true], 200);
    }

    public function OurClientListTap(Request $request)
    {
        $tab = $request->get('tap');
        $client = OurClient::select('id', 'service_list_id', 'link', 'name', 'path_img_small', 'path_img_large')
            ->where('service_list_id', $tab)
            ->orderby('updated_at','desc')
            ->get();
        $count_client = count($client);
        return response()->json(['data' => $count_client, 'success' => true], 200);
    }

    public function ImageOurClientList($path)
    {
        return response()->download(storage_path('app/client_list/' . $path));
    }
}
