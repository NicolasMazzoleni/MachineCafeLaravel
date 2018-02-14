@extends('templatePages')

@section('title')
    BOISSONS
@endsection


@section('name')
    Liste des utilisateurs
@endsection


@section('table')
    <br><br>
    <!-- Form Name -->
    <table class=" table table-striped col-md-12  table-hover">
        <tr>
            <th>Nom</th>
            <th>Rôle</th>
            <th>Actions</th>
        </tr>
        @foreach ($users as $user)
            @if($user->name != 'Guest')
                <tr>
                    <td><h2>{{ $user->name }}</h2></td>
                    <td><h5>{{ $user->type }}</h5></td>
                    <td>
                        <a href="/admin/{{$user->id}}" class="btn btn-warning">Voir</a>
                        @endif
                        @if ($user->type === 'admin' or $user->type === 'user')
                            <a href="/user/{{$user->id}}/delete-user" class="btn btn-danger">Supprimer</a>
                        @endif
                    </td>
                </tr>
                @endforeach
    </table>
@endsection



