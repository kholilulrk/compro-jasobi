@extends('layouts.admin.master-admin')
@section('content')
<div id="ui-view">
    <div>
        {{-- @include('components.admin.css') --}}
        @section('breadcrumb')
            <li class="breadcrumb-item">UserClient</li>
            {{-- <li class="breadcrumb-item">Detail</li> --}}
        @endsection
        <div class="animated fadeIn">
            @if ($errors->any())
            @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">{{ $error }}</div>
            @endforeach
            @endif
            @if (Session::has('status'))
            <div class="alert alert-{{ session('status') }}" role="alert">{{ session('message') }}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-edit"></i> DataTables
                    <div class="pull-right">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#Modal-tambah">
                            Create User
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div id="DataTables_Table_0_wrapper" class="table-responsive dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-sm-8 col-md-10">
                                <div class="dataTables_length" id\="DataTables_Table_0_length">
                                    <label>Show <select name="DataTables_Table_0_length"
                                            aria-controls="DataTables_Table_0"
                                            class="custom-select custom-select-sm form-control form-control-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-2">
                                <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                    <label>Search:<input type="search" class="form-control form-control-sm"
                                            placeholder="" aria-controls="DataTables_Table_0"></label></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-striped table-bordered datatable no-footer"
                                    id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info"
                                    style="border-collapse: collapse !important">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1" style="width: 214.367px;" aria-sort="ascending"
                                                aria-label="Username: activate to sort column descending">
                                                Username</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1" style="width: 77.7px;"
                                                aria-label="Role: activate to sort column ascending">
                                                Nama</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1" style="width: 77.7px;"
                                                aria-label="Role: activate to sort column ascending">
                                                E-Mail</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1" style="width: 87.3833px;"
                                                aria-label="Status: activate to sort column ascending">
                                                Telephone</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1" style="width: 185.6px;"
                                                aria-label="Actions: activate to sort column ascending">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($user_data as $user)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">{{ $user->username }}</td>
                                            <td>{{ $user->nama }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->telp }}</td>
                                            <td>
                                                <a href=" {{ route('admin.show', $user->id) }} "
                                                    class="btn btn-success">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a href=" {{ route('admin.edit', $user->id) }} "
                                                    class="btn btn-warning">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a>
                                                    <a class="btn btn-danger"
                                                        onclick=" return confirm('Yakin Data Akan Dihapus ?')"
                                                        href="/admin/{{ $user->id }}/delete">
                                                        <i class="fa fa-trash-o"></i>
                                                    </a>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col">
                                {{ $user_data->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- =======================Modal Tambah user --}}

<div class="modal fade" id="Modal-tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/admin/create" method="POST">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input name="username" type="text" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">nama</label>
                        <input name="nama" type="text" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Telephone</label>
                        <input name="telp" type="text" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat</label>
                        <textarea name="alamat" class="form-control" id="textarea-input" name="textarea-input" rows="4"
                            placeholder="Content.."></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>


    @endsection
