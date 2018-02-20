<!DOCTYPE html>
<html>
<head>
    <title>Machine à café</title>
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
</head>

<body>

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

        <div id="gauche" >
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

        <img class="buttons" src="assets/buttons/validerNormal.png" alt="valider">
    </div>

    <div id="zoneSucre">
        <div id="btnPlus">
            <img class="buttons" src="assets/buttons/plusNormal.png" alt="plus">
        </div>

        <div id="ledSucres">
            <img id="leds" src="assets/led3sucres.png" alt="ledSucre">
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
            <img class="buttons" src="assets/buttons/adminNormal.png" ></a>
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

{{--<div id="vue2">

    <div id="coinsCounter">

        <div id="2euro" class="compteur">
            <img src="assets/pieces/2euro.png">
            <img src="assets/ecranMonnaie.png">
            <p class="displayCount"></p>
        </div>

        <div id="1euro" class="compteur">
            <img src="assets/pieces/1euro.png">
            <img src="assets/ecranMonnaie.png">
            <p class="displayCount"></p>
        </div>

        <div id="50cent" class="compteur">
            <img src="assets/pieces/50cent.png">
            <img src="assets/ecranMonnaie.png">
            <p class="displayCount"></p>
        </div>

        <div id="20cent" class="compteur">
            <img src="assets/pieces/20cent.png">
            <img src="assets/ecranMonnaie.png">
            <p class="displayCount"></p>
        </div>

        <div id="10cent" class="compteur">
            <img src="assets/pieces/10cent.png">
            <img src="assets/ecranMonnaie.png">
            <p class="displayCount"></p>
        </div>

        <div id="5cent" class="compteur">
            <img src="assets/pieces/5cent.png">
            <img src="assets/ecranMonnaie.png">
            <p class="displayCount"></p>
        </div>

    </div>

    <div id="ingredientsCounter">
        <div id='the' class="compteurIngredients">
        </div>

        <div id='chocolat' class="compteurIngredients">
        </div>

        <div id='capuccino' class="compteurIngredients">
        </div>

        <div id='cafe' class="compteurIngredients">
        </div>

        <img id="imgCafe "src="assets/ecranMonnaie.png">
        <p class="displayIng">Café</p>

        <img src="assets/ecranMonnaie.png">
        <p class="displayIng">Choco</p>

        <img src="assets/ecranMonnaie.png">
        <p class="displayIng">Lait</p>

        <img src="assets/ecranMonnaie.png">
        <p class="displayIng">Thé</p>
    </div>

    <div class="maintenance">
        <img class="buttons" src="assets/buttons/adminNormal.png">
    </div>
</div>--}}


</div>
</body>
</html>