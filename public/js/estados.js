var estado = (document.URL).split('/');
var number = estado.length-1;

var edo = document.querySelector('#'+estado[number].toUpperCase());
edo.style.fill = "red";