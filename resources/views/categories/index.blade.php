@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">🗝 Kategorijos</div>

                    <div class="card-body">
                        <a href="{{route('categories.create')}}" class="btn btn-dark mb-3">➕ Pridėti</a>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Kategorijos pavadinimas</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->name }}</td>
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
