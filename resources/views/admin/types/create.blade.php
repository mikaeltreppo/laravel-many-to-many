@extends('layouts.admin')
@section('content')
    <div class="container mt-2">
        <form method="POST" action="{{ route('admin.types.store') }}">
            <!--csrf per evitare errore 419 per autenticazione-->
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Tipologia</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
         
            

            <button type="submit" class="btn btn-primary">Crea</button>
        </form>
    </div>
@endsection
