var edos = document.querySelectorAll(".land");

for (var i = 0; i < edos.length; i++) {
	count = Math.floor((Math.random() * 4) + 1);;
	if (count === 1) {
		edos[i].style.fill = '#FF0000';
	}
	if (count === 2) {
		edos[i].style.fill = '#00FF00';
	}
	if (count === 3) {
		edos[i].style.fill = '#0000FF';
	}
	if (count === 4) {
		edos[i].style.fill = '#FFA500';
	}
	
	edos[i].onmouseover = (e)=>{
		document.querySelector('#estados').innerHTML = e.target.attributes.title.nodeValue;
	}
	edos[i].onclick = (e)=>{
		location.href = "/estado/"+e.target.attributes.id.nodeValue;
	}
}