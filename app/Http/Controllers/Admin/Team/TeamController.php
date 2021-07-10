<?php

namespace App\Http\Controllers\Admin\Team;

use App\Http\Controllers\Controller;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data_team'] = Team::latest()->paginate(5);
        return view('pages.admin.Teams.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.team.index');
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
            'nama_lengkap' => 'required|max:100',
            'profesi' => 'required',
            'no_telp' => 'required|max:100',
            'email' => 'required|unique:teams,email',
            'img' => 'required|image'
        ]);

        $path = $request->file('img')->store('teams');

        $check = Team::create([
            'nama_lengkap'  => $request->nama_lengkap,
            'profesi'       => $request->profesi,
            'no_telp'       => $request->no_telp,
            'email'         => $request->email,
            'img'           => $path
        ]);

        if ($check) {
            return redirect()->route('admin.team.index')->with(['status' => 'success', 'message' => 'Create Team Successfully']);
        }
            return redirect()->route('admin.team.index')->with(['status' => 'danger', 'message' => 'Save Failed, Contact Developer']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['team'] = Team::find($id);
        return view('pages.admin.Teams.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_team['team'] = Team::find($id);
        return view('pages.admin.Teams.edit', $data_team);
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
        $team  = Team::find($id);

        if ($request->file('img')) {
            $file = $request->file('img');
            $path = $file->store("teams");

            if (@$team->img && Storage::exists($team->img)) {
                Storage::delete($team->img);
            }
        }

        $team->fill([
            'nama_lengkap'  => $request->nama_lengkap,
            'profesi'       => $request->profesi,
            'no_telp'       => $request->no_telp,
            'email'         => $request->email,
            'img'         => ($request->file('img') ? $path : ($team->img != null ? $team->img : null))
        ])->save();

        return redirect()->route('admin.team.index')->with(['status' => 'success', 'message' => 'Update Team Successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::findOrFail($id);

        if (@$team->icon && Storage::exists($team->img)) {
            Storage::delete($team->img);
        }

        $team->delete();

        return redirect()->route('admin.team.index')->with(['status' => 'success', 'message' => 'Team Deleted Successfully']);

    }
}
