<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use App\Aboutus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_about['about'] = Aboutus::find(1);
        return view('pages.admin.aboutus.index', $data_about);
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
        //
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
        $data_about = Aboutus::find($id);
        $request->validate([
            'title' => 'required|max:200',
            'author' => 'required',
            'short_description' => 'required|max:200',
            'description' => '',
            'url'   => 'required',
            'icon' => 'image',
            'img_team' => 'image',
            'logo' => 'image',
            'logo_grayscale' => 'image',
            'logo_feature' => 'image'
        ]);
        
        $upload = [
            'icon' => $data_about->icon,
            'logo' => $data_about->logo,
            'img_team' => $data_about->img_team,
            'logo_grayscale' => $data_about->logo_grayscale,
            'logo_feature' => $data_about->logo_feature
        ];

        if ($request->hasFile('icon')) {
            if (Storage::exists($data_about->icon)) {
                Storage::delete($data_about->icon);
            }
            $path = $request->file('icon')->store('aboutus');
            $upload['icon'] = $path;
        }

        if ($request->hasFile('logo')) {

            if (Storage::exists($data_about->logo)) {
                Storage::delete($data_about->logo);
            }
            $path = $request->file('logo')->store('aboutus');
            $upload['logo'] = $path;
        }

        if ($request->hasFile('img_team')) {

            if (Storage::exists($data_about->img_team)) {
                Storage::delete($data_about->img_team);
            }
            $path = $request->file('img_team')->store('aboutus');
            $upload['img_team'] = $path;
        }

        if ($request->hasFile('logo_grayscale')) {
            if (Storage::exists($data_about->logo_grayscale)) {
                Storage::delete($data_about->logo_grayscale);
            }
            $path = $request->file('logo_grayscale')->store('aboutus');
            $upload['logo_grayscale'] = $path;
        }

        if ($request->hasFile('logo_feature')) {

            if (Storage::exists($data_about->logo_feature)) {
                Storage::delete($data_about->logo_feature);
            }
            $path = $request->file('logo_feature')->store('aboutus');
            $upload['logo_feature'] = $path;
        }


        if ($data_about->update($request->except('icon', 'logo', 'img_team', 'logo_grayscale','logo_feature') + $upload)) {
            return redirect()->route('admin.about.index')->with(['status' => 'success', 'message' => 'Why Us updated successfully']);
        } else {
            return redirect()->route('admin.about.index')->with(['status' => 'danger', 'message' => 'Update Failed, Contact Developer']);
        }

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
}
