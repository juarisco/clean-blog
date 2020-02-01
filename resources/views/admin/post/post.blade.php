@extends('admin.layouts.app')

@section('header')
<h1>
    Posts
    <small>Create post</small>
</h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
    <li class="active">Create</li>
</ol>
@endsection

@section('content')
<div class="row">
    {{--@include('includes.messages')--}}
    <form action="{{ route('post.store') }}" method="post">
        {{ csrf_field() }}

        <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-body">

                    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                        <label for="title">Post Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Title"
                            value="{{ old('title') }}">
                        @if ($errors->has('title'))
                        <span class="help-block" role="alert">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('subtitle') ? ' has-error' : '' }}">
                        <label for="subtitle">Post Sub Title</label>
                        <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Sub Title"
                            value="{{ old('subtitle') }}">
                        @if ($errors->has('subtitle'))
                        <span class="help-block" role="alert">
                            <strong>{{ $errors->first('subtitle') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
                        <label for="slug">Post Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug"
                            value="{{ old('slug') }}">
                        @if ($errors->has('slug'))
                        <span class="help-block" role="alert">
                            <strong>{{ $errors->first('slug') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                        <label for="body">Body</label>
                        <textarea name="body" id="editor" class="form-control" placeholder="Place some text here"
                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ old('body') }}</textarea>
                        @if ($errors->has('body'))
                        <span class="help-block" role="alert">
                            <strong>{{ $errors->first('body') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="form group">
                        <div class="form-group{{ $errors->has('tags') ? ' has-error' : '' }}">
                            <label>Select Tags</label>
                            <select class="form-control select2" name="tags[]" multiple="multiple"
                                data-placeholder="Select one or more tags" style="width: 100%;">
                                @foreach($tags as $tag)
                                {{-- <option value="{{ $tag->id }}">{{ $tag->name }}</option>--}}
                                <option {{ collect(old('tags'))->contains($tag->id) ? 'selected' : '' }}
                                    value="{{ $tag->id }}">{{ $tag->name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('tags'))
                            <span class="help-block" role="alert">
                                <strong>{{ $errors->first('tags') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form group">
                        <div class="form-group{{ $errors->has('categories') ? ' has-error' : '' }}">
                            <label>Select Categories</label>
                            <select class="form-control select2" name="categories[]" multiple="multiple"
                                data-placeholder="Select one or more categories" style="width: 100%;">
                                @foreach($categories as $category)
                                {{-- <option value="{{ $category->id }}">{{ $category->name }}</option>--}}
                                <option {{ collect(old('categories'))->contains($category->id) ? 'selected' : '' }}
                                    value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('categories'))
                            <span class="help-block" role="alert">
                                <strong>{{ $errors->first('categories') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="image">File input</label>
                        <input type="file" name="image" id="image">
                    </div>
                    <div class="form-group">
                        <label>
                            <input type="checkbox" name="status"> Publish
                        </label>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Save Post</button>
                    <a href="{{ route('post.index') }}" class="btn btn-warning">Back</a>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

@push('styles')
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('adminlte/bower_components/select2/dist/css/select2.min.css') }}">

<!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="{{ asset('adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
@endpush

@push('scripts')
<!-- Select2 -->
<script src="{{ asset('adminlte/bower_components/select2/dist/js/select2.full.min.js') }}"></script>

<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>

<!-- CK Editor -->
<script src="{{ asset('adminlte/bower_components/ckeditor/ckeditor.js') }}"></script>
{{-- <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script> --}}

<script>
    //Initialize Select2 Elements
    $('.select2').select2()

    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()

    // Replace the <textarea id="editor"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor');
    // CKEDITOR.config.height = 270;
</script>

@endpush