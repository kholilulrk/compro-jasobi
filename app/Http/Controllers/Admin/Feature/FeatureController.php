<?php

namespace App\Http\Controllers\Admin\Feature;

use App\Http\Controllers\Controller;
use App\Feature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_feature['data_feature'] = Feature::latest()->paginate(5);
        return view('pages.admin.feature.index', $data_feature);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.feature.index');
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
            'description'   => 'required',
            'icon'          => 'required|image'
        ]);

        $path = $request->file('icon')->store('feature');
        // dd($request->all());
        $data_feature = Feature::create([
            'title'         => $request->title,
            'description'   => $request->description,
            'icon'          => $path
        ]);

        if($data_feature) {
            return redirect()->route('admin.feature.index')->with(['status' => 'success', 'message' => 'Create Feature Successfully']);
        }
        return redirect()->route('admin.feature.create')->with(['status' => 'danger', 'message' => 'Save Failed, Contact Developer']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data_feature['feature'] = feature::find($id);
        return view('pages.admin.feature.show', $data_feature);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_feature['feature'] = Feature::find($id);
        return view('pages.admin.feature.edit', $data_feature);
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
        $data_feature  = Feature::find($id);

        $request->validate([
            'title'         => 'required|max:200',
            'description'   => 'required',
            'icon'          => 'image'
        ]);

        if ($request->file('icon')) {
            $file = $request->file('icon');
            $path = $file->store("feature");

            if (@$data_feature->icon && Storage::exists($data_feature->icon)) {
                Storage::delete($data_feature->icon);
            }
        }

        $data_feature->fill([
            'title'             => $request->title,
            'description'       => $request->description,
            'icon'              => ($request->file('icon') ? $path : ($data_feature->icon != null ? $data_feature->icon : null))
        ])->save();

        return redirect()->route('admin.feature.index')->with(['status' => 'success', 'message' => 'Feature Updated Successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data_feature = Feature::findOrFail($id);

        if (@$data_feature->icon && Storage::exists($data_feature->icon)) {
            Storage::delete($data_feature->icon);
        }

        $data_feature->delete();

        return redirect()->route('admin.feature.index')->with(['status' => 'success', 'message' => 'Feature Deleted Successfully']);
    }
}
