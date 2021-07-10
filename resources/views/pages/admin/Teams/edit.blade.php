@extends('layouts.admin.master-admin')
@section('content')
<div id="ui-view">
    <div>
        {{-- @include('components.admin.css') --}}
        @section('breadcrumb')
        <li class="breadcrumb-item"><a href=" {{ route('admin.dashboard') }} "> Team </a></li>
        <li class="breadcrumb-item">Edit</li>
        @endsection
        <div class="animated fadeIn">
            @if (session('sukses'))
            <div class="alert alert-dark" role="alert">
                {{ session('sukses') }}
            </div>
            @endif
            <div class="card">
                <form action=" {{ route('admin.team.update', $team->id) }} " method="post" enctype="multipart/form-data">
                    {{ method_field('put') }}
                    {{ csrf_field() }}

                    <div class="card-header">
                        <i class="fa fa-edit"></i> Edit User
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="company">Nama Lengkap</label>
                            <input name="nama_lengkap" class="form-control" id="company" type="text"
                                placeholder="Enter your company name" value=" {{ $team->nama_lengkap }} ">
                        </div>
                        <div class="form-group">
                            <label for="vat">Profesi</label>
                            <input value=" {{ $team->profesi }} " name="profesi" class="form-control" id="vat"
                                type="text" placeholder="Enter your Profesi">
                        </div>
                        <div class="form-group">
                            <label for="street">no telp</label>
                            <input value=" {{ $team->no_telp }} " name="no_telp" class="form-control" id="street"
                                type="text" placeholder="Enter no tlp">
                        </div>
                        <div class="form-group">
                            <label for="city">Email</label>
                            <input value=" {{ $team->email }} " name="email" class="form-control" id="city" type="email"
                                placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="img-container">Image</label>
                            <div class="controls">
                                <img class="img-fluid" id="img-container" alt="Icon whyus" width="100" height="100"
                                    src="{{ asset($team->showImage()) }}" />
                                <input type="file"
                                    onchange="document.getElementById('img-container').src = window.URL.createObjectURL(this.files[0])"
                                    name="img">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Save</button>
                        <a href="{{ route('admin.team.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
