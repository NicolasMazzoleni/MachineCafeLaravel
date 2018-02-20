<form method="post">
    <fieldset>
    {{ csrf_field() }}



    <!-- Text input-->
        <div class="form-group">
            <label class="col-md-12 control-label" for=""></label>
            <div class="col-md-12">
                <input id="" name="nom" type="text" placeholder="Nom" class="form-control input-md">
            </div>
        </div>

        <!-- Password input-->
        <div class="form-group">
            <label class="col-md-12 control-label" for=""></label>
            <div class="col-md-12">
                <input id="" name="quantitee" type="text" placeholder="Quantitée" class="form-control input-md"
                >

            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-12 control-label" for=""></label>
            <div class="col-md-12">
                <button id="" name="" class="btn btn-success">Confirmer</button>
            </div>
        </div>

        @if(count($errors))
            <div class="form-group">
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error  }}</li>
                    </ul>
                    @endforeach
                </div>
            </div>
        @endif
    </fieldset>
</form>
