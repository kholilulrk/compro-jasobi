@extends('layouts.admin.master-admin')
@section('content')
<div id="ui-view">
    <div>
        {{-- @include('components.admin.css') --}}
        @section('breadcrumb')
        <li class="breadcrumb-item"><a href=" {{ route('admin.team.index') }} "> Team </a></li>
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
                    <i class="fa fa-edit"></i> Detail Team
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="company">Nama Lengkap</label>
                        <input name="nama_lengkap" class="form-control" id="company" type="text"
                            placeholder="Enter your company name" value=" {{ $team->nama_lengkap }} " readonly>
                    </div>
                    <div class="form-group">
                        <label for="vat">Profesi</label>
                        <input value=" {{ $team->profesi }} " name="profesi" class="form-control" id="vat" type="text"
                            placeholder="PL1234567890" readonly>
                    </div>
                    <div class="form-group">
                        <label for="street">no telp</label>
                        <input value=" {{ $team->no_telp }} " name="no_telp" class="form-control" id="street"
                            type="email" placeholder="Enter street name" readonly>
                    </div>
                    <div class="form-group">
                        <label for="city">Email</label>
                        <input value=" {{ $team->email }} " name="email" class="form-control" id="city" type="email"
                            placeholder="Enter your city" readonly>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="img-container">Image</label>
                        <div class="controls">
                            <img class="img-fluid" id="img-container" alt="Icon whyus" width="100" height="100"
                                src="{{ asset($team->showImage()) }}" />
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href=" {{ route('admin.team.index') }} " class="btn btn-success">Back</a>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
