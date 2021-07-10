@extends('layouts.admin.master-admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-edit"></i>Inbox</div>
            <div class="card-body">
                @if (Session::has('status'))
                    <div class="alert alert-{{ session('status') }}" role="alert">{{ session('message') }}</div>
                @endif
                @if ($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">{{ $error }}</div>
                    @endforeach
                @endif
                <form class="form-horizontal" action="{{ route('admin.inbox.update', $inboxes->id) }}" method="post">
                    {{ method_field('put') }}
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-form-label" for="name">Name</label>
                        <div class="controls">
                            <input class="form-control" id="name" size="16" type="text" name="name" value="{{ $inboxes->name }}" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="phone">Phone</label>
                        <div class="controls">
                            <input class="form-control" id="phone" size="16" type="text" name="phone" value="{{ $inboxes->phone }}" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="email">Email</label>
                        <div class="controls">
                            <input class="form-control" id="email" size="16" type="email" name="email" value="{{ $inboxes->email }}" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="desc">Description</label>
                        <div class="controls">
                            <textarea class="form-control" id="desc" name="message" cols="30" rows="10" readonly>{{ $inboxes->message }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="respond">Respond</label>
                        <div class="controls">
                            <textarea class="form-control" id="respond" name="respond" cols="30" rows="10" placeholder="What is your respond" required>{{ $inboxes->respond }}</textarea>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button class="btn btn-primary" type="submit">Send Reply</button>
                        <a href="{{ route('admin.inbox.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.col-->
</div>
@stop