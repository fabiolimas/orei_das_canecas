@extends('layouts.app')

@section('title', 'Catálogo de Produtos')

@section('content')
    <style>
        .container.text-center.d-flex {
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
        }

         .card{
        transition: .2s;
     }
    .card:hover{
    transform: translateY(-5px);
    
    
}
.card img{
 
    height: 191px;
}
.card h5:hover{
color:red
}
    </style>
    <div class="fluid-container mt-4">

        <div class="row text-center">
            <div class="col-md-12">
                <h4 class="fw-bold">Nossas Categorias</h4>
                <p class="mb-2">Explore nossa ampla variedade de produtos organizados por categoria. Encontre exatamente o
                    que você procura!</p>

            </div>
        </div>


        <section class="py-5" style="background: linear-gradient(to right, #fff6f1, #fffefb);">
            <div class="container  d-flex">
                <div class="row">


                    @foreach ($categorias as $categoria)
                        <div class="col-md-4 mb-3">
                            <div class="card border-primary" >
                                <img src="{{ asset('assets/images/default.svg') }}" class="card-img-top rounded-top-4"
                                    alt="{{ $categoria->nome }}">
                                <div class="card-body">
                                    <h5 class="card-title text-xl font-bold text-gray-900 group-hover:text-blue-600 transition-colors">{{ $categoria->nome }}</h5>
                                    <p class="card-text">Canecas únicas com design personalizado</p>
                                    <a href="#" class="text-left">Ver produtos</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection
