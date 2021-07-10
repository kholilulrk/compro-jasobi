@extends('layouts.admin.master-admin')
@section('content')
@section('styles')
    <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" rel="stylesheet" />
@stop

<div id="ui-view">
    <div>
        {{-- @include('components.admin.css') --}}
        @section('breadcrumb')
        <li class="breadcrumb-item"><a href=" {{ route('admin.domestic.index') }} "> Domestic </a></li>
        <li class="breadcrumb-item">Edit</li>
        @endsection
        <div class="animated fadeIn">
            @if (session('sukses'))
            <div class="alert alert-dark" role="alert">
                {{ session('sukses') }}
            </div>
            @endif
            <div class="card">

                <form class="form-horizontal" action="{{ route('admin.domestic.update', $domestics->id) }}"
                    method="post" enctype="multipart/form-data">
                    {{ method_field('put') }}
                    {{ csrf_field() }}
                    <div class="card-header">
                        <i class="fa fa-edit"></i> Edit Domestic
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label class="col-form-label" for="title">Title</label>
                            <div class="controls">
                                <input class="form-control" id="title" size="16" type="text" name="title" placeholder="Website Title" value=" {{ $domestics->title }} " required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="short_description">Short Description</label>
                            <div class="controls">
                                <textarea class="form-control" id="short_description" name="short_description" cols="30" rows="10" placeholder="Short description about your domestic partners">{{ $domestics->short_description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="editor">Description</label>
                            <div class="controls">
                                <div id="editor"></div>
                                <input type="hidden" name="description">
                            </div>
                        </div>
                        <div class="form-group" id="url-video">
                            <label class="col-form-label" for="url">Url Video</label>
                            <div class="controls">
                                <input class="form-control" id="url" size="16" type="text" name="url"
                                    placeholder="Company Video Profile" value="{{ $domestics->url }}">
                                <span class="help-block">Please enter the full url, example
                                    ('https://www.youtube.com/watch?v=YbJOTdZBX1g')</span>
                            </div>
                        </div>
                        <div class="form-group" id="url-website">
                            <label class="col-form-label" for="url">Url Website</label>
                            <div class="controls">
                                <input class="form-control" id="url" size="16" type="text" name="url_website"
                                    placeholder="Company Video Profile" value="{{ $domestics->url_website }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="img-container">Image</label>
                            <div class="controls">
                                <img class="img-fluid" id="img-container" alt="Icon whyus" width="100" height="100"
                                    src="{{ asset($domestics->showImage()) }}" />
                                <input type="file"
                                    onchange="document.getElementById('img-container').src = window.URL.createObjectURL(this.files[0])"
                                    name="icon">
                            </div>
                        </div>
                        <div class="form-actions">
                            <button class="btn btn-primary" type="submit">Save changes</button>
                            <a href="{{ route('admin.domestic.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop

@section('scripts')
    <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
    <script>
        $("#date").datepicker({
            format: 'yyyy-mm-dd'
        });
        var toolbarOptions = [
            ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
            ['blockquote', 'code-block'],

            [{ 'header': 1 }, { 'header': 2 }],               // custom button values
            [{ 'list': 'ordered'}, { 'list': 'bullet' }],
            [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent

            [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
            [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

            [{ 'color': [] }],          // dropdown with defaults from theme
            [{ 'font': [] }],
            [{ 'align': [] }],

            ['image', 'clean']                                         // remove formatting button
        ];
        var quill = new Quill('#editor', {
            modules: {
                toolbar: toolbarOptions
            },
            placeholder: 'Description of the article',
            theme: 'snow'  // or 'bubble'
        });

        quill.root.innerHTML = '{!! $domestics->description !!}';

        var form = document.querySelector('form');
        form.onsubmit = function() {
            // Populate hidden form on submit
            var description = document.querySelector('input[name=description]');
            description.value = quill.root.innerHTML;
            return true;
        };

        function pilihType(that){
            var id          = $(that).val();
            if(id == 'video'){
                $('#url-image').hide();
                $('#url-video').show();
            }
            else if(id == 'image'){
                $('#url-video').hide();
                $('#url-image').show();
            }
            else{
                $('#url-image').hide();
                $('#url-video').hide();
            }
        }
    </script>
@stop
