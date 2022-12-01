@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Nauja kategorija</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('categories.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Pavadinimas</label>
                                <input type="text" class="form-control" name="name">
                            </div>

                            <button class="btn btn-dark me-3">Pridėti</button>
                            <a href="{{route('categories.index')}}" class="btn btn-info">Atgal</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
