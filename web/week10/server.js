var express = require("express");
var bodyParser = require('body-parser')

var app = express();

//var express = require('express');
//var path = require('path');
//app.use(express.static(path.join(__dirname, 'public')));
//app.use(express.static(__dirname + '/public'));
app.use(express.static("public"));

app.use(express.json());
app.use(express.urlencoded({ extended: true }));

app.set("views", "views");
app.set("view engine", "ejs");

app.get("/", function (req, res) {
    console.log("recieved a request of /");

    res.write("This is the root");
    res.end();
});


app.listen(8888, function () {
    console.log("The server is up and listening on Port 8888");
});

//controller adventurer choices
app.get("/start", function (req, res) {

    //adventureTime(encounter);

    var left = "Start going towards the left.";
    var forward = "Start by going forward.";
    var right = "Start going towards the right.";

    var params = { left: left, forward: forward, right: right };


    //view
    res.render("start", params);
});

app.post("/start", function (req, res) {

    //adventureTime(encounter);
    var adventureText = displayAdventureText();

    var left = displayTextLeft();
    var forward = displayTextForward();
    var right = displayTextRight();

    var params = { left: left, forward: forward, right: right , mainText: adventureText};


    //view
    res.render("start", params);
});


function adventureTime(encounter) {
    if (encounter == "enemy") {
        numberOnDice = 8;
        switch (rollDice()) {
    
            case 1:
                ; 
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
        enemy
    }
    
    if (encounter == "travel") {
        numberOnDice = 25;
        switch (rollDice()) {
    
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

function rollDice() {
    var randomNumber = Math.floor(Math.random() * numberOnDice) + 1;
    return randomNumber;
}

function takeDamage() {

}

function heal() {

}

function gainExp() {

}

function levelUp() {

}

function resetAdventurer() {

}