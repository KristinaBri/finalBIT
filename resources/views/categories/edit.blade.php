@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Koreguoti kategoriją</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('categories.update', $category->id) }}">
                            @csrf
                            @method("PUT")

                            <div class="mb-3">
                                <label for="name" class="form-label">Kategorijos pavadinimas</label>
                                <input id="name" type="text" class="form-control" name="name" value="{{ $category->name }}">
                            </div>

                            <button class="btn btn-dark">Išsaugoti</button>
                            <a href="{{route('categories.index')}}" class="btn btn-info">Atgal</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="{{route('categories.index')}}" class="btn btn-info">Atgal</a>

@endsection
