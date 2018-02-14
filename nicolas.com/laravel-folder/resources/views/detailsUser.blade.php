@extends('templatePages')

@section('title')
    Details
@endsection

@section('name')
    Details utlisateur
@endsection

@section('table')

    <table class=" table table-striped col-md-12  table-hover">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Rôle</th>
        <th>Créé le</th>
        <th>Dernière modification</th>

    </tr>
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->type}}</td>
        <td>{{$user->created_at}}</td>
        <td>{{$user->updated_at}}</td>

    </tr>
    </table>

@endsection
@if ($user->type === 'admin' or $user->type === 'user')
@section('formulaire')
    @include('templateFormulaireDetailsUser')
@endsection
@endif
