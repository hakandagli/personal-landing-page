const icon = document.querySelector("#nav-deneme");
var links = document.querySelector("#nav-links");
icon.addEventListener("click", run);
function run(e) {
    links.classList.toggle("responsive");
    return false;
}

window.addEventListener("scroll",function(){
    var navbar = document.querySelector("#navbar-container");
    navbar.classList.toggle("sticky", window.scrollY)
});

