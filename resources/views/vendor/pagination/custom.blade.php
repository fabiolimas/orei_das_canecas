@if ($paginator->hasPages())
<style>
    .shadow-md, .shadow-none {
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}
    </style>
    <div class="d-flex flex-column align-items-center gap-2 mt-5">

        <!-- Contador -->
        <div class="small text-muted rounded-pill px-3 py-1 border shadow-md mb-3 "
             style="font-weight: 500; ">
            Mostrando {{ $paginator->firstItem() }} - {{ $paginator->lastItem() }} de {{ $paginator->total() }} produtos
        </div>

        <!-- Paginação -->
        <nav>
            <ul class="pagination justify-content-center mb-0">

                {{-- Botão anterior --}}
                @if ($paginator->onFirstPage())
                    <li class="page-item disabled "><span class="page-link justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 border bg-background hover:bg-accent h-9 flex items-center space-x-2 border-gray-200 hover:border-primary hover:text-primary rounded-xl px-4 py-2">‹ Anterior</span></li>
                @else
                    <li class="page-item">
                        <a class="page-link justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 border bg-background hover:bg-accent h-9 flex items-center space-x-2 border-gray-200 hover:border-primary hover:text-primary rounded-xl px-4 py-2" href="{{ $paginator->previousPageUrl() }}" rel="prev">‹ Anterior</a>
                    </li>
                @endif

                {{-- Números de página --}}
                @foreach ($elements as $element)
                    @if (is_string($element))
                        <li class="page-item disabled"><span class="page-link inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 border bg-background hover:bg-accent px-3 w-10 h-10 rounded-xl border-gray-200 hover:border-primary hover:text-primary">{{ $element }}</span></li>
                    @endif

                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="page-item active">
                                    <span class="page-link bg-danger border-danger text-white ms-1 me-1 inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 border bg-background hover:bg-accent px-3 w-10 h-10 rounded-xl border-gray-200 hover:border-primary hover:text-primary" style="width: 38px; height: 38px; display: flex; align-items: center; justify-content: center;">
                                        {{ $page }}
                                    </span>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link inline-flex ms-1 me-1 items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 border bg-background hover:bg-accent px-3 w-10 h-10 rounded-xl border-gray-200 hover:border-primary hover:text-primary" href="{{ $url }}" style="width: 38px; height: 38px; display: flex; align-items: center; justify-content: center;">
                                        {{ $page }}
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Botão próximo --}}
                @if ($paginator->hasMorePages())
                    <li class="page-item">
                        <a class="page-link justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 border bg-background hover:bg-accent h-9 flex items-center space-x-2 border-gray-200 hover:border-primary hover:text-primary rounded-xl px-4 py-2" href="{{ $paginator->nextPageUrl() }}" rel="next">Próxima ›</a>
                    </li>
                @else
                    <li class="page-item disabled"><span class="page-link justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 border bg-background hover:bg-accent h-9 flex items-center space-x-2 border-gray-200 hover:border-primary hover:text-primary rounded-xl px-4 py-2">Próxima ›</span></li>
                @endif

            </ul>
        </nav>
    </div>
@endif
