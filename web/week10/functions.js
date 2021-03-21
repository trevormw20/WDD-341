//document.getElementById("postRateButton").addEventListener("click", getParams);

var numberOnDice = 25;

function getParams() {
    console.log("getting param");

    var weight = document.getElementById("weight").value;
    console.log("param set 1");

    var type = document.getElementsByName("type").value;
    console.log("param set 2");
    calculateRate(type, weight);
}

function calculateRate(type, weight) {
    console.log("calcualating rates");
var postageRate = 0;
}


document.getElementById("leftDirection").addEventListener("click", moveLeft);
document.getElementById("forwardDirection").addEventListener("click", moveForward);
document.getElementById("rightDirection").addEventListener("click", moveRight);



function moveLeft() {
    console.log("moving left");
}

function moveForward() {
    
}

function moveRight() {
    
}

function displayTextLeft() {

}

function displayAdventureText() {

}

function death() {

}
