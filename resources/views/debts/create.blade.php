@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dodaj dług</div>
                    <div class="card-body">
                        <form action="{{ route('debts.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group col-md-6">
                                <label for="name">Nazwa</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="name"
                                    name="name"
                                />
                                @error('name')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Miasto</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="city"
                                    name="city"
                                >
                                @error('city')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Cena</label>
                                <input
                                    type="number"
                                    class="form-control"
                                    id="price"
                                    name="price"
                                >
                                @error('price')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success">Dodaj dług</button>
                            <a href="{{ route('debts.list') }}" class="btn btn-secondary">Anuluj</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
