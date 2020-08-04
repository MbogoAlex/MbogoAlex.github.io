var MenuItems = document.getElementById("MenuItems");

MenuItems.style.maxHeight = "0px";

function menutoggle() {
	if(MenuItems.style.maxHeight == "0px")
	{
		MenuItems.style.maxHeight = "200px"
	}
	else
	{
		MenuItems.style.maxHeight = "0px"
	}
}

//js for year

var today = new Date();
var year = today.getFullYear();

function updateYear() {
	var el = document.getElementById("year");
	el.textContent = year;

}

updateYear();

