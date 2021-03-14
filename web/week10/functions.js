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
