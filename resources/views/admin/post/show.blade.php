@extends('admin.layouts.app')

@section('header')
    <h1>
        Posts
        <small>Post list</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">List</li>
    </ol>
@endsection

@section('content')

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Table With Full Features</h3>
            <a class="btn btn-sm btn-primary pull-right" href="{{ route('post.create') }}">Create new post</a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>S.N°</th>
                    <th>Post Title</th>
                    <th>Post Subtitle</th>
                    <th>Slug</th>
                    <th>Created At</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $loop->index +1 }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->subtitle }}</td>
                        <td>{{ $post->slug }}</td>
                        <td>{{ $post->created_at }}</td>
                        <td><a href="{{ route('post.edit', $post) }}"><span class="glyphicon glyphicon-edit"></span></a>
                        </td>
                        <td>
                            <form id="delete-form-{{ $post->id }}" style="display: none"
                                  action="{{ route('post.destroy', $post) }}" method="post">
                                {{ csrf_field() }} {{ method_field('DELETE') }}

                            </form>
                            <a href=""
                               onclick="if (confirm('Are you sure, You want to delete this?')){
                                       event.preventDefault();
                                       document.getElementById('delete-form-{{ $post->id }}').submit();
                                       }
                                       else {
                                       event.preventDefault()
                                       }">
                                <span class="glyphicon glyphicon-trash"></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>S.N°</th>
                    <th>Post Title</th>
                    <th>Post Subtitle</th>
                    <th>Slug</th>
                    <th>Created At</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

@endsection

@push('styles')
    <!-- DataTables -->
    <link rel="stylesheet"
          href="{{ asset('adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endpush

@push('scripts')
    <!-- DataTables -->
    <script src="{{ asset('adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script>
        $(function () {
            $('#example1').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': true,
                'ordering': true,
                'info': true,
                'autoWidth': true
            })
        })
    </script>
@endpush



