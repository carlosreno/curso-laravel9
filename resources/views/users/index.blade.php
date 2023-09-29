@extends('layouts.app')

@section('title', 'Lista user')
@section('content')
    <h1>
        Lista de usuarios
        (<a href="{{ route('user.create') }}">+</a>)
    </h1>
    <ul>
        @foreach ($users as $user)
            <li>
                {{ $user->name }}
                {{ $user->email }}
                <a href="{{ route('user.show', $user->id) }}">Detalhes</a>
            </li>
        @endforeach
    </ul>
@endsection
