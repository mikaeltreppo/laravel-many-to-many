@extends('layouts.admin')

@section('content')

<div class="container d-flex justify-content-center">
<!--card di un progetto in show-->
    <div class="card mt-4" style="width: 25rem;">
        <div class="card-body">
          <h5 class="card-title">{{$type->title}}</h5>
          <p class="card-text">{{$type->description}}</p>
          <a href="{{route('admin.types.index')}}" class="btn btn-primary">Torna alle Tipologie</a>
        </div>
      </div>



<h1></h1>

</div>

@endsection