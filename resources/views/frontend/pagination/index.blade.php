@if ($paginator->hasPages())
    <div class="col-md-12">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <button class="disabled btn btn-default pagination-button"><span>&laquo;</span></button>
        @else
            <a  href="{{ $paginator->previousPageUrl() }}" rel="prev"><button class="btn btn-default pagination-button">&laquo;</button></a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <button  class="btn btn-default pagination-button disabled"><span>{{ $element }}</span></button>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <button class="btn btn-default pagination-button activepagination"><span>{{ $page }}</span></button>
                    @else
                        <a  href="{{ $url }}"><button class="btn btn-default pagination-button">{{ $page }}</button></a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a  href="{{ $paginator->nextPageUrl() }}" rel="next"><button class="btn btn-default pagination-button">&raquo;</button></a>
        @else
            <button class="btn btn-default pagination-button disabled"><span>&raquo;</span></button>
        @endif
    </div>
@endif
<!-- <div class="pager pt-30px">
    <nav aria-label="Page navigation example">
        <ul class="pagination generic-pagination pr-1">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true"><i class="la la-arrow-left"></i></span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true"><i class="la la-arrow-right"></i></span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </nav>
</div> -->