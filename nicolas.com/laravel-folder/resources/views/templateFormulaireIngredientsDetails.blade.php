<form method="post">
<fieldset>
{{ csrf_field() }}


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>  
  <div class="col-md-12">
  <input id="" name="nom" type="text" placeholder="Nom" class="form-control input-md" value="{{$details->nom}}" required>
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12">
    <input id="" name="quantitee" type="number" placeholder="Quantitee" class="form-control input-md" value="{{$details->stock}}" required>
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