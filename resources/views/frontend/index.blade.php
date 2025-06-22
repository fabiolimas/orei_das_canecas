@extends('layouts.app')

@section('title', 'O Rei das Canecas - Personalize sua ideia!')

@section('content')

    <!-- Banner principal -->
    <section class="bg-light py-3">
       <div id="carouselBanner" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('assets/images/loja1/banners/ban1.jpg') }}" class="d-block w-100" alt="Banner 1">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('assets/images/loja1/banners/ban2.jpeg') }}" class="d-block w-100" alt="Banner 2">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('assets/images/loja1/banners/ban3.jpeg') }}" class="d-block w-100" alt="Banner 3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselBanner" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselBanner" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Próximo</span>
  </button>
</div>
    </section>

    <!-- Seção: Explore nossas categorias -->
<section class="py-5" style="background-color: #fdfdfd;">
    <div class="container text-center">

        <!-- Botão -->
        <a href="/categorias" class="btn btn-outline-danger px-4 py-2 rounded-pill fw-semibold mb-4"
           style="background: linear-gradient(to right, #ff8a00, #e52e71); color: white; border: none;">
            <i class="bi bi-stars me-2"></i> EXPLORE NOSSAS CATEGORIAS
        </a>

        <!-- Título -->
        <h2 class="fw-bold mb-3">
            Encontre Exatamente o que 
            <span style="background: linear-gradient(to right, #e52e71, #facc15); -webkit-background-clip: text; color: transparent;">
                Você Procura
            </span>
        </h2>
        <p class="text-muted mb-5">
            Descubra nossa seleção especializada de canecas personalizadas para cada ocasião
        </p>

        <!-- Ícones de categoria -->
        <div class="row justify-content-center g-4">
            <div class="col-6 col-sm-4 col-md-2">
                <div class="p-3 border rounded text-center shadow-sm">
                    <div class="fs-2 text-danger"><i class="bi bi-gift-fill"></i></div>
                    <p class="fw-semibold mt-2">Personalizadas</p>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-2">
                <div class="p-3 border rounded text-center shadow-sm">
                    <div class="fs-2 text-warning"><i class="bi bi-star-fill"></i></div>
                    <p class="fw-semibold mt-2">Temáticas</p>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-2">
                <div class="p-3 border rounded text-center shadow-sm">
                    <div class="fs-2 text-secondary"><i class="bi bi-bag-fill"></i></div>
                    <p class="fw-semibold mt-2">Corporativas</p>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-2">
                <div class="p-3 border rounded text-center shadow-sm">
                    <div class="fs-2 text-warning"><i class="bi bi-award-fill"></i></div>
                    <p class="fw-semibold mt-2">Porcelana</p>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-2">
                <div class="p-3 border rounded text-center shadow-sm">
                    <div class="fs-2 text-danger"><i class="bi bi-percent"></i></div>
                    <p class="fw-semibold mt-2">Ofertas</p>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-2">
                <div class="p-3 border rounded text-center shadow-sm">
                    <div class="fs-2 text-success"><i class="bi bi-stars"></i></div>
                    <p class="fw-semibold mt-2">Lançamentos</p>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- Seção: Ofertas Especiais -->
<section class="py-5" style="background: linear-gradient(to right, #fff6f1, #fffefb);">
    <div class="container text-center">

        <!-- Botão e título -->
        <a href="/ofertas" class="btn btn-outline-danger px-4 py-2 rounded-pill fw-semibold mb-3"
           style="background: #ff5722; color: white; border: none;">
            🔥 OFERTAS ESPECIAIS
        </a>

        <h2 class="fw-bold mb-2">
            Aproveite os
            <span style="background: linear-gradient(to right, #ff512f, #f9d423); -webkit-background-clip: text; color: transparent;">
                Melhores Preços
            </span>
        </h2>
        <p class="text-muted mb-5">Descontos imperdíveis em nossa seleção premium de canecas personalizadas</p>

        <!-- Cards -->
        <div class="row justify-content-center g-4">
            @foreach ($produtos as $produto)
            <div class="col-md-4">
                <div class="card h-100 shadow-sm position-relative border-0 rounded-4">

                    <!-- Badge novo -->
                    <span class="position-absolute top-0 start-0 badge bg-success text-white m-2 rounded-pill px-3">Novo</span>

                    <!-- Imagem do produto -->
                    <a href="{{route('produto.show',$produto->id)}}">
                        
                        {{-- <img src="{{ asset('storage/' . $produto->image) }}" class="card-img-top rounded-top-4" alt="{{ $produto->nome }}"> --}}
                    
