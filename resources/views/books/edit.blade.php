@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Koreguoti knygą</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('books.update', $book->id) }}">
                            @csrf
                            @method("PUT")
                            <div class="mb-3">
                                <label for="img" class="form-label">Nuotrauka</label>
                                <input id="img" type="text" class="form-control" name="img" value="{{ $book->img }}">
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Pavadinimas</label>
                                <input id="name" type="text" class="form-control" name="name" value="{{ $book->name }}">
                            </div>
                            <div  class="mb-3">
                                <label for="category_id" class="form-label">Kategorija</label>
                                <select id="category_id" class="form-control" name="category_id" >
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" @selected(old('category_id')==$category->id)>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="summary" class="form-label">Santrauka</label>
                                <input id="summary" type="text" class="form-control" name="summary" value="{{ $book->summary }}">
                            </div>
                            <div class="mb-3">
                                <label for="isbn" class="form-label">ISBN</label>
                                <input id="isbn" type="text" class="form-control" name="isbn" value="{{ $book->isbn }}">
                            </div>
                            <div class="mb-3">
                                <label for="pages" class="form-label">Puslapiai</label>
                                <input id="pages" type="text" class="form-control" name="pages" value="{{ $book->pages }}">
                            </div>


                            <button class="btn btn-dark">Išsaugoti</button>
                            <a href="{{route('books.index')}}" class="btn btn-info">Atgal</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

