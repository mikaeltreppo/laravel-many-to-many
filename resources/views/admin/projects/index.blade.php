@extends('layouts.admin')

@section('content')
    

<table class="table">
    <thead>
      <tr>
        <th scope="col">Titolo</th>
        <th scope="col">Autore</th>
        <th scope="col">Descrizione</th>
        <th scope="col">Tipologia</th>
        <th scope="col">Azioni</th>
       
       

    
      </tr>
    </thead>
    <tbody>

        @foreach ($project as $proj)
      <tr>
        <th scope="row">{{$proj->title}}</th>
        <td>{{$proj->author}}</td>
        <td class="text-center font-monospace">{{$proj->description}}</td>
        <td>{{$proj->type?$proj->type->title:"Nessuna Tipologia"}}</td>
        <td> 
          <a href="{{route('admin.projects.show', ['project' => $proj->id])}}" class="btn btn-outline-primary m-2">Apri</a> 
          <a href="{{route('admin.projects.edit', ['project' => $proj->id])}}" class="btn btn-outline-warning m-2">Modifica</a> 

          <form method="POST" action="{{route('admin.projects.destroy', ['project'=> $proj->id])}}">
            @method('DELETE')
            @csrf
          <button type="submit" class="btn btn-outline-danger m-2">Cancella</button>
        </form>
              
                   
        </td>
      </tr>
      
    </tbody>
     @endforeach
  </table>

  @endsection