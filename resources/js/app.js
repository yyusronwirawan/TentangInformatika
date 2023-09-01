import "./bootstrap";
import "flowbite";
import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

// Hamburger
const hamburger = document.querySelector("#hamburger");
const navMenu = document.querySelector("#nav-menu");

hamburger.addEventListener("click", function () {
    hamburger.classList.toggle("hamburger-active");
    navMenu.classList.toggle("hidden");
});
