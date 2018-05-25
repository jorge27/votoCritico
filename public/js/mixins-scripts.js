var models = document.querySelectorAll(".btn-model");

for (var i = 0; i < models.length; i++) {
	models[i].onclick = function () {
		var aux = document.querySelector(this.attributes['data-target'].nodeValue);
		var clase = aux.className;

		aux.className = clase + ' active';
	}
}

var close_model = document.querySelectorAll(".model-close");

for (var i = 0; i < close_model.length; i++) {
	close_model[i].onclick = function(){
		this.parentNode.parentNode.onclick = function () {
			var clase = this.className;
			var aux = clase.split('active');
			this.className = aux;
		}
	}
}