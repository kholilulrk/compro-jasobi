<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\UserClient;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $user['user_data'] = UserClient::latest()->paginate(5);
        return view('pages.admin.dashboard.index', $user);
    }

    public function create(Request $request)
    {
        $data_siswa = array(
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'nama' => $request->nama,
            'email' => $request->email,
            'telp' => $request->telp,
            'alamat' => $request->alamat
        );
        UserClient::create($data_siswa);
        return redirect('/admin/dashboard')->with('sukses', 'Create User Success');
    }

    public function store_category(Request $request)
    {
        $nama = $request->nama;
        // return $request->nama; // Ambil data alamat dan masukkan ke variabel alamat   
        // $data = array();        
        $index = 0; // Set index array awal dengan 0    
        
        foreach($nama as $name){
                $model = new \App\ProductCat();
                $model->nama = $name;
                $model->parent = NULL;
                $model->save();    
        }// Panggil fungsi save_batch yang ada di model siswa (SiswaModel.php)        // Cek apakah query insert nya sukses atau gagal    
        return redirect('/admin/category')->with('sukses', 'Tambah Category Berhasil');  
    }

    public function edit(Request $request, $id)
    {
        $user_data['data_user'] = userClient::find($id);
        return view('pages.admin.dashboard.edit', $user_data);
    }

    public function update(Request $request, $id)
    {
        $user = userClient::find($id);
        $user->update($request->all());
        return redirect('/admin/dashboard')->with('sukses', 'Update User Success');
    }

    public function delete($id)
    {
        $user = \App\userClient::find($id);
        $user->delete();
        return redirect()->back()->with('sukses', 'Delete User Success');
    }

    public function show($id)
    {
        $data_user['data_user'] = userClient::find($id);
        return view('pages.admin.dashboard.show', $data_user);
    }
}
