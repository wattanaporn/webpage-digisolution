<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyLogo;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.contact.list_slide');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $logo = new CompanyLogo();
        return view('admin.contact.edit_slide', compact('logo'));
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
        $logo = CompanyLogo::select('id', 'path_img', 'company_name')
            ->where('id', $id)
            ->first();
        return view('admin.contact.edit_slide', compact('logo'));
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
            $logo = CompanyLogo::find($id);
        } else {
            $logo = new CompanyLogo();
        }
        $logo->company_name = $request->get('name');
        $logo->type = 'slide';
        if ($request->file('image_icon')) {
            $imageIconName = time() . '_icon.' . $request->file('image_icon')->getClientOriginalExtension();
            $request->file('image_icon')->move(storage_path('app/slide/'), $imageIconName);
            $logo->path_img = $imageIconName;
        }
        $logo->save();
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

    public function List()
    {
        $logo = CompanyLogo::query()->select('id', 'company_name', 'path_img')
            ->where('type','slide')
            ->get();
        return datatables($logo)->toJson();
    }

    public function Image($path)
    {
        return response()->download(storage_path('app/slide/' . $path));
    }

    public function LogoListDelete(Request $request)
    {
        if ($request->get('logo_id')) {
            $logo_list_delete = CompanyLogo::find($request->get('logo_id'));
            $logo_list_delete->delete();
            if ($logo_list_delete) {
                return response()->json(['success' => true], 200);
            } else {
                return;
            }
        }
    }
}
