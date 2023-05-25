@extends('layouts.admin')
@section('content')
    <div class="container mt-2">
        <form method="POST" action="{{ route('admin.types.update', ['type'=>$type->id]) }}">
            <!--csrf per evitare errore 419 per autenticazione-->
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Tipologia</label>
                <input type="text" class="form-control" id="title" name="title" value="{{old('type', $type->title)}}">
            </div>
            <button type="submit" class="btn btn-warning">Modifica</button>
        </form>
    </div>
@endsection
