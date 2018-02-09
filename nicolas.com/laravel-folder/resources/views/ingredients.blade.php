@extends('templatePages')

@section('title')
    INGREDIENTS
@endsection


@section('name')
    Liste des ingredients
@endsection


@section('table')
    <table class="table table-striped col-md-12  table-hover">
        @foreach ($ingredients as $keys)
            <tr>
                <th>{{ $keys->nom }}</br>Stock : {{ $keys->stock }} </br><a
                            href="{{ route('detailsIngredients', ['id'=>$keys->id] )}}"
                            class="btn btn-primary">Details</a></th>
                </th></tr>
        @endforeach
    </table>

    <br>
    <!-- Form Name -->
    <legend>Formulaire d'ajout d'ingredient :</legend>

@endsection

@section('formulaire')
    @include('templateFormulaireIngredients')
@endsection
