<?php

namespace App\Http\Controllers\Admin\SocialMedia;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SocialMedia;
use Illuminate\Support\Facades\View;

class SocialMediaController extends Controller
{
    /**
     * @var SocialMedia $socialMedia
     */
    protected $socialMedia;

    /**
     * SocialMediaController constructor.
     */
    public function __construct()
    {
        $this->socialMedia = new SocialMedia();
        $data['types'] = ['facebook', 'instagram', 'google', 'twitter', 'linkedin'];
        View::share($data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['social_media'] = SocialMedia::latest()->paginate(10);
        return view('pages.admin.social_media.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.social_media.create');
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
            'name' => 'required|max:200',
            'type' => 'required',
            'url' => 'required|active_url'
        ]);

        if ($this->socialMedia->create($request->all())) {
            return redirect()->route('admin.social_media.index')->with(['status' => 'success', 'message' => 'Create Social Media Successfully']);
        }
        return redirect()->route('admin.social_media.create')->with(['status' => 'danger', 'message' => 'Save Failed, Contact Developer']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $social_media['social_media'] = SocialMedia::find($id);
        return view('pages.admin.social_media.show',$social_media);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['sosmed'] = SocialMedia::find($id);
        return view('pages.admin.social_media.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $social_media = SocialMedia::find($id);

        $request->validate([
            'name' => 'required|max:200',
            'type' => 'required',
            'url' => 'required|active_url'
        ]);

        $data = array(
            'name' => $request->name,
            'type' => $request->type,
            'url' => $request->url,
        );

        if ($social_media->update($data)) {
            return redirect()->route('admin.social_media.index')->with(['status' => 'success', 'message' => 'Social Media Update Successfully']);
        }
        return redirect()->route('admin.social_media.edit', $social_media->id)->with(['status' => 'danger', 'message' => 'Update Failed, Contact Developer']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param SocialMedia $social_media
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(SocialMedia $social_media)
    {
        if ($social_media->delete()) {
            return redirect()->route('admin.social_media.index')->with(['status' => 'success', 'message' => 'Social Media Delete Successfully']);
        }
        return redirect()->route('admin.social_media.index')->with(['status' => 'danger', 'message' => 'Delete Failed, Contact Developer']);
    }
}
