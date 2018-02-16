<form method="post">
    <fieldset>
    {{ csrf_field() }}


    <!-- Text input-->
        <div class="form-group">
            <div class="col-md-12">
                @if ($details->nom != 'sucre')
                    <input id="" name="nom" type="text" placeholder="Nom" class="form-control input-md"
                           value="{{$details->nom}}" required>
                @elseif($details->nom === 'sucre')
                    <input id="" name="nom" type="hidden" placeholder="Nom" class="form-control input-md"
                           value="{{$details->nom}}" required>
                @endif
            </div>
        </div>


        <!-- Quantitee input-->
        <div class="form-group">
            <div class="col-md-12">
                <input id="" name="quantitee" type="number" placeholder="Quantitee" class="form-control input-md"
                       value="{{$details->stock}}" max="100" required>
            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-12 control-label"></label>
            <div class="col-md-12">
                <button id="" name="" class="btn btn-success">Confirmer</button>
            </div>
        </div>
    </fieldset>
</form>