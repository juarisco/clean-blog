@extends('admin.layouts.app')

@section('header')
    <h1>
        Categories
        <small>Create category</small>
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
                    @include('includes.messages')

                    <form action="{{ route('category.store') }}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name">Category Title</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Category title..." value="{{ old('name') }}">
                        </div>

                        <div class="form-group">
                            <label for="slug">Category Slug</label>
                            <input type="text" name="slug" id="slug" class="form-control" placeholder="Category slug..." value="{{ old('slug') }}">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('category.index') }}" class="btn btn-warning">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection



