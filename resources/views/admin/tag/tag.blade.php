@extends('admin.layouts.app')

@section('header')
    <h1>
        Tags
        <small>Create tag</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Create</li>
    </ol>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">

                <div class="box-body">
                    {{-- @include('includes.messages')--}}
                    <form action="{{ route('tag.store') }}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name">Tag Title</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Tag title..." value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                <span class="help-block" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
                            <label for="slug">Tag Slug</label>
                            <input type="text" name="slug" id="slug" class="form-control" placeholder="Tag slug..." value="{{ old('slug') }}">
                            @if ($errors->has('slug'))
                                <span class="help-block" role="alert">
                                    <strong>{{ $errors->first('slug') }}</strong>
                                </span>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('tag.index') }}" class="btn btn-warning">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection



