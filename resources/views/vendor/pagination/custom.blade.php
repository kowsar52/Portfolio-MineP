@if ($paginator->hasPages())
    <div class="col-lg-12 col-sm-12">
        <div class="pagination-area">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <a href="javascript:;" class="prev page-numbers disabled">
                    <i class="fas fa-angle-double-left"></i>
                </a>
            @else
                <a href=""{{ $paginator->previousPageUrl() }}" class="prev page-numbers">
                    <i class="fas fa-angle-double-left"></i>
                </a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span>
                    </li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span class="page-numbers current" aria-current="page">{{ $page }}</span>
                        @else
                            <a href="{{ $url }}" class="page-numbers">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach
            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="next page-numbers">
                    <i class="fas fa-angle-double-right"></i>
                </a>
            @else
                <a href="javascript:;" class="next page-numbers disabled">
                    <i class="fas fa-angle-double-right"></i>
                </a>
            @endif

        </div>
    </div>


@endif
