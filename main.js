var menu = document.querySelector('.menu_botao');
var main = document.querySelector('main');
var drawer = document.querySelector('.menu_cabecalho');

menu.addEventListener('click', function(e) {
	drawer.classList.toggle('colapsado');
	e.stopPropagation();
});
main.addEventListener('click', function() {
	drawer.classList.remove('colapsado');
});