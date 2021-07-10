@extends('layouts.admin.master-admin')
@section('content')
<div id="ui-view">
    <div>
        {{-- @include('components.admin.css') --}}
        @section('breadcrumb')
            <li class="breadcrumb-item"><a href=" {{ route('admin.whyus.index') }} "> Why Us </a></li>
            <li class="breadcrumb-item">Edit</li>
        @endsection
        <div class="animated fadeIn">
            @if (session('sukses'))
            <div class="alert alert-dark" role="alert">
                {{ session('sukses') }}
            </div>
            @endif
            <div class="card">

                <form class="form-horizontal" action="{{ route('admin.whyus.update', $why_us->id) }}" method="post"
                    enctype="multipart/form-data">
                    {{ method_field('put') }}
                    {{ csrf_field() }}

                {{-- <form action=" {{ route('admin.whyus.update', $why_us->id) }} " method="post" > --}}
                    {{-- @csrf --}}
                    <div class="card-header">
                        <i class="fa fa-edit"></i> Edit Why Us
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-sm-6">
                                <label for="vat">Title</label>
                                <input value=" {{ $why_us->title }} " name="title" class="form-control" id="vat"
                                    type="text" placeholder="Nama Lengkap">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-sm-6">
                                <label for="company">Description</label>
                                <input name="description" class="form-control" id="company" type="text" placeholder="Username"
                                    value=" {{ $why_us->description }} ">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="img-container">Image</label>
                            <div class="controls">
                                <img class="img-fluid" id="img-container" alt="Icon whyus" width="100" height="100"
                                    src="{{ asset($why_us->showImage()) }}" />
                                <input type="file"
                                    onchange="document.getElementById('img-container').src = window.URL.createObjectURL(this.files[0])"
                                    name="icon">
                            </div>
                        </div>
                        <div class="form-actions">
                            <button class="btn btn-primary" type="submit">Save changes</button>
                            <a href="{{ route('admin.whyus.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
