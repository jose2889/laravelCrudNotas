@extends('layouts.app')
@section('title')
    Editar Nota
@endsection
@section('content')
    <form action="/notes/{{$note->id}}" method="POST" role="form">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
        <legend>Editar nueva nota</legend>
            @include('notes.validations')
            @include('notes._form')
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
        
@endsection
