//document.getElementById("postRateButton").addEventListener("click", getParams);

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

if (type == "Letters (Stamped)") {
    switch (weight) {

        case 1:
            postageRate = 0.55; 
        break;

        case 2:
            postageRate = 0.75; 
        break;
        
        case 3:
            postageRate = 0.95; 
        break;
        
        case 3.5:
            postageRate = 1.15; 
        break;
        

        default:
            break;
    }
}

if (type == "Letters (Metered)") {
    switch (weight) {

        case 1: 
        postageRate = 0.51;
        break;

        case 2:
            postageRate = 0.71; 
        break;
        
        case 3:
            postageRate = 0.91; 
        break;
        
        case 3.5:
            postageRate = 1.11; 
        break;

        default:
            break;
    }
}

if (type == "Large Envelopes (Flats)") {
    switch (weight) {

        case 1: 
        postageRate = 1.00;
        break;

        case 2: 
        postageRate = 1.20;
        break;
        
        case 3: 
        postageRate = 1.40;
        break;
        
        case 4: 
        postageRate = 1.60;
        break;
        
        case 5: 
        postageRate = 1.80;
        break;
        
        case 6: 
        postageRate = 2.00;
        break;
        
        case 7: 
        postageRate = 2.20;
        break;
        
        case 8: 
        postageRate = 2.40;
        break;
        
        case 9: 
        postageRate = 2.60;
        break;
        
        case 10: 
        postageRate = 2.80;
        break;
        
        case 11: 
        postageRate = 3.00;
        break;
        
        case 12: 
        postageRate = 3.20;
        break;
        
        case 13: 
        postageRate = 3.40;
        break;

        default:
            break;
    }
}

if (type == "First-Class Package Service—Retail") {
    switch (weight) {

        case 1: 
        postageRate = 4.00;
        break;

        case 2: 
        postageRate = 4.00;
        break;
        
        case 3: 
        postageRate = 4.00;
        break;
        
        case 4: 
        postageRate = 4.00;
        break;
        
        case 5: 
        postageRate = 4.80;
        break;
        
        case 6: 
        postageRate = 4.80;
        break;
        
        case 7: 
        postageRate = 4.80;
        break;
        
        case 8: 
        postageRate = 4.80;
        break;
        
        case 9: 
        postageRate = 5.50;
        break;
        
        case 10: 
        postageRate = 5.50;
        break;
        
        case 11: 
        postageRate = 5.50;
        break;
        
        case 12: 
        postageRate = 5.50;
        break;
        
        case 13: 
        postageRate = 6.25;
        break;

        default:
            break;
    }
}


return postageRate;
}