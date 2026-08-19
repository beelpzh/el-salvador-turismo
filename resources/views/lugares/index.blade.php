@extends('layouts.app')

@section('content')
    <h1 class="text-center mb-4">Descubre El Salvador</h1>

    <div class="row">
        @foreach($lugares as $lugar)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ $lugar['imagen'] }}" class="card-img-top" alt="{{ $lugar['titulo'] }}">
                    <div class="card-body">
                        <span class="badge bg-info text-dark mb-2">{{ $lugar['categoria'] }}</span>
                        <h5 class="card-title">{{ $lugar['titulo'] }}</h5>
                        <p class="card-text text-muted"><strong>Ubicación:</strong> {{ $lugar['departamento'] }}</p>
                        <!-- Usamos el helper str() para evitar errores de clase en Laravel 11 -->
                        <p class="card-text">{{ str($lugar['descripcion'])->limit(80) }}</p>
                    </div>
                    <div class="card-footer bg-white border-top-0">
                        <a href="{{ route('lugares.show', $lugar['id']) }}" class="btn btn-outline-primary w-100">Ver Detalles</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
