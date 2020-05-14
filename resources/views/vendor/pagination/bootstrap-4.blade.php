@if ($paginator->hasPages())
    <nav>
        <ul class="pagination justify-content-center">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item px-2 disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link px-3 rounded border-0 shadow-sm" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
                </li>
            @else
                <li class="page-item px-2">
                    <a class="page-link px-3 rounded border-0 shadow-sm" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"><i class="fas fa-chevron-left"></i></a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item px-2 disabled" aria-disabled="true"><span class="page-link px-3 rounded border-0 shadow-sm">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item px-2 active" aria-current="page"><span class="page-link px-3 rounded border-0 shadow-sm">{{ $page }}</span></li>
                        @else
                            <li class="page-item px-2"><a class="page-link px-3 rounded border-0 shadow-sm" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item px-2">
                    <a class="page-link px-3 rounded border-0 shadow-sm" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"><i class="fas fa-chevron-right"></i></a>
                </li>
            @else
                <li class="page-item px-2 disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link px-3 rounded border-0 shadow-sm" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                </li>
            @endif
        </ul>
    </nav>
@endif
