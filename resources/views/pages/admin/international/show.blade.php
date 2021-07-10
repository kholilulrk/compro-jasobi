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
                    <i class="fa fa-edit"></i> Show international
                </div>
                <div class="card-body">
                    <div class="form-group" id="title">
                        <label class="col-form-label" for="title">Title</label>
                        <div class="controls">
                            <input class="form-control" id="title" size="16" type="text" name="title"
                                placeholder="Company Video Profile" value="{{ $internationals->title }}" readonly>
                        </div>
                    </div>
                    <div class="form-group" id="short_description">
                        <label class="col-form-label" for="short_description">Short Description</label>
                        <div class="controls">
                            <textarea readonly class="form-control" id="short_description" name="short_description"
                                cols="30" rows="5"
                                placeholder="Short description about your international partners">{{ $internationals->short_description }}</textarea>
                        </div>
                    </div>
                    <div class="form-group" id="description">
                        <label class="col-form-label" for="description">Description</label>
                        <div class="controls">
                            <textarea readonly class="form-control" id="short_description" name="short_description"
                                cols="30" rows="5"
                                placeholder="Short description about your international partners">{{ $internationals->description }}</textarea>
                        </div>
                    </div>
                    <div class="form-group" id="url-video">
                        <label class="col-form-label" for="url">Url Video</label>
                        <div class="controls">
                            <input class="form-control" id="url" size="16" type="text" name="url"
                                placeholder="Company Video Profile" value="{{ $internationals->url }}" readonly>
                        </div>
                    </div>
                    <div class="form-group" id="url_website">
                        <label class="col-form-label" for="url">Url Website</label>
                        <div class="controls">
                            <input class="form-control" id="url_website" size="16" type="text" name="url_website"
                                placeholder="Company Video Profile" value="{{ $internationals->url_website }}" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="img-container">Image</label>
                        <div class="controls">
                            <img class="img-fluid" id="img-container" alt="Icon whyus" width="100" height="100"
                                src="{{ asset($internationals->showImage()) }}" />
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href=" {{ route('admin.international.index') }} " type="submit" class="btn btn-success">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
