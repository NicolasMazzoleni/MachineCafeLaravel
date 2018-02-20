let nbtotal = 0.00;
let money = [2, 1, 0.5, 0.2, 0.1, 0.05];

$(document).ready(function() {

	let toutSaufPm =
	$('.monnaie').html(nbtotal + ' €');
	$('#vue2').hide();

	$('.buttons').hover(function() {
		$(this).attr('src', $(this).attr('src').split('Normal').join('Hover'));
	}, function() {
		$(this).attr('src', $(this).attr('src').split('Hover').join('Normal'));
	}).mousedown(function() {
		$(this).attr('src', $(this).attr('src').split('Hover').join('Push'));
	}).mouseup(function() {
		$(this).attr('src', $(this).attr('src').split('Push').join('Hover'));
	});

	$('.coins').click(function(){
		let yo = $(this).attr('alt');
		nbtotal += money[yo];
		nbtotal = Math.round(nbtotal*100)/100;
		nbPiece[yo]++
		affichePiece();
		$('.monnaie').html(nbtotal + ' €');
	}).hover(function() {
		$(this).css('box-shadow', '0 0 20px white');
	}, function() {
		$(this).css('box-shadow', '0 0 0 white');
	}).mousedown(function() {
		$(this).css('padding',  '1px');
	}).mouseup(function() {
		$(this).css('padding', '0px');
	});

	$('#btnMoney img').click(function(){
		let etat = $(this).attr('src').split('.png').join('').split('assets/buttons/euro').join('');

		if (etat === 'Hover') {
			$(this).attr('src', $(this).attr('src').split('Hover').join('Push'));
		} else {
			$(this).attr('src', 'assets/buttons/euroHover.png');
		}
	    $('#moneyForm').toggleClass('hidden');
	    $(this).parent().toggleClass('backgroundGrey');
	}).hover(function() {
		let etat = $(this).attr('src').split('.png').join('').split('assets/buttons/euro').join('');
		if (etat === 'Normal') {
			$(this).attr('src', $(this).attr('src').split('Normal').join('Hover'));
		}
	}, function() {
		$(this).attr('src', $(this).attr('src').split('Hover').join('Normal'));
	});

	$('html').click(function() {
		$('#moneyForm').addClass('hidden');
		$('#btnMoney').removeClass('backgroundGrey');
		$('#btnMoney img').attr('src', 'assets/buttons/euroNormal.png');
	});
	$('.porteMonnaie').click(function(event){
	   event.stopPropagation();
	});

	$('.maintenance img').click(function() {
		 $('#vue2').is(':visible')
			$('#vue2').hide();
			$('#machine, #monnaieUser').fadeIn('slow');

	});

});