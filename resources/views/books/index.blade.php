@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">📘 Knygos</div>

                    <div class="card-body">
                        @can('create',\App\Models\Book::class)
                        <a href="{{route('books.create')}}" class="btn btn-dark mb-3">➕ Pridėti</a>
                        @endcan
                        <table class="table">
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
                                    <td>{{ $book->category->name }}</td>
                                    <td>{{ $book->summary }}</td>
                                    <td>{{ $book->isbn }}</td>
                                    <td>{{ $book->pages }}</td>
                                    <td>
                                        @can('edit',$book)
                                        <a href="{{route('books.edit', $book->id)}}" class="btn btn-dark">Redaguoti</a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('delete',$book)
                                        <form action="{{ route('books.destroy', $book->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">Ištrinti</button>
                                        </form>
                                        @endcan
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
