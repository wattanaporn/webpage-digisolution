<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::select('id', 'title', 'description', 'keyword', 'head', 'content', 'path_img_banner')
            ->first();
        if (!$about) {
            $about = new About();
        }
        return view('admin.about.index', compact('about'));
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
    public function edit()
    {
//        $about = About::select('title', 'description', 'keyword', 'head', 'content', 'path_img_banner')
//            ->get();
//        return view('admin.about.index', compact('about'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if ($request->file('image')) {
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(storage_path('app/about/'), $imageName);
            $path = $imageName;
        }

        $id = $request->get('id');
        if ($id) {
            $about = About::find($id);
        } else {
            $about = new About();
        }
        $about->title = $request->get('title');
        $about->description = $request->get('description');
        $about->keyword = $request->get('keyword');
        $about->head = $request->get('head');
        $about->content = $request->get('content');
        $about->path_img_banner = $path;
        $about->save();

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
        return response()->download(storage_path('app/about/' . $path));
    }
}
