<form method="post">
    <fieldset>
    {{ csrf_field() }}

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-12 control-label" for="selectbasic">Choix boisson</label>
            <div class="col-md-12">
                <select id="selectbasic" name="boisson_id" class="form-control">
                    @foreach ($boissons as $boisson)
                        <option value = "{{ $boisson->id }}" <tr>{{ $boisson->nom }}</tr></option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-12 control-label" for="selectbasic">Choix ingredient</label>
            <div class="col-md-12">
                <select id="selectbasic" name="ingredient_id" class="form-control">
                    @foreach ($ingredients as $ingredient)
                        <option value = "{{ $ingredient->id }}" <tr>{{ $ingredient->nom }}</tr></option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-12 control-label" for="">Nombre de dose(s)</label>
            <div class="col-md-12">
                <input id="" name="nbdose" min="0" max="10" type="number" placeholder="Nombre de dose(s)" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-12 control-label" for=""></label>
            <div class="col-md-12">
                <button id="" name="" class="btn btn-success">Ajouter la recette</button>
            </div>
        </div>

    </fieldset>
</form>