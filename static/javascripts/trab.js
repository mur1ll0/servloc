$(function(){
	//Formatação de texto para 2 casas decimais
	var decimal = $('.js-decimal');
	decimal.maskmoney({thousands:'.', decimal:',', precision:2});
	
	var integer = $('.js-integer');
	integer.maskmoney({thousands:'.', precision:0});
});
