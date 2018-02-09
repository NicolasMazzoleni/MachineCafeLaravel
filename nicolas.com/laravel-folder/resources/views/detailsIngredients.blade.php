@extends('templatePages')

@section('title')
Details
@endsection


@section('name')
Details ingredients : 
<tr><td><h1>ID : {{$details->id}}<br>Ingredients : {{$details->nom}}<br>Stock Courant : {{$details->stock}}<br>



<form method="POST">
	{{ csrf_field() }}
    <input type="hidden" name="_method" value="DELETE">
	<button type="submit" class="btn btn-warning">Supprimer</button>
</form>

</td></tr>
<br><br>

	<!-- Form Name -->
<legend>Formulaire de modification :</legend>
@endsection

@section('formulaire')
    @include('templateFormulaireIngredientsDetails')
@endsection
