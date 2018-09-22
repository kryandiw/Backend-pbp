@extends('layouts.default')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Show User</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('User.index') }}">Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>User ID: </strong>
            {{ $users->id }}<br>
            <strong>User Name: </strong>
            {{ $users->nama_fakultas }}<br>
            <strong>User Created: </strong>
            {{ $users->created_at }}<br>
            <strong>User Updated: </strong>
            {{ $users->updated_at }}<br>
        </div>
    </div>
</div>

@endsection