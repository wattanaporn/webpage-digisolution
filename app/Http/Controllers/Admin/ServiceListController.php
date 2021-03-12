<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;
//use Yajra\DataTables\DataTables;

class ServiceListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.service.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service_list = new Content();
        return view('admin.service.edit', compact('service_list'));
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service_list = Content::select('id', 'meta_title', 'meta_description', 'meta_keyword', 'title', 'content', 'path_img_banner','name','path_img')
            ->where('id', $id)
            ->first();
        return view('admin.service.edit', compact('service_list'));
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
//        dd($request->all());
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
        $service->content = $request->get('content');
        $service->name = $request->get('name');
        if ($request->file('image')) {
            $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(storage_path('app/service_list/'), $imageName);
            $service->path_img_banner = $imageName;
        }
        if ($request->file('image_icon')) {
            $imageIconName = time() . '_icon.' . $request->file('image_icon')->getClientOriginalExtension();
            $request->file('image_icon')->move(storage_path('app/service_list/'), $imageIconName);
            $service->path_img = $imageIconName;
        }
        $service->page_type = 'service-list';
        $service->save();

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
        return response()->download(storage_path('app/service_list/' . $path));
    }
    public function ImageIcon($path)
    {
        return response()->download(storage_path('app/service_list/' . $path));
    }

    public function List()
    {
        $service = Content::query()->select('id', 'name', 'path_img')
        ->where('page_type', 'service-list')
        ->get();
        return datatables($service)->toJson();
    }

}
