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

       
        <section class="bg-white py-5 px-3">
  <div class="text-center mb-5">
    <h2 class="h3 fw-bold text-dark">Nossas Categorias</h2>
    <p class="text-muted">
      Explore nossa ampla variedade de produtos organizados por categoria. Encontre exatamente o que você procura!
    </p>
  </div>

  <div class="row g-4">
    <!-- Categoria 1 -->
    @foreach($categorias as $categoria)
    <div class="col-12 col-md-6 col-lg-4">
      <div class="card border rounded-4 shadow-sm">
        <div class="position-relative">
          <span class="position-absolute top-0 start-0 bg-danger text-white fw-bold small px-2 py-1 rounded-end">Destaque</span>
          <span class="position-absolute top-0 end-0 text-muted fs-5 p-2">&#9749;</span>
          <div class="bg-secondary bg-opacity-10 d-flex align-items-center justify-content-center" style="height: 180px;">
            IMG
          </div>
        </div>
        <div class="card-body">
          <h5 class="card-title fw-bold">{{$categoria->nome}}</h5>
          <span class="badge bg-warning text-dark fw-bold mb-2">45 produtos</span>
          <p class="card-text text-muted">Canecas únicas com seu design personalizado</p>
          <a href="#" class="text-decoration-none text-primary small">Ver produtos &rarr;</a>
          <div class="text-warning mt-2">
            &#9733; &#9733; &#9733; &#9733; &#9733;
          </div>
        </div>
      </div>
    </div>
@endforeach
    
  </div>
</section>
    </div>
@endsection
