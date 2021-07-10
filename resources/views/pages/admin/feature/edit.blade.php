@extends('layouts.admin.master-admin')
@section('content')
<div id="ui-view">
    <div>
        {{-- @include('components.admin.css') --}}
        @section('breadcrumb')
        <li class="breadcrumb-item"><a href=" {{ route('admin.dashboard') }} "> Feature </a></li>
        <li class="breadcrumb-item">Edit</li>
        @endsection
        <div class="animated fadeIn">
            @if (session('sukses'))
            <div class="alert alert-dark" role="alert">
                {{ session('sukses') }}
            </div>
            @endif
            <div class="card">
                <form action=" {{ route('admin.feature.update', $feature->id) }} " method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="card-header">
                        <i class="fa fa-edit"></i> Edit User
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="company">Title</label>
                            <input name="title" class="form-control" id="company" type="text"
                                placeholder="Enter your company name" value=" {{ $feature->title }} ">
                        </div>
                        <div class="form-group">
                            <label for="vat">Description</label>
                            <input value=" {{ $feature->description }} " name="description" class="form-control" id="vat"
                                type="text" placeholder="PL1234567890">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="img-container">Image</label>
                            <div class="controls">
                                <img class="img-fluid" id="img-container" alt="Icon Feature" width="100" height="100"
                                    src="{{ asset($feature->showImage()) }}" />
                                <input type="file"
                                    onchange="document.getElementById('img-container').src = window.URL.createObjectURL(this.files[0])"
                                    name="icon">
                            </div>
                        </div>
                        <div class="form-actions">
                            <button class="btn btn-primary" type="submit">Save changes</button>
                            <a href="{{ route('admin.feature.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
