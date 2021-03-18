<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;

class OurClientController extends Controller
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
        if (!$our_client) {
            $our_client = new Content();
        }
        return view('admin.client.our_client_index', compact('our_client'));

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
        return $this->update($request, null);
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
        $id = $request->get('id');
        if ($id) {
            $service = Content::find($id);
        } else {
            $service = new Content();
        }
        $service->meta_title = $request->get('meta_title');
        $service->meta_description = $request->get('meta_description');
        $service->meta_keyword = $request->get('meta_keyword');
        $service->title = $request->get('title');
//        $service->content = '';
        if ($request->file('image')) {
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(storage_path('app/client/'), $imageName);
            $service->path_img_banner = $imageName;
        }
        $service->page_type = 'our-client-main';
        $service->save();

        return back()->with('success', true);
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
}
