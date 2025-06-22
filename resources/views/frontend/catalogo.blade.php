@extends('layouts.app')

@section('title', 'Catálogo de Produtos')

@section('content')
<div class="container mt-4">
    {{-- Banner Azul --}}
    <div class="bg-primary text-white p-4 rounded mb-4">
        <h4 class="fw-bold">Catálogo de Produtos</h4>
        <p class="mb-2">Descubra nossa coleção completa de canecas personalizadas com a melhor qualidade do mercado</p>
        <form class="d-flex" action="{{ route('produto.catalogo') }}" method="GET">
            <input type="text" name="search" class="form-control me-2" placeholder="Buscar produto...">
            <button class="btn btn-light">Buscar</button>
        </form>
    </div>

    {{-- Filtros + Produtos --}}
    <div class="row">
        {{-- Coluna Filtros --}}
        <div class="col-md-3">
            <div class="border rounded p-3 mb-4">
                <h5 class="fw-bold mb-3">Filtros</h5>

                <div class="mb-3">
                    <strong>Categorias</strong>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="categoria1">
                        <label class="form-check-label" for="categoria1">Todas</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="categoria2">
                        <label class="form-check-label" for="categoria2">Personalizadas</label>
                    </div>
                </div>

                <div class="mb-3">
                    <strong>Faixa de Preço</strong>
                    <input type="range" class="form-range" min="0" max="200" id="precoRange">
                    <div class="d-flex justify-content-between">
                        <span>R$0</span>
                        <span>R$200</span>
                    </div>
                </div>

                <div class="mb-3">
                    <strong>Material</strong><br>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="material" id="m1">
                        <label class="form-check-label" for="m1">Cerâmica</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="material" id="m2">
                        <label class="form-check-label" for="m2">Vidro</label>
                    </div>
                </div>

                <div class="mb-3">
                    <strong>Cor</strong><br>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="cor" id="cor1">
                        <label class="form-check-label" for="cor1">Branca</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="cor" id="cor2">
                        <label class="form-check-label" for="cor2">Preta</label>
                    </div>
                </div>

                <div class="mb-3">
                    <strong>Filtros Adicionais</strong><br>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="desconto">
                        <label class="form-check-label" for="desconto">Apenas com desconto</label>
                    </div>
                </div>

                <button class="btn btn-warning w-100 mt-3">Aplicar Filtros</button>
            </div>
        </div>

        {{-- Coluna Produtos --}}
        <div class="col-md-9">
            <div class="d-flex justify-content-between mb-3">
                <div><strong>0 produtos encontrados</strong></div>
                <div>
                    <label for="ordenar" class="me-2">Ordenar:</label>
                    <select class="form-select form-select-sm d-inline-block w-auto" id="ordenar">
                        <option>Mais vendidos</option>
                        <option>Novidades</option>
                        <option>Menor preço</option>
                        <option>Maior preço</option>
                    </select>
                </div>
            </div>

            <div class="border rounded p-5 text-center text-muted">
                <i class="bi bi-search fs-1"></i>
                <p class="mt-3">Nenhum produto encontrado com os filtros aplicados.</p>
                <a href="#" class="btn btn-outline-primary">Limpar todos os filtros</a>
            </div>

            {{-- Benefícios abaixo --}}
            <div class="row mt-5 text-center">
                <div class="col-md-4">
                    <i class="bi bi-truck fs-2 text-primary"></i>
                    <p class="mt-2">Entrega para todo Brasil</p>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-shield-check fs-2 text-success"></i>
                    <p class="mt-2">Garantia de Satisfação</p>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-credit-card fs-2 text-warning"></i>
                    <p class="mt-2">Pagamento Seguro</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
