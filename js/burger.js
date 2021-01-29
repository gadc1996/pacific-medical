const burger = document.querySelector(".burger");
const mobilMenu = document.querySelector(".mobil-nav");
const mobilLinks = document.querySelectorAll(".mobil-nav .nav-item");
const footer = document.querySelector("footer");

let isClosed = true;
burger.addEventListener("click", () => {
	if (isClosed) {
		mobilLinks.forEach((link) => (link.style.display = "block"));
		mobilMenu.style.width = "100%";
		isClosed = false;
	} else {
		mobilLinks.forEach((link) => (link.style.display = "none"));
		mobilMenu.style.width = "0%";
		isClosed = true;
	}
});
