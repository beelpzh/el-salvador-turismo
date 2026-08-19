@extends('layouts.app')

@section('content')
    <a href="{{ route('lugares.index') }}" class="btn btn-secondary mb-3">&larr; Volver al catálogo</a>

    @if(session('exito'))
        <div class="alert alert-success">
            {{ session('exito') }}
        </div>
    @endif

    <div class="card shadow-lg mb-4">
        <div class="row g-0">
            <div class="col-md-6">
                <img src="{{ $lugar['imagen'] }}" class="img-fluid rounded-start h-100 object-fit-cover" alt="{{ $lugar['titulo'] }}">
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <span class="badge bg-primary mb-2">{{ $lugar['categoria'] }}</span>
                    <h2 class="card-title">{{ $lugar['titulo'] }}</h2>
                    <p class="text-muted"><strong>Departamento:</strong> {{ $lugar['departamento'] }}</p>
                    <p class="fs-5"><strong>Precio entrada:</strong> ${{ number_format($lugar['precio'], 2) }}</p>
                    <hr>
                    <h5>Descripción:</h5>
                    <p class="card-text">{{ $lugar['descripcion'] }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Formulario de Contacto -->
    <div class="card shadow-sm p-4">
        <h4>Solicitar más información sobre este destino</h4>
        <form action="{{ route('lugares.contacto') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre Completo</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="mensaje" class="form-label">Mensaje o Consulta</label>
                <textarea name="mensaje" class="form-control" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar Solicitud</button>
        </form>
    </div>
@endsection
