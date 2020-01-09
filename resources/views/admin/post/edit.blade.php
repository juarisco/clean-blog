@extends('admin.layouts.app')

@section('header')
    <h1>
        Posts
        <small>Edit post</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Edit</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        @include('includes.messages')
        <form action="{{ route('post.update', $post) }}" method="post">
            {{ csrf_field() }} {{ method_field('PUT') }}

            <div class="col-md-8">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Post Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}"
                                   placeholder="Title">
                        </div>
                        <div class="form-group">
                            <label for="subtitle">Post Sub Title</label>
                            <input type="text" class="form-control" id="subtitle" name="subtitle"
                                   value="{{ $post->subtitle }}"
                                   placeholder="Sub Title">
                        </div>
                        <div class="form-group">
                            <label for="slug">Post Slug</label>
                            <input type="text" class="form-control" id="slug" name="slug" value="{{ $post->slug }}"
                                   placeholder="Slug">
                        </div>

                        <div class="form-group">
                            <label for="body">Body</label>
                            <textarea name="body" class="textarea" placeholder="Place some text here"
                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $post->body }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="form group">
                            <div class="form-group">
                                <label>Select Tags</label>
                                <select class="form-control select2"
                                        name="categories[]"
                                        multiple="multiple"
                                        data-placeholder="Select one or more tags"
                                        style="width: 100%;">
                                    @foreach($tags as $tag)
                                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form group">
                            <div class="form-group">
                                <label>Select Categories</label>
                                <select class="form-control select2"
                                        name="tags[]"
                                        multiple="multiple"
                                        data-placeholder="Select one or more categories"
                                        style="width: 100%;">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="image">File input</label>
                            <input type="file" name="image" id="image">
                        </div>
                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="status" @if($post->status == 1) checked @endif> Publish
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
    <script>
        //Initialize Select2 Elements
        $('.select2').select2()

        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()
    </script>
@endpush

