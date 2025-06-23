@if ($paginator->hasPages())
<style>
    .shadow-md, .shadow-none {
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}
    </style>
    <div class="flex flex-col items-center space-y-6">

        <!-- Contador -->
        <div class="small text-muted rounded-pill px-3 py-1 border shadow-md mb-3 "
             style="font-weight: 500; ">
            Mostrando {{ $paginator->firstItem() }} - {{ $paginator->lastItem() }} de {{ $paginator->total() }} produtos
        </div>

        <!-- Paginação -->
           {{-- Desktop Pagination --}}
        <ul class="pagination justify-content-center d-none d-md-flex">
            {{-- Anterior --}}
            <li class="page-item  {{ $paginator->onFirstPage() ? 'disabled' : '' }}">
                <a class="page-link " href="{{ $paginator->previousPageUrl() }}" aria-label="Anterior">Anterior</a>
            </li>

            {{-- Números --}}
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="page-item disabled"><span class="page-link  ms-1 me-1">{{ $element }}</span></li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        <li class="page-item {{ $page == $paginator->currentPage() ? 'active' : '' }}">
                            <a class="page-link ms-1 me-1" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endforeach
                @endif
            @endforeach

            {{-- Próxima --}}
            <li class="page-item  {{ !$paginator->hasMorePages() ? 'disabled' : '' }}">
                <a class="page-link " href="{{ $paginator->nextPageUrl() }}" aria-label="Próxima">Próxima</a>
            </li>
        </ul>

        {{-- Mobile Pagination --}}
        <div class="d-flex justify-content-center d-md-none gap-2">
            @if ($paginator->onFirstPage())
                <button class="btn btn-outline-secondary btn-sm" disabled>←</button>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="btn btn-outline-secondary btn-sm">←</a>
            @endif

            <span class="btn btn-danger btn-sm disabled">{{ $paginator->currentPage() }}</span>

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="btn btn-outline-secondary btn-sm">→</a>
            @else
                <button class="btn btn-outline-secondary btn-sm" disabled>→</button>
            @endif
        </div>
    </div>
@endif
