@extends('layouts.app')

@section('title', 'Detalhes do Usuário')

@section('content')
<h1>Lista de usuarios</h1>
<ul>
        <h1> Detalhes do Usuário {{ ($user->name) }}</h1>
        <li>
            {{$user->name}}
        </li>
        <li>
            {{$user->email}}
        </li>
</ul>
@endsection
