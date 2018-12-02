@if ($paginator->hasPages())
    <div class="dwqa-pagination">
        {{-- Previous Page Link --}}
        @if (!$paginator->onFirstPage())
            <a class="dwqa-next dwqa-page-numbers" href="{{ $paginator->previousPageUrl() }}"><< Prev</a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span class="dwqa-page-numbers dwqa-dots">{{ $element }}</span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a class="dwqa-page-numbers dwqa-current">{{ $page }}</a>
                    @else
                        <a  href="{{ $url }}" class="dwqa-page-numbers" href="#">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="dwqa-next dwqa-page-numbers" href="{{ $paginator->nextPageUrl() }}">Next >></a>
        @endif
    </div>
@endif
