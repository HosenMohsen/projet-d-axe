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




croix.onclick = function(){
    supp.style.display ="none"
};

for (const i in trash) {
    trash[i].addEventListener("click", () => {
        supp.style.display = "block";
        Oui.onclick = function () {
            supp.style.display = "none";
            for (const j in card)
                card[j].style.display = "none"
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


