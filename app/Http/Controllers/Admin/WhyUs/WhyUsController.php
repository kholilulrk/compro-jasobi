<?php

namespace App\Http\Controllers\Admin\WhyUs;

use App\Http\Controllers\Controller;
use App\WhyUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WhyUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['why_us'] = WhyUs::latest()->paginate(5);
        return view('pages.admin.whyus.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.whyus.index');
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

        $path = $request->file('icon')->store('whyus');
        
        $whyus = WhyUs::create([
            'title'         => $request->title,
            'description'   => $request->description,
            'icon'          => $path
        ]);

        if($whyus) {
            return redirect()->route('admin.whyus.index')->with(['status' => 'success', 'message' => 'Create Why Us Successfully']);
        }
        return redirect()->route('admin.whyus.create')->with(['status' => 'danger', 'message' => 'Save Failed, Contact Developer']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['why_us'] = WhyUs::find($id);
        return view('pages.admin.whyus.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['why_us'] = WhyUs::findOrFail($id);
        return view('pages.admin.whyus.edit', $data);
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
        $whyus  = WhyUs::find($id);

        $request->validate([
            'title'         => 'required|max:200',
            'description'   => 'required',
            'icon'          => 'image'
        ]);

        if ($request->file('icon')) {
            $file = $request->file('icon');
            $path = $file->store("whyus");

            if (@$whyus->icon && Storage::exists($whyus->icon)) {
                Storage::delete($whyus->icon);
            }
        }

        $whyus->fill([
            'title'             => $request->title,
            'description'       => $request->description,
            'icon'              => ($request->file('icon') ? $path : ($whyus->icon != null ? $whyus->icon : null))
        ])->save();

        return redirect()->route('admin.whyus.index')->with(['status' => 'success', 'message' => 'Why Us updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $whyus = WhyUs::findOrFail($id);

        if (@$whyus->icon && Storage::exists($whyus->icon)) {
            Storage::delete($whyus->icon);
        }

        $whyus->delete();

        return redirect()->route('admin.whyus.index')->with(['status' => 'success', 'message' => 'Why Us deleted successfully']);
    }
}
