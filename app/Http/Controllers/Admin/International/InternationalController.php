<?php

namespace App\Http\Controllers\Admin\International;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\International;

class InternationalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_international['internationals'] = International::latest()->paginate(5);
        return view('pages.admin.international.index', $data_international);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.international.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'         => 'required|max:200',
            'short_description' => 'required',
            'description'   => 'required',
            'icon'          => 'required|image'
        ]);

        $path = $request->file('icon')->store('international');
        // dd($request->all());
        $data_international = International::create([
            'title'         => $request->title,
            'short_description' => $request->short_description,
            'description'   => $request->description,
            'url'           => $request->url,
            'icon'          => $path,
            'url_website'   => $request->url_website
        ]);

        if($data_international) {
            return redirect()->route('admin.international.index')->with(['status' => 'success', 'message' => 'Create International Successfully']);
        }
        return redirect()->route('admin.international.create')->with(['status' => 'danger', 'message' => 'Save Failed, Contact Developer']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data_international['internationals'] = International::find($id);
        return view('pages.admin.international.show', $data_international);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_international['internationals'] = International::findOrFail($id);
        return view('pages.admin.international.edit', $data_international);
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
        $data_international  = International::find($id);

        $request->validate([
            'title'         => 'required|max:200',
            'short_description' => 'required',
            'description'   => 'required',
            'icon'           => 'image'
        ]);

        if ($request->file('icon')) {
            $file = $request->file('icon');
            $path = $file->store("cooperation");

            if (@$data_international->icon && Storage::exists($data_international->icon)) {
                Storage::delete($data_international->icon);
            }
        }

        $data_international->fill([
            'title'             => $request->title,
            'short_description' => $request->short_description,
            'description'       => $request->description,
            'url'               => $request->url,
            'url_website'       => $request->url_website,
            'icon'              => ($request->file('icon') ? $path : ($data_international->icon != null ? $data_international->icon : null))
        ])->save();

        return redirect()->route('admin.international.index')->with(['status' => 'success', 'message' => 'International Updated Successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data_international = International::findOrFail($id);

        if (@$data_international->icon && Storage::exists($data_international->icon)) {
            Storage::delete($data_international->icon);
        }

        $data_international->delete();

        return redirect()->route('admin.international.index')->with(['status' => 'success', 'message' => 'International Deleted Successfully']);
    }
}
