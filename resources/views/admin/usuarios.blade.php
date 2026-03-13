@extends('layouts.dashboard_base')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/usuarios.css') }}">
@endpush

@section('content')

<h1>Usuarios</h1>
<p>Lista de usuarios</p>

<div class="user-container">

@foreach($usuarios as $usuario)

    @php
        $rol = $roles->firstWhere('id', $usuario->rol_id);
    @endphp
    
    <div class="user-info">

    <div class="user-header">
        <h3>{{ $usuario->nombre }} {{ $usuario->apellido }}</h3>
        <span class="user-role">{{ $rol ? $rol->nombre : 'Sin rol' }}</span>
    </div>

    <div class="user-body">

        <div class="user-info-row">
            <i class="bi bi-envelope"></i>
            <span>{{ $usuario->email }}</span>
        </div>

        <div class="user-info-row">
            <i class="bi bi-telephone"></i>
            <span>{{ $usuario->telefono ?? 'Sin teléfono' }}</span>
        </div>

    </div>

    <div class="user-footer">
        <span class="user-status">{{ $usuario->activo ? 'Activo' : 'Inactivo' }}</span>
    </div>

</div>
    
@endforeach

</div>

@endsection