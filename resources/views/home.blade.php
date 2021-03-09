@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Administracija korisnika</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-bordered">
                        <tr>
                            <th>#Id</th>
                            <th>Ime</th>
                            <th>Prezime</th>
                            <th>JMBG</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Datum i vrijeme registracije</th>
                            <th>Akcije</th>
                        </tr>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->surname}}</td>
                            <td>{{$user->oid}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->role}}</td>
                            <td>{{$user->created_at}}</td>
                            <td>
                                <a href="{{ route('users.delete', $user->id) }}"class="btn btn-danger btn-sm">Pobriši</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
