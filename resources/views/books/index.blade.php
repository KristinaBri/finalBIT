@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Knygos</div>

                    <div class="card-body">
                        <a href="{{route('books.create')}}" class="btn btn-dark mb-3">➕ Pridėti</a>                        <table class="table">
                            <thead>
                            <tr>
                                <th>Nuotrauka</th>
                                <th>Pavadinimas</th>
                                <th>Kategorija</th>
                                <th>Santrauka</th>
                                <th>ISBN</th>
                                <th>Puslapiai</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($books as $book)
                                <tr>
                                    <td>{{ $book->img }}</td>
                                    <td>{{ $book->name }}</td>
                                    <td>{{ $book->category_id }}</td>
                                    <td>{{ $book->summary }}</td>
                                    <td>{{ $book->isbn }}</td>
                                    <td>{{ $book->pages }}</td>
                                    <td>
                                        <a href="{{ route('categoryBooks',$category->id) }}" class="btn btn-info">Knygos</a>
                                    </td>
                                    <td>
                                        <a href="{{route('categories.edit', $category->id)}}" class="btn btn-dark">Redaguoti</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('categories.destroy', $category->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">Ištrinti</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
