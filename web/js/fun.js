var imgHover = document.getElementById("imgHover");
imgHover.addEventListener("mouseover", hoverChange());
imgHover.addEventListener("mouseout", revertHover);

function hoverChange() {
//this.style.backgroundImage = "img/zombies.jpg" ;
}

function revertHover() {
    //this.style.backgroundImage = "img/me.jpg" ;  
}