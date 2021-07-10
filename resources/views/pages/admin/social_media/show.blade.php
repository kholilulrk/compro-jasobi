@extends('layouts.admin.master-admin')
@section('content')
<div id="ui-view">
    <div>
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
                    <i class="fa fa-edit"></i> Show Social Media
                </div>
                <div class="card-body">
                    <div class="form-group" id="title">
                        <label class="col-form-label" for="title">Name</label>
                        <div class="controls">
                            <input class="form-control" id="title" size="16" type="text" name="name"
                                placeholder="Company Video Profile" value="{{ $social_media->name }}" readonly>
                        </div>
                    </div>
                    <div class="form-group" id="short_description">
                        <label class="col-form-label" for="short_description">Type</label>
                        <div class="controls">
                            <input class="form-control" id="short_description" size="16" type="text" name="short_description"
                                placeholder="Company Video Profile" value="{{ $social_media->type }}" readonly>
                        </div>
                    </div>
                    <div class="form-group" id="url-video">
                        <label class="col-form-label" for="url">Url</label>
                        <div class="controls">
                            <input class="form-control" id="url" size="16" type="text" name="url"
                                placeholder="Company Video Profile" value="{{ $social_media->url }}" readonly>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href=" {{ route('admin.social_media.index') }} " type="submit" class="btn btn-success">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
