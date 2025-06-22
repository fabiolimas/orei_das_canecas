<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'O Rei das Canecas')</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Ícones (Bootstrap ou FontAwesome) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f9f9f9;
        }

        .top-bar {
            background-color: #d80000;
            color: #fff;
            font-size: 0.95rem;
            padding: 0.5rem 0;
        }

        .logo {
            max-height: 60px;
        }

        .navbar-nav .nav-link {
            font-weight: 600;
            color: #000 !important;
        }

        .navbar-nav .nav-link:hover {
            color: #d80000 !important;
        }

        .search-bar {
            max-width: 300px;
        }

        .icon-btn {
            background: none;
            border: none;
            color: #000;
            font-size: 1.2rem;
            position: relative;
        }

        .icon-btn .badge {
            position: absolute;
            top: -5px;
            right: -10px;
            background-color: #d80000;
            color: #fff;
            font-size: 0.75rem;
        }
        #carouselBanner img {
        border-radius: 10px;
        max-height: 600px;
        object-fit: cover;
    }
    </style>
</head>
<body>

    <!-- Faixa vermelha com contato -->
    <div class="top-bar text-center text-md-start px-3">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
            <div>
                <i class="bi bi-envelope-fill me-1"></i> contato@oreidascanecas.com
                <span class="mx-3">|</span>
                <i class="bi bi-telephone-fill me-1"></i> (35) 3471-2675
            </div>
            <div class="mt-2 mt-md-0">
                <a href="#" class="text-white me-2"><i class="bi bi-instagram"></i></a>
                <a href="#" class="text-white me-2"><i class="bi bi-whatsapp"></i></a>
                <a href="#" class="text-white"><i class="bi bi-youtube"></i></a>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{asset('assets/images/logo.png')}}" alt="Logo" class="logo">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarMain">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/catalogo">Catálogo</a></li>
                    <li class="nav-item"><a class="nav-link" href="/categorias">Categorias</a></li>
                    <li class="nav-item"><a class="nav-link" href="/sobre">Sobre</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contato">Contato</a></li>
                </ul>
            </div>

            <!-- Campo de busca e ícones -->
            <div class="d-flex align-items-center">
                {{-- <form class="d-flex search-bar me-3" role="search">
                    <input class="form-control rounded-pill ps-4" type="search" placeholder="Buscar produtos..." aria-label="Buscar">
                </form> --}}

                <button class="icon-btn me-3">
                    <i class="bi bi-cart3"></i>
                    <span class="badge rounded-circle">2</span>
                </button>

                <button class="icon-btn">
                    <i class="bi bi-person-circle"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Conteúdo principal -->
    <main>
        @yield('content')
    </main>

    <!-- Rodapé básico -->
 <!-- Footer -->
<footer class="text-white mt-5" style="background-color: #e50000; font-size: 0.95rem;">

    <!-- Barra de benefícios -->
    <div class="container py-3 border-bottom border-light-subtle">
        <div class="row text-center text-md-start">
            <div class="col-md-4 mb-3 mb-md-0">
                <i class="bi bi-truck me-2 fs-5 text-warning"></i>
                <strong>Entrega para Todo Brasil</strong><br>
                <small>Envio rápido e seguro</small>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
                <i class="bi bi-credit-card me-2 fs-5 text-warning"></i>
                <strong>Pagamento Seguro</strong><br>
                <small>Diversas formas de pagamento</small>
            </div>
            <div class="col-md-4">
                <i class="bi bi-headset me-2 fs-5 text-warning"></i>
                <strong>Atendimento</strong><br>
                <small>Segunda a Sexta, 8h às 18h</small>
            </div>
        </div>
    </div>

    <!-- Parte principal -->
    <div class="container py-3">
        <div class="row text-center text-md-start">
            <!-- Logo e redes sociais -->
            <div class="col-md-3 mb-4 mb-md-0">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" style="height: 65px;">
                <p class="mt-3">Especialistas em canecas personalizadas e corporativas. Qualidade garantida e entrega rápida para todo o Brasil.</p>
                <div class="d-flex justify-content-center justify-content-md-start gap-3 mt-3">
                    <a href="#" class="text-white"><i class="bi bi-instagram fs-5"></i></a>
                    <a href="#" class="text-white"><i class="bi bi-facebook fs-5"></i></a>
                    <a href="#" class="text-white"><i class="bi bi-whatsapp fs-5"></i></a>
                    <a href="#" class="text-white"><i class="bi bi-youtube fs-5"></i></a>
                </div>
            </div>

            <!-- Links Rápidos -->
            <div class="col-md-3 mb-4 mb-md-0">
                <h6 class="fw-bold">Links Rápidos</h6>
                <ul class="list-unstyled mt-3">
                    <li><a href="#" class="text-white text-decoration-none">Catálogo</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Categorias</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Sobre Nós</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Contato</a></li>
                </ul>
            </div>

            <!-- Categorias -->
            <div class="col-md-3 mb-4 mb-md-0">
                <h6 class="fw-bold">Categorias</h6>
                <ul class="list-unstyled mt-3">
                    <li><a href="#" class="text-white text-decoration-none">Personalizadas</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Temáticas</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Corporativas</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Porcelana</a></li>
                </ul>
            </div>

            <!-- Contato -->
            <div class="col-md-3">
                <h6 class="fw-bold text-warning">Contato</h6>
                <ul class="list-unstyled mt-3">
                    <li><i class="bi bi-telephone-fill me-2 text-white"></i> (35) 3471-2675</li>
                    <li><i class="bi bi-envelope-fill me-2 text-white"></i> contato@oreidascanecas.com</li>
                    <li><i class="bi bi-geo-alt-fill me-2 text-white"></i> São Paulo, SP</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="text-center py-3 border-top border-light-subtle">
        © {{ date('Y') }} O Rei das Canecas. Todos os direitos reservados.
    </div>
</footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
