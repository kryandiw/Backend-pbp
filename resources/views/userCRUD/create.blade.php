@extends('layouts.default')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create New User</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('User.index') }}">Back</a>
        </div>
    </div>
</div>

@if(count($errors) > 0)
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

{!! Form::open(array('route' => 'User.store', 'method'=>'POST')) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>User</strong>
            {!! Form::text('nama', null, array('placeholder'
            => 'Nama', 'class' => 'form-control')) !!}

            {!! Form::text('email', null, array('placeholder'
            => 'Email', 'class' => 'form-control')) !!}

            {!! Form::text('password', null, array('placeholder'
            => 'password', 'class' => 'form-control')) !!}

        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
{!! Form::close() !!}

@endsection