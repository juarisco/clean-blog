@extends('frontend.app')

@section('bg-img' , asset('frontend/img/post-bg.jpg'))
@section('title' , $post->title)
@section('sub-heading' , $post->subtitle)

@section('content')

<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <small>Created at {{ $post->created_at->diffForHumans() }}</small>

                @foreach($post->categories as $category)
                <a href="{{ route('category', $category) }}">
                    <small class="float-right" style="margin-right: 20px">
                        {{ $category->name }}
                    </small>
                </a>
                @endforeach

                {!! htmlspecialchars_decode($post->body) !!}

                <h3>Comments</h3>
                @foreach($post->tags as $tag)
                <a href="{{ route('tag', $tag) }}">
                    <small class="float-left"
                        style="margin-right: 20px; border-radius: 5px; border: 1px solid gray; padding: 5px;">
                        {{ $tag->name }}
                    </small>
                </a>
                @endforeach

                <div id="disqus_thread"></div>
                @include('includes.disqus-script')

            </div>
        </div>
    </div>
</article>

<hr>

@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('frontend/css/prism.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('frontend/js/prism.js') }}"></script>
@endpush