let tab = [10, 10, 10, 10];
let ing = ['Café', 'Chocolat', 'lait', 'Thé'];

function comptageStock (tabIng) {
    for (let i = 0; i < tab.length; i++) {
        tab[i] -= tabIng[i];
    }
    affichageJauges();
}

function affichageJauges() {
    let cafeLevel = tab[0]*10;
    let chocolatLevel = tab[1]*10;
    let capuccinoLevel = tab[2]*10;
    let theLevel = tab[3]*10;
    let hIng = $('#ingredientsCounter').height()/100;    

    let marg0 = hIng * (100 - cafeLevel);
    let marg1 = hIng * (100 - chocolatLevel);
    let marg2 = hIng * (100 - capuccinoLevel);
    let marg3 = hIng * (100 - theLevel);

    $('.compteurIngredients:eq(0)').height(cafeLevel + '%');
    $('.compteurIngredients:eq(0)').css('margin-top', marg0);

    $('.compteurIngredients:eq(1)').height(chocolatLevel + '%');
    $('.compteurIngredients:eq(1)').css('margin-top', marg1);

    $('.compteurIngredients:eq(2)').height(capuccinoLevel + '%');
    $('.compteurIngredients:eq(2)').css('margin-top', marg2);

    $('.compteurIngredients:eq(3)').height(theLevel + '%');
    $('.compteurIngredients:eq(3)').css('margin-top', marg3);
}



/*function gestionStock(_choix)
{    
    if(_choix === 'Thé')
    {
        if(tab[0] > 0)
        {
            tab[0]-=1;
            
        }

        else
        {
            $('.boissons').html('Thé épuisé')
            $('#gobelet img').hide();
        }
    }

    else if(_choix === 'Chocolat')
    {
        if(tab[1] > 0)
        {
            tab[1]-=1;
            console.log(tab)
        }

        else
        {
            $('.boissons').html('Chocolat épuisé')
            $('#gobelet img').hide();
        }
    }
    
    else if(_choix === 'Café')
    {
        if(tab[2] > 0)
        {
            tab[2]-=1;
        }

        else
        {
            $('.boissons').html('Café épuisé')
            $('#gobelet img').hide();
        }
    }
 
    else if(_choix === 'Capuccino')
    {
        //console.log(tab);
        if(tab[3] > 0 && tab[2] > 0)
        {
            tab[2]-=1;
            tab[3]-=1;
            console.log(tab);
        }
        
        else
        {
            $('.boissons').html('Capuccino épuisé')
            $('#gobelet img').hide();
            console.log(tab);
        }
    }
}*/
