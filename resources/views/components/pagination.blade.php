<nav aria-label="Pagination">
    <ul class="pagination">
        <li class="page-item {{ $paginator->onFirstPage() ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $paginator->previousPageUrl() }}"
                tabindex="{{ $paginator->onFirstPage() ? '-1' : '0' }}"
                aria-disabled="{{ $paginator->onFirstPage() ? 'true' : 'false' }}">
                Previous
            </a>
        </li>

        @php
            $totalPages = $paginator->lastPage();
            $currentPage = $paginator->currentPage();
            $range = 2;
        @endphp

        @for ($i = 1; $i <= $totalPages; $i++)
            @if ($i == 1 || $i == $totalPages || ($i >= $currentPage - $range && $i <= $currentPage + $range))
                <li class="page-item {{ $i == $currentPage ? 'active' : '' }}"
                    aria-current="{{ $i == $currentPage ? 'page' : '' }}">
                    <a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a>
                </li>
            @elseif ($i == 2 || $i == $totalPages - 1)
                <li class="page-item disabled"><span class="page-link">...</span></li>
            @endif
        @endfor

        <li class="page-item {{ !$paginator->hasMorePages() ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $paginator->nextPageUrl() }}"
                tabindex="{{ !$paginator->hasMorePages() ? '-1' : '0' }}"
                aria-disabled="{{ !$paginator->hasMorePages() ? 'true' : 'false' }}">
                Next
            </a>
        </li>
    </ul>
</nav>
