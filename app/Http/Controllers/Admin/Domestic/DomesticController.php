<?php

namespace App\Http\Controllers\Admin\Domestic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Domestic;

class DomesticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_domestic['domestics'] = Domestic::latest()->paginate(5);
        return view('pages.admin.domestic.index', $data_domestic);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.domestic.index');
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

        $path = $request->file('icon')->store('domestic');
        // dd($request->all());
        $data_domestic = Domestic::create([
            'title'         => $request->title,
            'short_description' => $request->short_description,
            'description'   => $request->description,
            'url'           => $request->url,
            'icon'          => $path,
            'url_website'   => $request->url_website
        ]);

        if($data_domestic) {
            return redirect()->route('admin.domestic.index')->with(['status' => 'success', 'message' => 'Create Domestic Successfully']);
        }
        return redirect()->route('admin.domestic.create')->with(['status' => 'danger', 'message' => 'Save Failed, Contact Developer']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data_domestic['domestics'] = Domestic::find($id);
        return view('pages.admin.domestic.show', $data_domestic);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_domestic['domestics'] = Domestic::findOrFail($id);
        return view('pages.admin.domestic.edit', $data_domestic);
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
        $data_domestic  = Domestic::find($id);

        $request->validate([
            'title'         => 'required|max:200',
            'short_description' => 'required',
            'description'   => 'required',
            'icon'           => 'image'
        ]);

        if ($request->file('icon')) {
            $file = $request->file('icon');
            $path = $file->store("cooperation");

            if (@$data_domestic->icon && Storage::exists($data_domestic->icon)) {
                Storage::delete($data_domestic->icon);
            }
        }

        $data_domestic->fill([
            'title'             => $request->title,
            'short_description' => $request->short_description,
            'description'       => $request->description,
            'url'               => $request->url,
            'url_website'       => $request->url_website,
            'icon'              => ($request->file('icon') ? $path : ($data_domestic->icon != null ? $data_domestic->icon : null))
        ])->save();

        return redirect()->route('admin.domestic.index')->with(['status' => 'success', 'message' => 'Domestic Updated Successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data_domestic = Domestic::findOrFail($id);

        if (@$data_domestic->icon && Storage::exists($data_domestic->icon)) {
            Storage::delete($data_domestic->icon);
        }

        $data_domestic->delete();

        return redirect()->route('admin.domestic.index')->with(['status' => 'success', 'message' => 'Domestic Deleted Successfully']);
    }
}
