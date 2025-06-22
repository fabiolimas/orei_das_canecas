@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <!-- Imagem do Produto -->
        <div class="col-md-6">
            <div class="border rounded shadow-sm p-3 bg-white">
                <img src="{{ asset('assets/images/default.svg') }}" class="card-img-top rounded-top-4" alt="{{ $produto->nome }}">
                {{-- <img src="{{ asset('storage/' . $produto->imagem) }}" alt="{{ $produto->nome }}" class="img-fluid w-100"> --}}
            </div>
        </div>

        <!-- Detalhes do Produto -->
        <div class="col-md-6">
            <h1 class="fw-bold mb-3">{{ $produto->nome }}</h1>

            <p class="text-muted">Categoria: <span class="text-dark fw-semibold">{{ $produto->categoria->nome ?? 'Geral' }}</span></p>

            <h3 class="text-danger fw-bold mb-4">R$ {{ number_format($produto->preco, 2, ',', '.') }}</h3>

            <p class="mb-4">{{ $produto->descricao }}</p>

            <!-- Quantidade e Botão -->
            <form action="{{ route('carrinho.adicionar', $produto->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="quantidade" class="form-label">Quantidade</label>
                    <input type="number" id="quantidade" name="quantidade" value="1" min="1" class="form-control w-25" required>
                </div>

                <button type="submit" class="btn btn-danger btn-lg mt-3">
                    <i class="bi bi-cart-plus"></i> Adicionar ao Carrinho
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
