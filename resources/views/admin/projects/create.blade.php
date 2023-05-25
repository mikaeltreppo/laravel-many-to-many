@extends('layouts.admin')
@section('content')
    <div class="container mt-2">
        <form method="POST" action="{{ route('admin.projects.store') }}">
            <!--csrf per evitare errore 419 per autenticazione-->
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Autore</label>
                <input type="text" class="form-control" id="author" name="author">
            </div>
            <!--types-->
            <div class="mb-3">
                <label for="type_id" class="form-label">Tipologia</label>
                <select class="form-select" aria-label="Default select example" name="type_id" id="type_id">

                    @foreach ($types as $type)
                        <option value="{{ $type->id }}">{{ $type->title }}</option>
                    @endforeach

                </select>

            </div>
            <!--technologies-->
            <div class="mb-3">
   
                @foreach ($technologies as $tech)
                    <input id="tech_{{$tech->id}}" type="checkbox" name="technologies[]" value="{{$tech->id}}"">
                    <label for="tech_{{$tech->id}}"> {{$tech->name}} </label><br>
                @endforeach


            </div>


            <button type="submit" class="btn btn-outline-primary">Crea</button>
        </form>
    </div>
@endsection
