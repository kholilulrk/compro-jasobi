@extends('layouts.admin.master-admin')
@section('content')
<div id="ui-view">
    <div>
        @section('breadcrumb')
        <li class="breadcrumb-item">Social Media</li>
        @endsection
        <div class="animated fadeIn">
            @if ($errors->any())
            @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">{{ $error }}</div>
            @endforeach
            @endif
            @if (Session::has('status'))
            <div class="alert alert-{{ session('status') }}" role="alert">{{ session('message') }}</div>
            @endif

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i> Data Inbox
                        </div>
                        <div class="card-body">
                            <table class="table table-responsive-sm table-striped table-vertical-align">
                                <thead class="thead-dark">
                                <tr>
                                    <th style="width: 20px;">No</th>
                                    <th>Description</th>
                                    <th>Respond</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($inboxes as $key => $inbox)
                                    <tr class="{{ ($inbox->respond) ? '':'un-viewed' }}">
                                        <td>{{ $key+1 }}</td>
                                        <td>
                                            <b>Name : {{ $inbox->name }}</b> <br>
                                            <span>Phone : {{ $inbox->phone}}</span> <br>
                                            <span>Email : {{ $inbox->email }}</span> <br> <br>
                                            <span>Message : {{ $inbox->message }}</span> <br>
                                            <span class="text-muted">Publish : {{ $inbox->created_at }}</span>
        
                                        </td>
                                        <td>
                                            <span>{{ ($inbox->respond) ? $inbox->respond:'Not yet responded' }}</span>
                                        </td>
                                        <td>
                                            <!-- /btn-group-->
                                            <div class="btn-group">
                                                <button class="btn btn-warning dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                                <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 34px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                    <a class="dropdown-item" href="{{ route('admin.inbox.edit', $inbox->id) }}">Reply</a>
                                                    <form action="{{ route('admin.inbox.destroy', $inbox->id) }}" method="post">
                                                        {{ csrf_field() }}
                                                        {{ method_field('delete') }}
                                                        <button class="dropdown-item" onclick="return confirm('Yakin Data akan dihapus ?')">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- /btn-group-->
                                        </td>
                                    </tr>
                                @endforeach
                                @if ($inboxes->isEmpty())
                                    <tr>
                                        <td colspan="4" class="text-center"> <b>Table Was Empty</b> </td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                            {{ $inboxes->links() }}
                        </div>
                    </div>
                </div>
                <!-- /.col-->
            </div>

        </div>
    </div>
</div>

    @endsection
