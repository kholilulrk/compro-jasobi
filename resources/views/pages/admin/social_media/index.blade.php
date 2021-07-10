@extends('layouts.admin.master-admin')
@section('content')
<div id="ui-view">
    <div>
        @section('breadcrumb')
        <li class="breadcrumb-item">Social Media</li>
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
                    <i class="fa fa-edit"></i> Social Media
                    <div class="pull-right">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#Modal-tambah">
                            <i class="icon-plus"></i> Create international</a>
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
                                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1" style="width: 45px;" aria-sort="ascending"
                                                aria-label="Username: activate to sort column descending">
                                                No</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1" style="width: 214.367px;" aria-sort="ascending"
                                                aria-label="Username: activate to sort column descending">
                                                Icon</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1" style="width: 77.7px;"
                                                aria-label="Role: activate to sort column ascending">
                                                Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1" style="width: 77.7px;"
                                                aria-label="Role: activate to sort column ascending">
                                                Url</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1" style="width: 185.6px;"
                                                aria-label="Actions: activate to sort column ascending">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($social_media as $key => $sosmed)
                                        <tr role="row" class="odd">
                                            <td>{{ $key+1 }}</td>
                                            <td>
                                                <span> <i class="icon-social-{{ $sosmed->type }}"
                                                        style="font-size: 50px;"></i> </span>
                                            </td>
                                            <td>
                                                <b>{{ $sosmed->name }}</b> <br>
                                            </td>
                                            <td>
                                                <span>Url : <a href="{{ $sosmed->url }}">{{ $sosmed->url }}</a></span>
                                                <br>
                                                <span class="text-muted">Publish : {{ $sosmed->created_at }}</span>
                                            </td>
                                            <td>
                                                <form action=" {{ route('admin.social_media.update', $sosmed->id) }} "
                                                    method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href=" {{ route('admin.social_media.show', $sosmed->id) }} "
                                                        class="btn btn-success">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                    <a href=" {{ route('admin.social_media.edit', $sosmed->id) }} "
                                                        class="btn btn-warning">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <form
                                                        action="{{ route('admin.social_media.destroy', $sosmed->id) }}"
                                                        method="post">
                                                        {{ csrf_field() }}
                                                        {{ method_field('delete') }}
                                                        <button class="btn btn-danger"
                                                            onclick=" return confirm('Yakin Data Akan Dihapus ?')">
                                                            <i class="fa fa-trash-o"></i>
                                                        </button>
                                                    </form>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @if ($social_media->isEmpty())
                                        <tr>
                                            <td colspan="5" class="text-center"> <b>Table Was Empty</b> </td>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                            <div class="col">
                                {{ $social_media->links() }}
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
                <h5 class="modal-title" id="exampleModalLabel">Create internationals</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action=" {{ route('admin.social_media.store') }} " method="POST">
                <div class="modal-body">
                    {{-- @method('get') --}}
                    @csrf
                    <div class="form-group">
                        <label class="col-form-label" for="name">Name</label>
                        <div class="controls">
                            <input class="form-control" id="name" size="16" type="text" name="name"
                                placeholder="Title of the image">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="type">Type</label>
                        <div class="controls">
                            <select class="form-control" id="type" name="type" required>
                                <option value="null">Please select the type</option>
                                @foreach ($types as $type)
                                <option value="{{ $type }}">{{ ucwords($type) }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="url">Url Social Media</label>
                        <div class="controls">
                            <input class="form-control" id="url" size="16" type="text" name="url"
                                placeholder="Url of the social media account">
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
