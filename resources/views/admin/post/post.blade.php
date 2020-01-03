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
        <form action="{{ route('post.store') }}" method="post">
            {{ csrf_field() }}

            <div class="col-md-8">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Post Title</label>
                            <input type="text" class="form-control" id="title" name="title"
                                   placeholder="Title">
                        </div>
                        <div class="form-group">
                            <label for="subtitle">Post Sub Title</label>
                            <input type="text" class="form-control" id="subtitle" name="subtitle"
                                   placeholder="Sub Title">
                        </div>
                        <div class="form-group">
                            <label for="slug">Post Slug</label>
                            <input type="text" class="form-control" id="slug" name="slug"
                                   placeholder="Slug">
                        </div>

                        <div class="form-group">
                            {{--<div class="flex-row">
                                <!-- tools box -->
                                <button type="button" class="btn btn-default btn-sm" data-widget="collapse"
                                        data-toggle="tooltip"
                                        title="Collapse">
                                    <i class="fa fa-minus"></i></button>

                                <!-- /. tools -->
                                <label for="body">Body</label>
                            </div>--}}
                            <label for="body">Body</label>
                            <textarea name="body" class="textarea" placeholder="Place some text here"
                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box box-primary">
                    <div class="box-body">
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
                        <button type="submit" class="btn btn-primary btn-block">Save Post</button>
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