<img src="{{ asset('assets/images/default.svg') }}" class="card-img-top rounded-top-4" alt="{{ $produto->nome }}">                    </a>

                    <div class="card-body text-start">
                        <!-- Tag Oferta -->
                        <span class="badge bg-danger text-white mb-2">Oferta</span>
                        <h5 class="card-title fw-bold text-dark">{{ $produto->nome }}</h5>

                        <!-- Avaliações -->
                        <div class="mb-2">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star text-muted"></i>
                            <i class="bi bi-star text-muted"></i>
                            <small class="text-muted ms-1">(0)</small>
                        </div>

                        <!-- Mini etiquetas -->
                        <div class="d-flex flex-wrap gap-2 small mb-3">
                            <span class="badge bg-light text-dark border">Mín: 1 un.</span>
                            <span class="badge bg-danger-subtle text-danger">Sob consulta</span>
                            <span class="badge bg-success-subtle text-success">Entrega nacional</span>
                            <span class="badge bg-secondary-subtle text-dark">Garantia</span>
                        </div>

                        <!-- Botão -->
                        <form action="{{ route('carrinho.adicionar', $produto->id) }}" method="POST">
                            @csrf
                            <button class="btn w-100 btn-lg fw-bold text-white"
                                style="background: linear-gradient(to right, #ff512f, #f9d423); border: none;">
                                <i class="bi bi-cart-plus me-1"></i> Adicionar ao Carrinho
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Seção: Nossos Produtos -->
<section class="py-5 bg-white">
    <div class="container text-center">

        <!-- Botão e título -->
        <a href="/catalogo" class="btn btn-outline-warning px-4 py-2 rounded-pill fw-semibold mb-3"
           style="background: #ffd700; color: black; border: none;">
            📦 CATÁLOGO COMPLETO
        </a>

        <h2 class="fw-bold mb-2">
            Nossos
            <span style="background: linear-gradient(to right, #ff512f, #f9d423); -webkit-background-clip: text; color: transparent;">
                Produtos
            </span>
        </h2>
        <p class="text-muted mb-5">Descubra nossa coleção completa de canecas personalizadas com qualidade premium</p>

        <!-- Cards de produtos -->
        <div class="row g-4">
            @foreach ($produtos as $produto)
            <div class="col-md-3">
                <div class="card h-100 shadow-sm border-0 rounded-4">
                    <a href="{{route('produto.show',$produto->id)}}">
                    <!-- Imagem -->
                    {{-- <img src="{{ asset('storage/' . $produto->imagem) }}" class="card-img-top rounded-top-4" alt="{{ $produto->nome }}"> --}}
                        <img src="{{ asset('assets/images/default.svg') }}" class="card-img-top rounded-top-4" alt="{{ $produto->nome }}">
                    </a>
                    <div class="card-body text-start">
                        <!-- Categoria -->
                        <span class="badge bg-danger-subtle text-danger mb-2">Personalizada</span>

                        <!-- Título -->
                        <h6 class="card-title fw-bold text-dark">{{ $produto->nome }}</h6>

                        <!-- Avaliação -->
                        <div class="mb-2">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star text-muted"></i>
                            <i class="bi bi-star text-muted"></i>
                            <small class="text-muted ms-1">(0)</small>
                        </div>

                        <!-- Etiquetas -->
                        <div class="d-flex flex-wrap gap-2 small mb-3">
                            <span class="badge bg-light text-dark border">Mín: 1 un.</span>
                            <span class="badge bg-danger-subtle text-danger">Sob consulta</span>
                            <span class="badge bg-success-subtle text-success">Entrega nacional</span>
                            <span class="badge bg-secondary-subtle text-dark">Garantia</span>
                        </div>

                        <!-- Botão -->
                        <form action="{{ route('carrinho.adicionar', $produto->id) }}" method="POST">
                            @csrf
                            <button class="btn w-100 fw-bold text-white"
                                style="background: linear-gradient(to right, #ff512f, #f9d423); border: none;">
                                <i class="bi bi-cart-plus me-1"></i> Adicionar ao Carrinho
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Paginação -->
        <div class="mt-5 d-flex justify-content-center">
            {{ $produtos->links('vendor.pagination.custom') }}

        </div>
    </div>
</section>

<!-- Seção: Nossas Vantagens -->
<section class="py-5" style="background: linear-gradient(to right, #fff8f4, #ffffff);">
    <div class="container text-center">

        <!-- Botão pequeno -->
        <span class="badge rounded-pill bg-light text-dark px-3 py-2 fw-semibold mb-3 border" style="font-size: 0.85rem;">
            🔎 NOSSAS VANTAGENS
        </span>

        <!-- Título -->
        <h2 class="fw-bold mb-3">
            Por que Escolher
            <span style="background: linear-gradient(to right, #fca311, #e63946); -webkit-background-clip: text; color: transparent;">
                a Gente?
            </span>
        </h2>

        <!-- Subtítulo -->
        <p class="text-muted mb-5">Oferecemos a melhor experiência em canecas personalizadas com qualidade premium</p>

        <!-- Cards -->
        <div class="row text-center g-4">
            <!-- Card 1 -->
            <div class="col-md-3">
                <div class="p-4 border rounded-4 h-100">
                    <div class="mb-3">
                        <i class="bi bi-check2-square fs-1 text-danger"></i>
                    </div>
                    <h6 class="fw-bold">Qualidade Premium</h6>
                    <p class="small text-muted mb-0">Produtos testados e aprovados com os melhores materiais do mercado</p>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-3">
                <div class="p-4 border rounded-4 h-100">
                    <div class="mb-3">
                        <i class="bi bi-heart-fill fs-1 text-warning"></i>
                    </div>
                    <h6 class="fw-bold">100% Personalizado</h6>
                    <p class="small text-muted mb-0">Você imagina, a gente realiza. Criações únicas para cada cliente</p>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-3">
                <div class="p-4 border rounded-4 h-100">
                    <div class="mb-3">
                        <i class="bi bi-award fs-1 text-warning"></i>
                    </div>
                    <h6 class="fw-bold">Melhor Custo-Benefício</h6>
                    <p class="small text-muted mb-0">Preços justos sem abrir mão da qualidade e excelência</p>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="col-md-3">
                <div class="p-4 border rounded-4 h-100">
                    <div class="mb-3">
                        <i class="bi bi-truck fs-1 text-dark"></i>
                    </div>
                    <h6 class="fw-bold">Entrega Nacional</h6>
                    <p class="small text-muted mb-0">Enviamos para todo o Brasil com segurança e agilidade</p>
                </div>
            </div>
        </div>

        <!-- Botão CTA -->
        <div class="mt-5">
            <a href="#contato" class="btn btn-lg rounded-pill fw-semibold text-white px-5 py-3"
               style="background: linear-gradient(to right, #e63946, #fca311); border: none;">
                Pronto para começar seu projeto? <i class="bi bi-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>




    
@endsection
