@extends('layouts.admin.master-admin')
@section('content')
<div id="ui-view">
    <div>
        @section('breadcrumb')
        <li class="breadcrumb-item">Domestic</li>
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
                    <i class="fa fa-edit"></i> Domestic
                    <div class="pull-right">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#Modal-tambah">
                            <i class="icon-plus"></i> Create Domestic</a>
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
                                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1" style="width: 214.367px;" aria-sort="ascending"
                                                aria-label="Username: activate to sort column descending">
                                                Url Video</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1" style="width: 77.7px;"
                                                aria-label="Role: activate to sort column ascending">
                                                Url Website</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1" style="width: 214.367px;" aria-sort="ascending"
                                                aria-label="Username: activate to sort column descending">
                                                Title</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1" style="width: 77.7px;"
                                                aria-label="Role: activate to sort column ascending">
                                                Short Description</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1" style="width: 77.7px;"
                                                aria-label="Role: activate to sort column ascending">
                                                Description</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1" style="width: 185.6px;"
                                                aria-label="Actions: activate to sort column ascending">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($domestics as $key => $domestic)
                                        <tr role="row" class="odd">
                                            <td> {{ $key+1 }} </td>
                                            <td>
                                                <div class="thumbnail">
                                                    <img class="img-thumbnail"
                                                        src="{{ asset($domestic->showImage()) }}" alt="">
                                                </div>
                                                <span class="text-muted">Publish :
                                                    {{ $domestic->created_at }}</span>
                                            </td>
                                            <td> {{ $domestic->url }} </td>
                                            <td> {{ $domestic->url_website }} </td>
                                            <td class="sorting_1"> <b>{{ $domestic->title }}</b> </td>
                                            <td>{{ $domestic->short_description }}</td>
                                            <td>{!! $domestic->description !!}</td>
                                            <td>
                                                <form
                                                    action=" {{ route('admin.domestic.update', $domestic->id) }} "
                                                    method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href=" {{ route('admin.domestic.show', $domestic->id) }} "
                                                        class="btn btn-success">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                    <a href=" {{ route('admin.domestic.edit', $domestic->id) }} "
                                                        class="btn btn-warning">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <form
                                                        action="{{ route('admin.domestic.destroy', $domestic->id) }}"
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
                                    </tbody>
                                </table>
                            </div>
                            <div class="col">
                                {{ $domestics->links() }}
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
                <h5 class="modal-title" id="exampleModalLabel">Create domestics</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action=" {{ route('admin.domestic.store') }} " method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    {{-- @method('get') --}}
                    @csrf
                    <div class="form-group">
                        <label for="">Title</label>
                        <input name="title" type="text" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Short Description</label>
                        <textarea name="short_description" class="form-control" id="textarea-input" name="description"
                            rows="9" placeholder="Content.."></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <textarea name="description" class="form-control" id="textarea-input" name="description"
                            rows="9" placeholder="Content.."></textarea>
                    </div>
                    <div class="form-group" id="url-video">
                        <label class="col-form-label" for="url">Url Video</label>
                        <div class="controls">
                            <input class="form-control" id="url" size="16" type="text" name="url"
                                placeholder="Company Video Profile">
                            <span class="help-block">Please enter the full url, example
                                ('https://www.youtube.com/watch?v=YbJOTdZBX1g')</span>
                        </div>
                    </div>
                    <div class="form-group" id="url_website">
                        <label class="col-form-label" for="url_website">Url Website</label>
                        <div class="controls">
                            <input class="form-control" id="url_website" size="16" type="text" name="url_website"
                                placeholder="Company Website Profile">
                            {{-- <span class="help-block">Please enter the full url, example
                                ('https://www.youtube.com/watch?v=YbJOTdZBX1g')</span> --}}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="img-container">Image</label>
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
