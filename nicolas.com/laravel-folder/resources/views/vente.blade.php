@extends('templatePages')

@section('title')
    VENTES
@endsection


@section('name')
    Liste des ventes enregistrées
@endsection


@section('table')
    <table class=" table table-striped col-md-12  table-hover">
        <tr>
            <th>Numéro de commande</th>
            <th>Utilisateur</th>
            <th>Rôle</th>
            <th>Boisson</th>
            <th>Nb Sucre</th>
            <th>Prix</th>
            <th>Date</th>
        </tr>

        @foreach ($ventes as $vente)
            <tr>
                <td>{{ $vente->id }}</td>
                <td>{{ $vente->user->name }}</td>
                <td>{{ $vente->user->type }}</td>
                <td>{{ $vente->boisson->nom }}</td>
                <td>{{ $vente->nbsucre }}</td>
                <td>{{ $vente->boisson_prix }} Cts</td>
                <td>{{ $vente->created_at }}</td>
                @if (Gate::allows('showSuperAdminPage'))
                    <td><h4><a href="/vente/{{$vente->id}}/delete-vente" class="btn btn-danger">Supprimer</></h4></td>
                @endif
            </tr>
        @endforeach
    </table>
@endsection

