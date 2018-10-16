@if ($paginator->hasPages())
    <!-- Pagination -->
    <div class="text-center pagination">
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled" style="opacity: 0.7;">
                    <span class="previous-pagination"><i class="fa fa-angle-double-left"></i></span>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" class="previous-pagination">
                        <span><i class="fa fa-angle-double-left"></i></span>
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active"><span>{{ $page }}</span></li>
                        @elseif ($page == $paginator->currentPage() + 1 || $page == $paginator->lastPage() -1 || $page == $paginator->lastPage())
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @elseif ($page == $paginator->lastPage() - 2)
                            <li class="disabled"><span><i class="">&#8729;&#8729;</i></span></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" class="next-pagination">
                        <span><i class="fa fa-angle-double-right"></i></span>
                    </a>
                </li>
            @else
                <li class="disabled" style="opacity: 0.7;">
                    <span class="next-pagination"><i class="fa fa-angle-double-right"></i></span>
                </li>
            @endif
        </ul>
    </div>
    <!-- Pagination -->
@endif