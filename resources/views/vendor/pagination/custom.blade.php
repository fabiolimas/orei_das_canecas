@if ($paginator->hasPages())
    <div class="d-flex flex-column align-items-center gap-2 mt-5">

        <!-- Contador -->
        <div class="small text-muted rounded-pill px-3 py-1 border"
             style="font-weight: 500;">
            Mostrando {{ $paginator->firstItem() }} - {{ $paginator->lastItem() }} de {{ $paginator->total() }} produtos
        </div>

        <!-- Paginação -->
        <nav>
            <ul class="pagination justify-content-center mb-0">

                {{-- Botão anterior --}}
                @if ($paginator->onFirstPage())
                    <li class="page-item disabled"><span class="page-link">‹ Anterior</span></li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">‹ Anterior</a>
                    </li>
                @endif

                {{-- Números de página --}}
                @foreach ($elements as $element)
                    @if (is_string($element))
                        <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
                    @endif

                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="page-item active">
                                    <span class="page-link bg-danger border-danger text-white rounded-circle" style="width: 38px; height: 38px; display: flex; align-items: center; justify-content: center;">
                                        {{ $page }}
                                    </span>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link rounded-circle" href="{{ $url }}" style="width: 38px; height: 38px; display: flex; align-items: center; justify-content: center;">
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
                        <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">Próxima ›</a>
                    </li>
                @else
                    <li class="page-item disabled"><span class="page-link">Próxima ›</span></li>
                @endif

            </ul>
        </nav>
    </div>
@endif
