
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Nauja knyga</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('books.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nuotrauka</label>
                                <input type="text" class="form-control" name="img">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Pavadinimas</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div  class="mb-3">
                                <label class="form-label">Kategorija</label>
                                <select class="form-control" name="category_id" >
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" @selected(old('category_id')==$category->id)>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Santrauka</label>
                                <textarea class="form-control" placeholder="Trumpai apie knygą" name="summary"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">ISBN</label>
                                <input type="text" class="form-control" name="isbn">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Puslapiai</label>
                                <input type="text" class="form-control" name="pages">
                            </div>

                            <button class="btn btn-dark me-3">Pridėti</button>
                            <a href="{{route('books.index')}}" class="btn btn-info">Atgal</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
