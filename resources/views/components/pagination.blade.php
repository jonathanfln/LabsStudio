@if ($paginator->hasPages())
    <ul class="page-pagination" role="navigation">
        {{-- Previous Page Link
        @if ($paginator->onFirstPage())
            <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                <span aria-hidden="true">&lsaquo;</span>
            </li>
        @else
            <li>
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
            </li>
        @endif --}}

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            {{-- @if (is_string($element))
                <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
            @endif --}}

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a class="active" aria-current="page"><span>{{$page<10?'0':''}}{{ $page }}.</span></a>
                    @else
                        <a href="{{ $url }}">{{$page<10?'0':''}}{{ $page }}.</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link
        @if ($paginator->hasMorePages())
            <li>
                <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
            </li>
        @else
            <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                <span aria-hidden="true">&rsaquo;</span>
            </li>
        @endif --}}
    </ul>
@endif
