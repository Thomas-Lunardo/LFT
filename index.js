const icon = document.querySelector(".fa-bars");
const list = document.querySelector(".nav-list-mobile");

icon.addEventListener("click", function () {
	list.classList.toggle("list-visible");
	list.classList.toggle("icon-visible");
});
