<!DOCTYPE html>
<html>
<head>
    <title>COFFEE LAND</title>
    <meta author="Ilot3-JS">
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/vueClient.css">
    <link href='https://fonts.googleapis.com/css?family=Basic' rel='stylesheet'>

    <script type="text/javascript" src="js/buttons.js"></script>
    <script type="text/javascript" src="js/zoneSucres.js"></script>
    <script type="text/javascript" src="js/selectDrink.js"></script>
    <script type="text/javascript" src="js/gestionStockDrinks.js"></script>
    <script type="text/javascript" src="js/monnayeur_V3.js"></script>
    <script>
        var currentStockSucre ={{$currentStockSucre}};
        var boissons ={!! $boissons->toJson() !!};

        console.log(boissons);
    </script>

</head>

<body>
<form method="post">
    <fieldset>
        {{ csrf_field() }}
        <div id="machine">

            <div id="moneyForm" class="hidden porteMonnaie">
                <img class="coins porteMonnaie" src="assets/pieces/2euro.png" alt="0">
                <img class="coins porteMonnaie" src="assets/pieces/1euro.png" alt="1">
                <img class="coins porteMonnaie" src="assets/pieces/50cent.png" alt="2">
                <img class="coins porteMonnaie" src="assets/pieces/20cent.png" alt="3">
                <img class="coins porteMonnaie" src="assets/pieces/10cent.png" alt="4">
                <img class="coins porteMonnaie" src="assets/pieces/5cent.png" alt="5">
            </div>

            <div id="afficheur">

                <div id="gauche">
                    <img id="btnGauche" class="buttons" src="assets/buttons/gaucheNormal.png" alt="Gauche">
                </div>

                <div id="affichageChoix" class="text-center">

                    <div class="boissons">Veuillez selectionner une boisson</div>

                </div>

                <div id="droite">
                    <img id="btnDroite" class="buttons" src="assets/buttons/droiteNormal.png" alt="Droite">
                </div>

                <div id="chargement"></div>

            </div>

            <div id="monnayeur">

                <div id="btnMoney" class="porteMonnaie">
                    <img class="porteMonnaie" src="assets/buttons/euroNormal.png" alt="euro">

                </div>

                <div id="fente">
                    <img src="assets/monnayeur/fente.png" alt="fente">
                </div>

                <div id="btnResetMonnaie">

                    <img class="buttons" src="assets/buttons/resetNormal.png" alt="reset">

                </div>

                <div id="retourMonnaie">
                    <img src="assets/monnayeur/retourMonnaie.png" alt="monnaie">
                </div>

            </div>

            <div id="btnValider">

                <div id="afficheurMonnaie">
                    <p class="monnaie" id="monnaieUser"></p>
                    <img id="validation" src="assets/monnayeur/ecranMonnaie.png" alt="monnaie">
                </div>

                <input class="buttons" type="image" src="assets/buttons/validerNormal.png" alt="valider">
            </div>

            <div id="zoneSucre">
                <div id="btnPlus">
                    <img class="buttons" src="assets/buttons/plusNormal.png" alt="plus">
                </div>


                {{--   <select id="selectbasic" name="nbsucre" class="form-control">--}}

                <div id="ledSucres" name="nbsucre">
                    <img id="leds" src="assets/led0sucres.png" alt="ledSucre">
                </div>

                <div id="btnMoins">
                    <img class="buttons" src="assets/buttons/moinsNormal.png" alt="moins">
                </div>
            </div>

            <div class="maintenance">
                @if (Illuminate\Support\Facades\Auth::check())
                    <a href="{{url('vente')}}">
                        @else
                            <a href="{{url('login')}}">
                                @endif
                                <img class="buttons" src="assets/buttons/adminNormal.png"></a>
            </div>

            <div id="gobelet">

                <div id="Lait" class="ingredients"></div>

                <div id="Eau" class="ingredients"></div>
                <div id="Chocolat" class="ingredients"></div>
                <div id="Café" class="ingredients"></div>
                <div id="Thé" class="ingredients"></div>
                <div id="Sucre" class="ingredients"></div>
            </div>
        </div>
        </div>


        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-12 control-label" for="selectbasic"><h3>Choix boisson : </h3></label>
            <div class="col-md-12">

                <input type="hidden" min="0" max="{{$currentStockSucre}}" class="choixSucre form-control" name="nbsucre">
                </input>

                <input type="number" id="selectbasic" name="boisson_id" class="choixBoisson form-control">

                    @foreach ($boissons as $boisson)

                            <option value="{{ $boisson->id }}">
                                <tr>{{ $boisson->nom }}</tr>
                            </option>
                    @endforeach
                </input>
            </div>
        </div>

    </fieldset>
</form>
</body>
</html>