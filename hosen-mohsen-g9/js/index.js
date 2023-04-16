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

const card = document.querySelectorAll(".card_container");
console.log(card);


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




const buttons = document.querySelectorAll("#tag_list li")
console.log(buttons);



buttons.forEach(button => {
    button.addEventListener("click", () =>{
    let tag = button.getAttribute('data-tag');
    console.log(tag);
        card.forEach(tweet =>{
                if(tweet.classList.contains(tag)){
                    tweet.style.display = "block";
                } else {
                    tweet.style.display = "none";
                }          
        });
    })
       
});


btn7 = document.getElementById("btn7");

btn7.addEventListener("click", () =>{
    console.log(btn7);
    card.style.display = "block";
})




for (const block in card) {
    card[block].addEventListener("click", (event) => {
        for (const count in heart) {
            console.log(heart);
            heart[count].classList.toggle("red")
        }
    })
};




