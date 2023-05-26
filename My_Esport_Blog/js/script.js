

let Pen = document.getElementById("Pen");


let Modal = document.getElementById("Modal");

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


let Publication = document.getElementById("P");

/* let Pop_up = document.getElementById("Pop_up");
 */

/* onscroll = (event) => {
    Pop_up.style.display = "block";
} */ 


/* window.onclick = function (event) {
    if (event.target == Pop_up) {
        Pop_up.style.display = "none";
    }
};

 */




