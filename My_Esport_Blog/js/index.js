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




const buttons = document.querySelectorAll("#tag_list li");
const card = document.querySelectorAll(".card");



buttons.forEach(button => {
    button.addEventListener("click", () =>{
    let tag = button.getAttribute('data-tag');
        card.forEach(tweet =>{
                if(tweet.classList.contains(tag)){
                    tweet.style.display = "flex";
                } else {
                    tweet.style.display = "none";
                }          
        });
    })
       
});



const resets = document.querySelectorAll("#reset_list li");

resets.forEach(element =>{
    element.addEventListener("click", ()=>{
        card.forEach(tweet =>{
            tweet.style.display = "flex";
        })
    });
});


const trash = document.querySelectorAll(".trash");
const supp = document.getElementById("Supp");

const Oui = document.querySelectorAll("#Btn_oui");
const Non = document.querySelectorAll("#Btn_non");


const croix = document.querySelectorAll(".supp p");

trash.forEach( Element => {
   let supp = Element.nextElementSibling.nextElementSibling
   let non = supp.querySelector('#Btn_non')
   let Croix = supp.querySelector('.supp p')
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


var parti_droite = document.querySelector(".parti_droite ul");

parti_droite.style.position = "fixed";
parti_droite.style.top = 0;


var logoMEB = document.querySelector(".logo_MEB");
logoMEB.style.position = "fixed";


function openNav() {
    document.getElementById("sideNavigation").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
};
function closeNav() {
    document.getElementById("sideNavigation").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
};


var Svg = document.querySelector(".svg");
Svg.style.position = "fixed";
Svg.style.top = "0%";





var select = document.getElementById("nav_tag");
var message = document.getElementById("Message");




if(localStorage.getItem("tag")){
    select.value = localStorage.getItem("tag");
}

if(localStorage.getItem("texte")){
    message.value = localStorage.getItem("texte");
}

select.addEventListener("input", function(){
    localStorage.setItem("tag", select.value);
});

message.addEventListener("input", function(){
    localStorage.setItem("texte", message.value)
});







const hearts = document.querySelectorAll(".heart");


hearts.forEach(element => {
    element.addEventListener("click", () =>{
        console.log("yo");
        element.classList.toggle("red");
    });
});






