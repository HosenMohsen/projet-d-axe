const nav = document.querySelector(".parti_gauche ul");
nav.style.position = "fixed";

const nav2 = document.querySelector(".parti_droite ul");
nav2.style.position = "fixed";


const trash = document.getElementsByClassName("trash");
const card = document.getElementsByClassName("card_container")
const supp = document.getElementById("Supp");

const Oui = document.getElementById("Btn_oui");
const Non = document.getElementById("Btn_non");

const croix = document.querySelector(".supp p");


var svg = document.querySelector(".svg2");
console.log(svg)
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









for (const i in trash) {
    trash[i].addEventListener("click", () => {
        supp.style.display = "block";
        Oui.onclick = function () {
            supp.style.display = "none";
        }
        Non.onclick = function () {
            supp.style.display = "none"
        }
    });
};










function openNav() {
    document.getElementById("sideNavigation").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
};
function closeNav() {
    document.getElementById("sideNavigation").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
};


