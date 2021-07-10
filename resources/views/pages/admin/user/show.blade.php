@extends('layouts.admin.master-admin')
@section('content')
<div id="ui-view">
    <div>
        {{-- @include('components.admin.css') --}}
        @section('breadcrumb')
        <li class="breadcrumb-item"><a href=" {{ route('admin.dashboard') }} "> UserClient </a></li>
        <li class="breadcrumb-item">Detail</li>
        @endsection
        <div class="animated fadeIn">
            @if (session('sukses'))
            <div class="alert alert-dark" role="alert">
                {{ session('sukses') }}
            </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-edit"></i> Edit User
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label for="vat">Nama</label>
                            <input value=" {{ $data_user->nama }} " name="nama" class="form-control" id="vat"
                                type="text" placeholder="Nama Lengkap" readonly>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="company">Username</label>
                            <input name="username" class="form-control" id="company" type="text" placeholder="Username"
                                value=" {{ $data_user->username }} " readonly>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label for="vat">Email</label>
                            <input value=" {{ $data_user->email }} " name="nama" class="form-control" id="vat"
                                type="text" placeholder="Email" readonly>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="company">No Telephone</label>
                            <input name="username" class="form-control" id="company" type="text" placeholder="Username"
                                value=" {{ $data_user->telp }} " readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="city">Alamat</label>
                        <textarea name="alamat" class="form-control" id="textarea-input" name="textarea-input" rows="9"
                            placeholder="Content.." readonly>{{ $data_user->alamat }} </textarea>
                    </div>
                </div>
                <div class="card-footer">
                    <a href=" {{ route('admin.dashboard') }} " type="submit" class="btn btn-success">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
