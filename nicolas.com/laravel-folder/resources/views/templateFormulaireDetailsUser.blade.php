<form method="post">
    <fieldset>
        {{ csrf_field() }}
            <!-- Text input-->
                <legend>Formulaire de modification :</legend>

        <div class="form-group">
            <label class="col-md-12 control-label" for="selectbasic">Nom</label>
            <div class="col-md-12">
                <input id="" name="name" type="text" placeholder="Name" class="form-control input-md"
                       value="{{$user->name}}" required>
            </div>
        </div>

        <!-- Role input-->
            <div class="form-group">
                <label class="col-md-12 control-label" for="selectbasic">Rôle</label>
                <div class="col-md-12">
                    <select id="selectbasic" name="type" class="form-control">
                        <option value="user">user</option>
                        <option value="admin">admin</option>
                    </select>
                </div>
            </div>

    <!-- Button -->
        <div class="form-group">
            <label class="col-md-12 control-label" for=""></label>
            <div class="col-md-12">
                <button id="" name="" class="btn btn-success">Confirmer</button>
            </div>
        </div>
    </fieldset>
</form>