<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\OurClient;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.client.list_client');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = new OurClient();
        $server_list = Content::select('id', 'name')->where('page_type', 'service-list')->get();
        return view('admin.client.edit_client', compact('client', 'server_list'));
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
        $client = OurClient::select('id', 'service_list_id', 'link', 'name', 'path_img_small', 'path_img_large')
            ->where('id', $id)
            ->first();
        $server_list = Content::select('id', 'name')->where('page_type', 'service-list')->get();
        return view('admin.client.edit_client', compact('client', 'server_list'));
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
        if ($id) {
            $client = OurClient::find($id);
        } else {
            $client = new OurClient();
        }
        $client->name = $request->get('name');
        $client->service_list_id = $request->get('service_list_id');
        $client->link = $request->get('link');
        if ($request->file('image')) {
            $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(storage_path('app/client_list/'), $imageName);
            $client->path_img_small = $imageName;
        }
        if ($request->file('image_icon')) {
            $imageIconName = time() . '_large.' . $request->file('image_icon')->getClientOriginalExtension();
            $request->file('image_icon')->move(storage_path('app/client_list/'), $imageIconName);
            $client->path_img_large = $imageIconName;
        }
        $client->save();

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

    public function List()
    {
        $client = OurClient::query()->select('our_clients.id as id', 'contents.name as contents_name', 'our_clients.name as name', 'our_clients.link as link', 'our_clients.path_img_small as path_img_small', 'our_clients.path_img_large as path_img_large')
            ->join('contents', 'contents.id', '=', 'our_clients.service_list_id')
            ->get();
        return datatables($client)->toJson();
    }

    public function Image($path)
    {
        return response()->download(storage_path('app/client_list/' . $path));
    }

    public function ClientListDelete(Request $request)
    {
        if ($request->get('id')) {
            $list_delete = OurClient::find($request->get('id'));
            $list_delete->delete();
            if ($list_delete) {
                return response()->json(['success' => true], 200);
            } else {
                return;
            }
        }
    }
}
