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
                    <i class="fa fa-edit"></i> Show Why Us
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label for="vat">Title</label>
                            <input value=" {{ $why_us->title }} " name="nama" class="form-control" id="vat"
                                type="text" placeholder="Nama Lengkap" readonly>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label for="company">Description</label>
                            <input name="username" class="form-control" id="company" type="text" placeholder="Username"
                                value=" {{ $why_us->description }} " readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="img-container">Image</label>
                        <div class="controls">
                            <img class="img-fluid" id="img-container" alt="Icon whyus" width="100" height="100"
                                src="{{ asset($why_us->showImage()) }}" />
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href=" {{ route('admin.whyus.index') }} " type="submit" class="btn btn-success">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
