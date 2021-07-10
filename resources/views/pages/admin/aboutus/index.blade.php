@extends('layouts.admin.master-admin')
@section('content')
@section('styles')
<link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css"
    rel="stylesheet" />
@stop

<div id="ui-view">
    <div>
        @section('breadcrumb')
        <li class="breadcrumb-item"><a href=" {{ route('admin.dashboard') }} "> About </a></li>
        {{-- <li class="breadcrumb-item">Edit</li> --}}
        @endsection
        <div class="animated fadeIn">
            @if (session('sukses'))
            <div class="alert alert-dark" role="alert">
                {{ session('sukses') }}
            </div>
            @endif
            <div class="card">
                <form action=" {{ route('admin.about.update', $about->id) }} " method="post"
                    enctype="multipart/form-data">
                    {{ method_field('put') }}
                    {{ csrf_field() }}
                    <div class="card-header">
                        <i class="fa fa-edit"></i>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="company">Website Title</label>
                            <input name="title" class="form-control" id="company" type="text"
                                placeholder="Enter your Title" value=" {{ $about->title }} ">
                        </div>
                        <div class="form-group">
                            <label for="company">Website Author</label>
                            <input name="author" class="form-control" id="company" type="text"
                                placeholder="Enter your Author" value=" {{ $about->author }} ">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="short_description">Short Description</label>
                            <div class="controls">
                                <textarea class="form-control" id="short_description" name="short_description" cols="30"
                                    rows="10"
                                    placeholder="Short description about your website">{{ $about->short_description }}</textarea>
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
                                    placeholder="Company Video Profile" value="{{ $about->url }}">
                                <span class="help-block">Please enter the full url, example
                                    ('https://www.youtube.com/watch?v=YbJOTdZBX1g')</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="icon">Website Icon</label>
                            <div class="controls">
                                <img class="img-fluid" id="icon" alt="Website Icon" width="100" height="100"
                                    src=" {{ asset($about->showIcon()) }} " />
                                <input type="file"
                                    onchange="document.getElementById('icon').src = window.URL.createObjectURL(this.files[0])"
                                    name="icon">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="logo">Website Logo</label>
                            <div class="controls">
                                <img class="img-fluid" id="logo" alt="Website Logo" width="100" height="100"
                                    src=" {{ asset($about->showLogo()) }} " />
                                <input type="file"
                                    onchange="document.getElementById('logo').src = window.URL.createObjectURL(this.files[0])"
                                    name="logo">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="logo_grayscale">Website Image Team</label>
                            <div class="controls">
                                <img class="img-fluid" id="img_team" alt="Website Logo" width="100" height="100"
                                    src=" {{ asset($about->showImageTeam()) }} " />
                                <input type="file"
                                    onchange="document.getElementById('img_team').src = window.URL.createObjectURL(this.files[0])"
                                    name="img_team">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="logo_grayscale">Website Logo Grayscale</label>
                            <div class="controls">
                                <img class="img-fluid" id="logo_grayscale" alt="Website Logo" width="100" height="100"
                                    src=" {{ asset($about->showLogoGrayscale()) }} " />
                                <input type="file"
                                    onchange="document.getElementById('logo_grayscale').src = window.URL.createObjectURL(this.files[0])"
                                    name="logo_grayscale">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="logo_feature">Website Logo Feature</label>
                            <div class="controls">
                                <img class="img-fluid" id="logo_feature" alt="Website Logo" width="100" height="100"
                                    src=" {{ asset($about->showLogoFeature()) }} " />
                                <input type="file"
                                    onchange="document.getElementById('logo_feature').src = window.URL.createObjectURL(this.files[0])"
                                    name="logo_feature">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Save changes</button>
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
        ['bold', 'italic', 'underline', 'strike'], // toggled buttons
        ['blockquote', 'code-block'],

        [{
            'header': 1
        }, {
            'header': 2
        }], // custom button values
        [{
            'list': 'ordered'
        }, {
            'list': 'bullet'
        }],
        [{
            'indent': '-1'
        }, {
            'indent': '+1'
        }], // outdent/indent

        [{
            'size': ['small', false, 'large', 'huge']
        }], // custom dropdown
        [{
            'header': [1, 2, 3, 4, 5, 6, false]
        }],

        [{
            'color': []
        }], // dropdown with defaults from theme
        [{
            'font': []
        }],
        [{
            'align': []
        }],

        ['image', 'clean'] // remove formatting button
    ];
    var quill = new Quill('#editor', {
        modules: {
            toolbar: toolbarOptions
        },
        placeholder: 'Description of the article',
        theme: 'snow' // or 'bubble'
    });

    quill.root.innerHTML = '{!! $about->description !!}';

    var form = document.querySelector('form');
    form.onsubmit = function () {
        // Populate hidden form on submit
        var description = document.querySelector('input[name=description]');
        description.value = quill.root.innerHTML;
        return true;
    };

    function pilihType(that) {
        var id = $(that).val();
        if (id == 'video') {
            $('#url-image').hide();
            $('#url-video').show();
        } else if (id == 'image') {
            $('#url-video').hide();
            $('#url-image').show();
        } else {
            $('#url-image').hide();
            $('#url-video').hide();
        }
    }

</script>
@endsection