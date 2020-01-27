@extends('admin.layouts.app')

@section('header')
    <h1>
        Tags
        <small>Edit Tag</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Edit</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        {{-- @include('includes.messages')--}}
        <form action="{{ route('tag.update', $tag) }}" method="post">
            {{ csrf_field() }} {{ method_field('PUT') }}

            <div class="col-md-8">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name">Tag Title</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $tag->name }}"
                                   placeholder="Name">
                            @if ($errors->has('name'))
                                <span class="help-block" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
                            <label for="slug">Tag Slug</label>
                            <input type="text" class="form-control" id="slug" slug="slug" value="{{ $tag->slug }}"
                                   placeholder="Slug">
                            @if ($errors->has('slug'))
                                <span class="help-block" role="alert">
                                    <strong>{{ $errors->first('slug') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Update Tag</button>
                        <a href="{{ route('tag.index') }}" class="btn btn-warning">Back</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('styles')
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
@endpush

@push('scripts')
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ asset('adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
    <script>
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()
    </script>
@endpush

