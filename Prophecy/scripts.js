const hamburger = document.querySelector(".hamburger");
const mobile_menu = document.querySelector(".nav ul");
const menu_item = document.querySelectorAll(".nav ul li a");
const header = document.querySelector(".head");


hamburger.addEventListener("click",() => {
	hamburger.classList.toggle("active");
	mobile_menu.classList.toggle("active");
});

document.addEventListener("scroll", () => {
	var scroll_position = window.scrollY;
	if(scroll_position > 250){
		header.style.backgroundColor = "rgb(222, 220, 220)";
	}else{
		header.style.backgroundColor = "transparent";
	}
});

menu_item.forEach((item) => {
	item.addEventListener("click", () => {
		  hamburger.classList.toggle("active");
	      mobile_menu.classList.toggle("active");
		});
});