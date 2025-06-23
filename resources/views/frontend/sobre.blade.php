@extends('layouts.app')

@section('content')
<!-- Seção Topo com Gradiente -->
<div class="py-5 text-white" style="background: linear-gradient(to right, #3b82f6, #9333ea);">
  <div class="container text-center">
    <h2 class="fw-bold">Nossa História</h2>
    <p class="mt-2">Há mais de 10 anos criando momentos especiais através de produtos únicos e personalizados.<br>
    Cada caneca conta uma história, cada presente carrega um sentimento.</p>
  </div>
</div>

<!-- Seção História -->
<div class="container py-5">
  <div class="row align-items-center">
    <div class="col-md-6">
      <h5 class="fw-bold">Como Tudo Começou</h5>
      <p class="mt-3">Nossa jornada começou em 2014, quando percebemos que os presentes mais especiais são aqueles que carregam um toque pessoal. Começamos pequeno, em uma garagem, com um sonho de criar produtos únicos que tocam o coração das pessoas.</p>
      <p>Hoje, somos uma empresa consolidada no mercado de personalização, mas mantemos o mesmo carinho e dedicação em cada peça que sai da loja. Cada produto é tratado como se fosse feito para um ente querido.</p>
      <p>Nossa missão é simples: transformar momentos em memórias extraordinárias através de produtos personalizados de alta qualidade.</p>
      <button class="btn btn-outline-secondary mt-3">❤️ Feito com amor</button>
    </div>
    <div class="col-md-6 text-center mt-4 mt-md-0">
      <img src="https://via.placeholder.com/400x300" class="img-fluid rounded shadow" alt="Imagem História">
    </div>
  </div>
</div>

<!-- Seção Nossos Valores -->
<div class="container text-center pb-5">
  <h5 class="fw-bold">Nossos Valores</h5>
  <p class="text-muted">Os princípios que guiam cada decisão e cada produto que criamos</p>
  
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="border rounded p-3 h-100">
        <h6 class="fw-bold">🎯 Qualidade Premium</h6>
        <p class="small text-muted">Utilizamos apenas materiais de primeira qualidade e técnicas de impressão avançadas.</p>
      </div>
    </div>
    <div class="col">
      <div class="border rounded p-3 h-100 bg-light">
        <h6 class="fw-bold">❤️ Feito com Amor</h6>
        <p class="small text-muted">Cada caneca é feita com carinho e dedicação para momentos únicos.</p>
      </div>
    </div>
    <div class="col">
      <div class="border rounded p-3 h-100 bg-success-subtle">
        <h6 class="fw-bold">🤝 Foco no Cliente</h6>
        <p class="small text-muted">Sua satisfação é a nossa prioridade. Estamos sempre prontos para ajudar.</p>
      </div>
    </div>
    <div class="col">
      <div class="border rounded p-3 h-100 bg-purple-subtle">
        <h6 class="fw-bold">🚀 Inovação</h6>
        <p class="small text-muted">Estamos buscando novas ideias e soluções para surpreender você.</p>
      </div>
    </div>
    <div class="col">
      <div class="border rounded p-3 h-100 bg-warning-subtle">
        <h6 class="fw-bold">⏰ Pontualidade</h6>
        <p class="small text-muted">Cumprimos os prazos. Você recebe seu produto no tempo prometido.</p>
      </div>
    </div>
    <div class="col">
      <div class="border rounded p-3 h-100 bg-info-subtle">
        <h6 class="fw-bold">🔐 Confiança</h6>
        <p class="small text-muted">Transparência em todo o processo e garantia de satisfação ou reembolso.</p>
      </div>
    </div>
  </div>
</div>
@endsection
