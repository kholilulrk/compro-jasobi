@extends('layouts.admin.master-admin')
@section('content')
<div id="ui-view">
    <div>
        {{-- @include('components.admin.css') --}}
        @section('breadcrumb')
        <li class="breadcrumb-item">Why Us</li>
        {{-- <li class="breadcrumb-item"></li> --}}
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
                <i class="fa fa-edit"></i> Why Us
                <div class="pull-right">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#Modal-tambah">
                        <i class="icon-plus"></i> Create Whyus</a>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div id="DataTables_Table_0_wrapper" class="table-responsive dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="row">
                        <div class="col-sm-6 col-md-2">
                            <div class="dataTables_length" id\="DataTables_Table_0_length">
                                <label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"
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
                                <label>Search:<input type="search" class="form-control form-control-sm" placeholder=""
                                        aria-controls="DataTables_Table_0"></label></div>
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
                                        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1" style="width: 214.367px;" aria-sort="ascending"
                                            aria-label="Username: activate to sort column descending">
                                            Title</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" style="width: 77.7px;"
                                            aria-label="Role: activate to sort column ascending">
                                            Description</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" style="width: 185.6px;"
                                            aria-label="Actions: activate to sort column ascending">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($why_us as $key => $whyus)
                                    <tr role="row" class="odd">
                                        <td> {{ $key+1 }} </td>
                                        <td>
                                            <div class="thumbnail">
                                                <img class="img-thumbnail" src="{{ asset($whyus->showImage()) }}"
                                                    alt="">
                                            </div>
                                            <span class="text-muted">Publish : {{ $whyus->created_at }}</span>
                                        </td>
                                        <td class="sorting_1"> <b>{{ $whyus->title }}</b> </td>
                                        <td>{{ $whyus->description }}</td>
                                        <td>
                                            <form action=" {{ route('admin.whyus.update', $whyus->id) }} "
                                                method="post">
                                                @csrf
                                                @method('delete')
                                                <a href=" {{ route('admin.whyus.show', $whyus->id) }} "
                                                    class="btn btn-success">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a href=" {{ route('admin.whyus.edit', $whyus->id) }} "
                                                    class="btn btn-warning">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                {{-- <button class="btn btn-danger"
                                                    onclick=" return confirm('Yakin Data Akan Dihapus ?')">
                                                    <i class="fa fa-trash-o"></i>
                                                </button> --}}

                                                <form action="{{ route('admin.whyus.destroy', $whyus->id) }}"
                                                    method="post">
                                                    {{ csrf_field() }}
                                                    {{ method_field('delete') }}
                                                    <button class="btn btn-danger"
                                                        onclick=" return confirm('Yakin Data Akan Dihapus ?')">
                                                        <i class="fa fa-trash-o"></i>
                                                    </button>
                                                </form>
                                            </form>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="col">
                            {{ $why_us->links() }}
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
                <h5 class="modal-title" id="exampleModalLabel">Create Why US</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action=" {{ route('admin.whyus.store') }} " method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    {{-- @method('get') --}}
                    @csrf
                    <div class="form-group">
                        <label for="">Title</label>
                        <input name="title" type="text" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">description</label>
                        <textarea name="description" class="form-control" id="textarea-input" name="textarea-input"
                            rows="9" placeholder="Content.."></textarea>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="img-container">Icon</label>
                        <div class="controls">
                            <img class="img-fluid" id="img-container" alt="Icon whyus" width="100" height="100"
                                src="{{ asset('assets/admin/img/default.png') }}" />
                            <input type="file"
                                onchange="document.getElementById('img-container').src = window.URL.createObjectURL(this.files[0])"
                                name="icon" required>
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
