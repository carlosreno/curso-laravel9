@extends('layouts.app')

@section('title', 'Novo Usuário')
<h1>Novo Usuario</h1>

@if ($errors->any())
    <ul class="error">
        @foreach ($errors->all() as $error )
            <li class="error">{{ $error }}</li>
        @endforeach
    </ul>
@endif

@section('content')
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="name" id="name" value="{{ old('name') }}">
        <input type="email" name="email" placeholder="email" id="email" value="{{ old('email') }}">
        <input type="password" name="password" placeholder="password" id="Senha" value="{{ old('password') }}">
        <button type="submit">Enviar</button>
    </form>
@endsection
