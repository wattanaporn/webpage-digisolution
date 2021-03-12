<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;

//use Yajra\DataTables\DataTables;

class ServiceListController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('admin.service.list');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $service_list = new Content();
        return view('admin.service.edit', compact('service_list'));
    }

    /**
     * eturn \Illuminate\Http\Response
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
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $service_list = Content::select('id', 'meta_title', 'meta_description', 'meta_keyword', 'title', 'content', 'path_img_banner', 'name', 'path_img')
            ->where('id', $id)
            ->first();
        return view('admin.service.edit', compact('service_list'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
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

    /**
     * @param $path
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function ImageBanner($path)
    {
        return response()->download(storage_path('app/service_list/' . $path));
    }

    /**
     * @param $path
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function ImageIcon($path)
    {
        return response()->download(storage_path('app/service_list/' . $path));
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function List()
    {
        $service = Content::query()->select('id', 'name', 'path_img')
            ->where('page_type', 'service-list')
            ->get();
        return datatables($service)->toJson();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse|void
     */
    public function ServiceListDelete(Request $request)
    {
        if ($request->get('service_list_id')) {

            $service_list_delete = Content::find($request->get('service_list_id'));
            $service_list_delete->delete();
            if ($service_list_delete) {
                return response()->json(['success' => true], 200);
            } else {
                return;
            }
        }

    }


}
