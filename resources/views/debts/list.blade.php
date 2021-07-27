@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Lista długów</div>
                        <div class="card-body">
                            <div class="table-responsive mt-3">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
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
                                            <td>{{ $debt->id }}</td>
                                            <td>{{ $debt->name }}</td>
                                            <td>{{ $debt->city }}</td>
                                            <td>{{ $debt->price }} PLN</td>
                                            <td>
                                                <a href="">Usuń</a>
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
