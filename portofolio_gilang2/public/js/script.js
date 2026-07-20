// =========================
// Navbar Scroll
// =========================

window.addEventListener("scroll", function () {

    const navbar = document.querySelector(".navbar");

    navbar.classList.toggle("scrolled", window.scrollY > 30);

});


// =========================
// Typing Effect
// =========================

if(document.querySelector("#typing")){

new Typed("#typing",{

strings:[

'Laravel Developer',

'Database Administrator',


],

typeSpeed:70,

backSpeed:50,

loop:true

});

}