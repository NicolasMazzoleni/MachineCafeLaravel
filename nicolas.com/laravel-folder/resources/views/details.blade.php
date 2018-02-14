@extends('templatePages')

@section('title')
    Details
@endsection

@section('name')
    Details boisson
@endsection

@section('table')

    <!-- Form Name -->
    <h1>ID : {{$details->id}}</h1><h1>Boisson : {{$details->nom}}</h1><h1>Prix : {{$details->prix}} cts</h1><br></br>
    <h1>Ingredients :</h1>
    <table class=" table table-striped col-md-12  table-hover">
        @foreach ($ingredients as $ingredient)
            <tr>
                <td><h2>{{ $ingredient->nom }}</h2></td>
                <td>
                    <a href="/ingredients/{{$ingredient->id}}" class="btn btn-warning">Modifier</a>
                    <a href="/boisson/{{$details->id}}/delete-ingredient/{{$ingredient->id}}" class="btn btn-danger">Supprimer</a>
                </td>
            </tr>
        @endforeach
    </table>



    <form method="POST">
        {{ csrf_field() }}

        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" class="btn btn-danger">Supprimer la boisson</button>
    </form>
    <br><br>

    <!-- Form Name -->
    <legend>Formulaire de modification :</legend>
@endsection

@section('formulaire')
    @include('templateFormulaireDetails')
@endsection


