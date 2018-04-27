@extends('layouts.app')
@section('title')
    Detalle de Notas
@endsection
@section('content')
    <h1>Detalle de la nota</h1>
    <h3>{{$note->title}}</h3>
    <p>{{$note->body}}</p>
@endsection
    
