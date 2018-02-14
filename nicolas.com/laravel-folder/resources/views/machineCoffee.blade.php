@extends('templatePages')

@section('title')
    MACHINE
@endsection


@section('name')
    COFFEE LAND
@endsection


@section('machineCoffee')
    <h2></h2>

    <form method="post">
        <fieldset>
        {{ csrf_field() }}

        <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-12 control-label" for="selectbasic"><h3>Choix boisson : </h3></label>
                <div class="col-md-12">
                    <select id="selectbasic" name="boisson_id" class="form-control">
                        @foreach ($boissons as $boisson)
                            <option value="{{ $boisson->id }}">
                                <tr>{{ $boisson->nom }}</tr>
                            </option>
                        @endforeach
                    </select>


                    <label class="col-md-12 control-label" for="selectbasic"><h3>Choix sucre :</h3></label>

                    <select id="selectbasic" name="nbsucre" class="form-control">
                        @for($i=0; $i <= $ingredients->stock && $i <= 5; $i++)
                            <option value="{{ $i }}">
                                <tr>{{ $i }}</tr>
                            </option>
                        @endfor

                    </select>
                    <button  id="" name="" class="btn btn-success">Commander</button>
                </div>
            </div>

        </fieldset>
    </form>
@endsection()