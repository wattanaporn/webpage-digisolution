<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use App\Models\Content;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = Content::select('id', 'meta_title', 'meta_description', 'meta_keyword', 'title', 'content', 'path_img_banner')
            ->where('page_type', 'service-main')
            ->first();
        if (!$service) {
            $service = new Content();
        }

        $service_list = Content::select('id', 'path_img', 'name')
            ->where('page_type', 'service-list')
            ->get();
        return view('web.service', compact('service', 'service_list'));
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
        return response()->download(storage_path('app/service/' . $path));
    }

    public function ImageIcon($path)
    {
        return response()->download(storage_path('app/service_list/' . $path));
    }

    public function ServiceListDetail($id)
    {
        $service_list = Content::select('id', 'meta_title', 'meta_description', 'meta_keyword', 'title', 'content', 'path_img_banner')
            ->where('id', $id)
            ->first();
        return view('web.service_list', compact('service_list'));
    }

    public function SentBudget(Request $request)
    {
        $budget = new Budget();
        $budget->full_name = $request->get('full_name');
        $budget->company = $request->get('company');
        $budget->tell = $request->get('tell');
        $budget->budget = $request->get('budget');
        $budget->note = $request->get('note');
        $budget->save();
        return back()->with('success', true);
    }
}
