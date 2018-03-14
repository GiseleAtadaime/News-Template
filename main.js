var menu = document.querySelector('.menu_botao');
var main = document.querySelector('main');
var drawer = document.querySelector('.menu_cabecalho');
var slider = document.querySelector('.slide');
var scroll = document.querySelector('.slide_figure');


menu.addEventListener('click', function(e) {
	drawer.classList.toggle('colapsado');
	e.stopPropagation();
});
main.addEventListener('click', function() {
	drawer.classList.remove('colapsado');
});
//var hover = document.querySelector('.slide_img');
var botao = document.querySelector('.legend-wrap').children;
var indice=0;
var indiceAnterior = 0;
var pausa=true;

slider.addEventListener("mouseover", function(e) {
	pausa = false;
});
slider.addEventListener("mouseout", function(e) {
	pausa = true;
});

function autoBanner(){
	if(pausa){
		indiceAnterior = indice;
		if(indice >= 4){
			indice = -1;
		}
		indice++;
		troca(indice);
	}

	
}setInterval(autoBanner,4000);

function trocaimg(numero){
	indiceAnterior = indice;
	indice = numero;
	botao[indiceAnterior].className = 'legend_hero';
	troca(indice);
	
}

function troca(indice){
	slider.scrollLeft = scroll.offsetWidth * indice;
	botao[indiceAnterior].className = 'legend_hero';
	botao[indice].className = 'legend_hero legend_hero-active';	
}

function redirect(tipo,id){

	window.location.href="routes.php?tipo=" + tipo + "&id=" + id;
}