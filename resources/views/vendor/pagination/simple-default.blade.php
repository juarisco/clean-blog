@if ($paginator->hasPages())
    <div class="clearfix">
        <!-- Previous Page Link -->
        @if ($paginator->onFirstPage())
            <a class="disabled btn btn-primary float-left" style="display:none">&larr; Newer Posts</a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class=" btn btn-primary float-left" rel="prev">&larr; Newer Posts</a>
        @endif

    <!-- Next Page Link -->
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class=" btn btn-primary float-right" rel="next">Older
                Posts &rarr;</a>
        @else
            <a class="disabled btn btn-primary float-right" style="display:none">Older Posts &rarr;</a>
        @endif
    </div>
@endif


