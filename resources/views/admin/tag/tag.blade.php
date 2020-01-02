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

                    <form action="" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name">Tag Title</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Tag title..." value="{{ old('name') }}">
                        </div>

                        <div class="form-group">
                            <label for="slug">Tag Slug</label>
                            <input type="text" name="slug" id="slug" class="form-control" placeholder="Tag slug..." value="{{ old('slug') }}">
                        </div>

                        <button class="btn btn-primary btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection



