
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Iniciar Sesión</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        {{-- Email Input --}}
        <div>
            <label for="email">Correo Electrónico</label>
            <input type="email" name="email" required autofocus>
        </div>

        {{-- Password Input --}}
        <div>
            <label for="password">Contraseña</label>
            <input type="password" name="password" required>
        </div>

        {{-- Submit Button --}}
        <div>
            <button type="submit">Iniciar Sesión</button>
        </div>
    </form>
</div>
@endsection
