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
                            <div class="col-sm-6 col-md-2">
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
                                <table class="table table-striped table-bordered datatable dataTable no-footer"
                                    id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info"
                                    style="border-collapse: collapse !important">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1" style="width: 45px;"
                                                aria-label="Actions: activate to sort column ascending">
                                                No
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1" style="width: 185.6px;"
                                                aria-label="Actions: activate to sort column ascending">
                                                Images
                                            </th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1" style="width: 214.367px;" aria-sort="ascending"
                                                aria-label="Username: activate to sort column descending">
                                                Nama Lengkap</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1" style="width: 77.7px;"
                                                aria-label="Role: activate to sort column ascending">
                                                Profesi</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1" style="width: 77.7px;"
                                                aria-label="Role: activate to sort column ascending">
                                                No Telp</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1" style="width: 87.3833px;"
                                                aria-label="Status: activate to sort column ascending">
                                                Email</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1" style="width: 87.3833px;"
                                                aria-label="Status: activate to sort column ascending">
                                                Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data_team as $key => $team)
                                        <tr role="row" class="odd">
                                            <td> {{ $key+1 }} </td>
                                            <td>
                                                <div class="thumbnail">
                                                    <img class="img-thumbnail" src="{{ asset($team->showImage()) }}"
                                                        alt="">
                                                </div>
                                                <span class="text-muted">Publish : {{ $team->created_at }}</span>
                                            </td>
                                            <td>{{ $team->nama_lengkap }}</td>
                                            <td>{{ $team->profesi }}</td>
                                            <td>{{ $team->no_telp }}</td>
                                            <td>{{ $team->email }}</td>
                                            <td>
                                                <form action=" {{route('admin.team.destroy', $team->id)}} "
                                                    method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <a href=" {{ route('admin.team.show', $team->id) }} "
                                                        class="btn btn-success">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                    <a href=" {{ route('admin.team.edit', $team->id) }} "
                                                        class="btn btn-warning">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <button class="btn btn-danger" type="submit"
                                                        onclick=" return confirm('Yakin Data Akan Dihapus ?')">
                                                        <i class="fa fa-trash-o"></i>
                                                    </button>
                                                    </a>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col">
                                {{ $data_team->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="Modal-tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        @if ($errors->any())
        @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">{{ $error }}</div>
        @endforeach
        @endif
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action=" {{route('admin.team.store')}} " method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lengkap</label>
                        <input name="nama_lengkap" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Profesi</label>
                        <input name="profesi" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">No Telp</label>
                        <input name="no_telp" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input name="email" type="email" class="form-control">
                    </div>
                    {{-- <div class="form-group">
                        <label for="exampleInputEmail1">Images</label>
                        <input name="url" type="file" value="">
                    </div> --}}
                    <div class="form-group">
                        <label class="col-form-label" for="img-container">Images</label>
                        <div class="controls">
                            <img class="img-fluid" id="img-container" alt="Icon whyus" width="100" height="100"
                                src="{{ asset('assets/admin/img/default.png') }}" />
                            <input type="file"
                                onchange="document.getElementById('img-container').src = window.URL.createObjectURL(this.files[0])"
                                name="img" required>
                        </div>
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
