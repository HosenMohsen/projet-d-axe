const nav = document.querySelector(".parti_gauche ul");
nav.style.position = "fixed";

const nav2 = document.querySelector(".parti_droite ul");
nav2.style.position = "fixed";


const trash = document.querySelectorAll(".trash");
const supp = document.getElementById("Supp");

const Oui = document.querySelectorAll("#Btn_oui");
const Non = document.querySelectorAll("#Btn_non");


const croix = document.querySelectorAll(".supp p");

trash.forEach( Element => {
   let supp = Element.nextElementSibling.nextElementSibling
   let non = supp.querySelector('#Btn_non')
   let Croix = supp.querySelector('.supp p')
   console.log(non)
    Element.addEventListener("click", () =>{
        supp.style.display = "block";
        non.addEventListener("click", () =>{
            supp.style.display = "none";
        });
        Croix.addEventListener("click", () =>{
            supp.style.display = "none";
        });
    });
});

Oui.forEach(yes =>{
    yes.addEventListener("click", () =>{
        supp.style.display = "none";
    })
})






var svg = document.querySelector(".svg2");
svg.style.position = "fixed";
svg.style.top = 0;



let Pen = document.getElementById("Pen");
let span = document.getElementsByClassName("close")[0];

Pen.onclick = function () {
    Modal.style.display = "block";
};

span.onclick = function () {
    Modal.style.display = "none";
};

window.onclick = function (event) {
    if (event.target == Modal) {
        Modal.style.display = "none";
    }
};



croix.onclick = function(){
    supp.style.display ="none"
};


var parti_gauche = document.querySelector(".parti_gauche ul");
var parti_gaucheOffsetTop = parti_gauche.offsetTop;

window.addEventListener("scroll", () => {
    if (window.scrollY >= parti_gaucheOffsetTop) {
        parti_gauche.style.position = "fixed";
        parti_gauche.style.top = 0;
    }
    else {
        parti_gauche.style.position = "static";
    }
});


var parti_droite = document.querySelector(".parti_droite ul");

parti_droite.style.position = "fixed";
parti_droite.style.top = 0;




function openNav() {
    document.getElementById("sideNavigation").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
};
function closeNav() {
    document.getElementById("sideNavigation").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
};


