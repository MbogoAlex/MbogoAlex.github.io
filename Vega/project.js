var today = new Date();
var year = today.getFullYear();

function updateYear() {
	var el = document.getElementById("year");
	el.textContent = year;
}

updateYear();