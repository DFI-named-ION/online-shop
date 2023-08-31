@if ($paginator->hasPages())
    <div class="wrap-pagination-info">
        <ul class="page-numbers">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li><span class="page-number-item disabled">Prev</span></li>
            @else
                <li><a class="page-number-item" href="{{ $paginator->previousPageUrl() }}" rel="prev">Prev</a></li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li><span class="page-number-item disabled">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li><span class="page-number-item current">{{ $page }}</span></li>
                        @else
                            <li><a class="page-number-item" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li><a class="page-number-item next-link" href="{{ $paginator->nextPageUrl() }}" rel="next">Next</a></li>
            @else
                <li><span class="page-number-item disabled next-link">Next</span></li>
            @endif
        </ul>
        <p class="result-count">Showing {{ $paginator->firstItem() }}-{{ $paginator->lastItem() }} of {{ $paginator->total() }} result</p>
    </div>
@endif
