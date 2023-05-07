$(function(){
	
	var atual = -1;
	var maximo = $('.box-single-servicos').length - 1;
	var timer;
	var animacaoDelay = 3;

	executarAnimacao();
	function executarAnimacao(){
		$('.box-single-servicos').hide();
		timer = setInterval(logicaAnimacao,animacaoDelay*700);

		function logicaAnimacao(){
			atual++;
			if(atual > maximo){

				clearInterval(timer);
				return false;
			}

			//alert('chamando intervalo');

			$('.box-single-servicos').eq(atual).fadeIn();

		}

	}

})