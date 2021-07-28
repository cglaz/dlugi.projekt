@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Lista długów <a href="{{ route('debts.create') }}" class="btn btn-success mb-2 float-right m-0">Dodaj nowy dług +</button></a></div>
                        <div class="card-body">
                            <div class="table-responsive mt-3">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Lp.</th>
                                        <th>Id</th>
                                        <th>Nazwa</th>
                                        <th>Miasto</th>
                                        <th>Cena</th>
                                        <th>Opcje</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($debts ?? [] as $debt)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $debt->id }}</td>
                                            <td>{{ $debt->name }}</td>
                                            <td>{{ $debt->city }}</td>
                                            <td>{{ $debt->price }} PLN</td>
                                            <td>
                                                <form action="{{ route('debts.delete', ['debtId' => $debt->id]) }}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Usuń</button>
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
        </div>
    </div>
@endsection
