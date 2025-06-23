@extends('layouts.app')

@section('content')
<!-- Cabeçalho com Gradiente -->
<div class="py-5 text-white text-center" style="background: linear-gradient(to right, #3b82f6, #9333ea);">
    <h2 class="fw-bold">Entre em Contato</h2>
    <p class="mt-2">Estamos aqui para ajudar você! Entre em contato conosco através de qualquer um dos canais abaixo.</p>
</div>

<!-- Conteúdo Principal -->
<div class="container py-5">
    <div class="row g-4">
        <!-- Informações de Contato -->
        <div class="col-md-6">
            <h5 class="fw-bold mb-3">Informações de Contato</h5>

            <div class="card border-start border-primary border-3 mb-3">
                <div class="card-body">
                    <h6 class="fw-bold">📍 Endereço</h6>
                    <p class="mb-0">Rua das Canecas, 123<br>Centro - São Paulo, SP<br>CEP: 01234-567</p>
                </div>
            </div>

            <div class="card border-start border-success border-3 mb-3">
                <div class="card-body">
                    <h6 class="fw-bold">📞 Telefone</h6>
                    <p class="mb-0">Vendas: (11) 99888-0000<br>Suporte: (11) 95959-7777</p>
                </div>
            </div>

            <div class="card border-start border-purple border-3 mb-3">
                <div class="card-body">
                    <h6 class="fw-bold">📧 E-mail</h6>
                    <p class="mb-0">Vendas: vendas@canecaspersonalizadas.com<br>Suporte: suporte@canecaspersonalizadas.com</p>
                </div>
            </div>

            <div class="card border-start border-success border-3 mb-3">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="fw-bold">💬 WhatsApp</h6>
                        <p class="mb-0">Fale conosco diretamente pelo WhatsApp para atendimento mais rápido.</p>
                    </div>
                    <a href="https://wa.me/55999999999" target="_blank" class="btn btn-success">Abrir WhatsApp</a>
                </div>
            </div>
        </div>

        <!-- Horário + Redes Sociais -->
        <div class="col-md-6">
            <div class="card border mb-3">
                <div class="card-body">
                    <h6 class="fw-bold">🕒 Horário de Funcionamento</h6>
                    <ul class="list-unstyled mt-3">
                        <li><strong>Segunda à Sexta:</strong> 08:30 - 18:00</li>
                        <li><strong>Sábado:</strong> 09:00 - 13:00</li>
                        <li><strong>Domingo:</strong> <span class="badge bg-warning text-dark">Fechado</span></li>
                    </ul>
                    <p class="small text-muted mt-2">Atendemos via WhatsApp 24 horas / 7 dias na semana</p>
                </div>
            </div>

            <div class="card border mb-3">
                <div class="card-body">
                    <h6 class="fw-bold">🌐 Redes Sociais</h6>
                    <p class="mb-1">Nos siga nas redes sociais para ficar por dentro das novidades, promoções e inspirações!</p>
                    <ul class="list-unstyled">
                        <li><a href="#" target="_blank">📷 Instagram</a></li>
                        <li><a href="#" target="_blank">📘 Facebook</a></li>
                        <li><a href="#" target="_blank">💼 LinkedIn</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Ajuda Rápida -->
    <div class="card text-center mt-4 border-0" style="background: linear-gradient(to right, #6366f1, #9333ea); color: #fff;">
        <div class="card-body">
            <h5 class="fw-bold">Precisa de Ajuda Rápida?</h5>
            <p class="mb-3">Nosso time está pronto para atender você pelo canal que preferir com agilidade.</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="https://wa.me/55999999999" target="_blank" class="btn btn-outline-light">💬 WhatsApp</a>
                <a href="/chat" class="btn btn-outline-light">📞 Ligar Agora</a>
            </div>
        </div>
    </div>
</div>
@endsection
