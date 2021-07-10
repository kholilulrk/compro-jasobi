@extends('layouts.admin.master-admin')
@section('content')
<div id="ui-view">
    <div>
        {{-- @include('components.admin.css') --}}
        @section('breadcrumb')
            <li class="breadcrumb-item"><a href=" {{ route('admin.dashboard') }} "> UserClient </a></li>
            <li class="breadcrumb-item">Edit</li>
        @endsection
        <div class="animated fadeIn">
            @if (session('sukses'))
            <div class="alert alert-dark" role="alert">
                {{ session('sukses') }}
            </div>
            @endif
            <div class="card">
                <form action=" {{ route('admin.update', $data_user->id) }} " method="post" >
                    @csrf
                    <div class="card-header">
                        <i class="fa fa-edit"></i> Edit User
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="company">Username</label>
                            <input name="username" class="form-control" id="company" type="text"
                                placeholder="Enter your company name" value=" {{ $data_user->username }} ">
                        </div>
                        <div class="form-group">
                            <label for="vat">Nama</label>
                            <input value=" {{ $data_user->nama }} " name="nama" class="form-control" id="vat"
                                type="text" placeholder="PL1234567890">
                        </div>
                        <div class="form-group">
                            <label for="street">Email</label>
                            <input value=" {{ $data_user->email }} " name="email" class="form-control" id="street"
                                type="email" placeholder="Enter street name">
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-8">
                                <label for="city">No Telephone</label>
                                <input value=" {{ $data_user->telp }} " name="telp" class="form-control" id="city"
                                    type="text" placeholder="Enter your city">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea name="alamat" class="form-control" id="textarea-input" name="textarea-input" rows="9"
                                placeholder="Content..">{{ $data_user->alamat }} </textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
