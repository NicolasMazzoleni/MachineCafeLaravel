@extends('templatePages')

@section('title')
BOISSONS
@endsection


@section('name')
Liste des boissons
@endsection


@section('button')
<a href="/boisson" class="btn btn-sm btn-info">A-Z</a>
<a href="boissonZA" class="btn btn-sm btn-danger">Z-A</a>
<a href="boissonPC" class="btn btn-sm btn-warning">Prix Croissant</a>
<a href="boissonPD" class="btn btn-sm btn-success">Prix Decroissant</a>
@endsection


@section('table')
<br><br>
<!-- Form Name -->
<table class=" table table-striped col-md-12  table-hover">
	@foreach ($boissons as $keys)
		<tr><th>{{ $keys->nom }}</br>{{ $keys->prix }} Cts</br><a href="{{ route('details', ['id'=>$keys->id] )}}" class="btn btn-primary">Details</a></th></th></tr>
	@endforeach
</table>
<br>
<legend>Formulaire d'ajout de boisson :</legend>
@endsection

@section('formulaire')
    @include('templateFormulaireBoisson')
@endsection


