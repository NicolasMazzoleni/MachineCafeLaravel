@extends('templatePages')

@section('title')
VENTES
@endsection


@section('name')
Liste des ventes enregistrées
@endsection


@section('table')
<table class=" table table-striped col-md-12  table-hover">
@foreach ($ventes as $keys => $value)
<tr><th>Numéro de commande : {{ $keys }}<br> Date : {{$value['date']}}<br>Heure : {{$value['heure']}}<br>Nombre de sucre : {{$value['sucre']}}<br>Boisson : {{$value['boisson']}}</th></tr>
@endforeach
</table>
@endsection

