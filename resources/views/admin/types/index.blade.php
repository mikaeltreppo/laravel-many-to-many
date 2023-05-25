@extends('layouts.admin')

@section('content')
    

<table class="table">
    <thead>
      <tr>
        <th scope="col">Titolo</th>
        <th scope="col">Azioni</th>
   

    
      </tr>
    </thead>
    <tbody>

        @foreach ($types as $type)
      <tr>
        <th scope="row">{{$type->title}}</th>
        <td> 
          <a href="{{route('admin.types.show', ['type' => $type->id])}}" class="btn btn-primary m-2">Apri</a> 
          <a href="{{route('admin.types.edit', ['type' => $type->id])}}" class="btn btn-warning m-2">Modifica</a> 

          <form method="POST" action="{{route('admin.types.destroy', ['type'=> $type->id])}}">
            @method('DELETE')
            @csrf
          <button type="submit" class="btn btn-danger m-2">Cancella</button>
        </form>
              
                   
        </td>
      </tr>
      
    </tbody>
     @endforeach
  </table>

  @endsection