@extends('templatePages')

@section('title')
RECETTES
@endsection


@section('name')
Liste des recettes
@endsection


@section('table')
    <table class="table-striped col-md-12 table-hover">
        @foreach ($boissons as $boisson)
            <tr><th>{{ $boisson->nom }}<br><a href="{{ route('details', ['id'=>$boisson->id] )}}" class="btn btn-primary">Details</a><br></br></th></tr>
        @endforeach
    </table><br><br>
    <legend>Formulaire d'ajout de recette :</legend>
@endsection

@section('formulaire')
    @include('templateFormulaireRecette')
@endsection