@extends('layouts.app')
@section('title')
    Listado de Notas
@endsection
@section('content')
    <h1>Bienvenido a {{ config('app.name') }}</h1>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nota</th>
      <th scope="col">Opciones</th>

    </tr>
  </thead>
  <tbody>
      @foreach ($notes as $note)            
    <tr>      
        <td><a href="/notes/{{$note->id}}">{{$note->title}}
        @if ($note->IsImportant())
            *
        @endif
        </a></td>
               
      <td>
        <div class="d-flex">
            <a href="/notes/{{$note->id}}/edit" class="btn btn-primary mx-1">Editar</a>
            <form action="/notes/{{$note->id}}" method="post">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button type="submit" class="btn btn-danger mx-1">Eliminar</button>
            </form>
        </div>
    </td>    
      
    </tr>
    @endforeach    
  </tbody>
</table>
 
@endsection