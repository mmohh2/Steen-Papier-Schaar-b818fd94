var userChoice;
var tegenstander;
var saying = "Jouw keuze is " + userChoice + ". Speler " + tegenstander
var win = " Je hebt gewonnen!";
var lose = " Je hebt verloren!";
var tie = " Gelijkspel!";

var winner = document.getElementById('winner');
var loser = document.getElementById('loser');
var tied = document.getElementById('tied');
var rock = document.getElementById("rock");
var paper = document.getElementById("paper");
var scissors = document.getElementById("scissors");
var myChoice = document.getElementById("myChoice");
var cpuChoice = document.getElementById("cpuChoice");
var verdict = document.getElementById("verdict");


rock.addEventListener("click", function(){
    userChoice = 0;
    myChoice.innerHTML = "Je hebt steen gekozen!";
    checkTegenstander();
    compare();
});
paper.addEventListener("click", function(){
    userChoice = 1;
    myChoice.innerHTML = "Je hebt papier gekozen!";
    checkTegenstander();
    compare();
});
scissors.addEventListener("click", function(){
    userChoice = 2;
    myChoice.innerHTML = "Je hebt schaar gekozen";
    checkTegenstander();
    compare();
});


function checkTegenstander() {

    randomNum = Math.floor(Math.random() * 3);


    if (randomNum === 0) {
        tegenstander = "steen";
    } else if (randomNum === 1) {
        tegenstander = "papier";
    } else {
        tegenstander = "schaar";
    }
    console.log('Speler koos ' + tegenstander);
}


function resultsTie() {
    verdict.innerHTML = tie;
    winner.style.display = 'none';
    loser.style.display = 'none';
    tied.style.display = 'block';
}
function resultsWinner() {
    verdict.innerHTML = win;
    winner.style.display = 'block';
    loser.style.display = 'none';
    tied.style.display = 'none';
}
function resultsLoser() {
    verdict.innerHTML = lose;
    winner.style.display = 'none';
    loser.style.display = 'block';
    tied.style.display = 'none';
}


function compare() {
    if (userChoice ===  randomNum) {
        resultsTie();
    } else if (userChoice === 0 && randomNum === 1) {
        resultsLoser();
    } else if (userChoice === 0 && randomNum === 2) {
        resultsWinner();
    }


    if (userChoice === 1 && randomNum === 0) {
        resultsWinner();
    }
    else if (userChoice === 1 && randomNum === 2) {
        resultsLoser();
    }


    if (userChoice === 2 && randomNum === 0) {
        resultsLoser();
    } else if (userChoice === 2 && randomNum === 1) {
        resultsWinner();
    }

    cpuChoice.innerHTML = "Speler koos: " + tegenstander;
}