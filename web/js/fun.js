var imgHover = document.getElementById("imgHover");
imgHover.addEventListener("mouseover", hoverChange);
imgHover.addEventListener("mouseout", revertHover);

function hoverChange() {
this.body.style.backgroundImage = "url('img/me.jpg')" ;
}

function revertHover() {
    this.body.style.backgroundImage = "url('img/zombies.jpg')" ;
}