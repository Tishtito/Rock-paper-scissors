let score = (JSON.parse(localStorage.getItem('score'))) || {
    wins: 0,
    losses: 0,
    ties: 0
};



updatescoreElement();            

let rounds = 0;

let repeatpopup = document.getElementById("repeatpopup")
let winpopup = document.getElementById("winpopup")
let losepopup = document.getElementById("losepopup")

function playgame(playMove) {
    const computermove = pickComputerMove();

    let result = '';
    if (playMove === 'scissors') {
        if (computermove === 'rock') {
            result = 'You lose.';
        } else if (computermove === 'paper') {
            result = 'You win.';
        } else if (computermove === 'scissors') {
            result = 'Tie.';
        }
    } else if (playMove === 'paper') {
        if (computermove === 'rock') {
            result = 'You win.';
        } else if (computermove === 'paper') {
            result = 'Tie.';
        } else if (computermove === 'scissors') {
            result = 'You lose.';
        }
    } else if (playMove === 'rock') {
        if (computermove === 'rock') {
            result = 'Tie.';
        } else if (computermove === 'paper') {
            result = 'You lose.';
        } else if (computermove === 'scissors') {
            result = 'You win.';
        }
    }

    if (result === 'You win.') {
        score.wins += 1;
    } else if (result === 'You lose.') {
        score.losses += 1;
    } else if (result === 'Tie.') {
        score.ties += 1;
    }

    rounds++;

    if (rounds === 3) {
        if (score.wins > 1) {
            result = 'You win the best out of three!';
            openwinPopup();
        } else if (score.losses > 1) {
            result = 'You lose the best out of three!';
            openlosePopup();
        } else {
            result = 'It\'s a tie in the best out of three!';
           openrepeatPopup();
        }
        
        // Reset rounds and score
        rounds = 0;
        score.wins = 0;
        score.losses = 0;
        score.ties = 0;
        localStorage.removeItem('score');
    }

    localStorage.setItem('score', JSON.stringify(score));
    updatescoreElement();

    document.querySelector('.js-result').innerHTML = result;

    document.querySelector('.js-moves').innerHTML =
        `You
        <img class="move-icon" src="photos/${playMove}-emoji.png" alt="rock">
        <img class="move-icon" src="photos/${computermove}-emoji.png" alt="scissors">
        computer`;
}


function openrepeatPopup(){
    repeatpopup.classList.add("open-pop-up")
}

function openwinPopup(){
    winpopup.classList.add("open-pop-up")
}

function openlosePopup(){
    losepopup.classList.add("open-pop-up")
}

function closerepeatPopup(){
    repeatpopup.classList.remove("open-pop-up")
}

function closewinPopup(){
    winpopup.classList.remove("open-pop-up")
}

function closelosePopup(){
    losepopup.classList.remove("open-pop-up")
}

function updatescoreElement(){
    document.querySelector('.js-score').innerHTML = `Wins: ${score.wins}, Losses: ${score.losses}, Ties: ${score.ties}`;
}



function pickComputerMove(){
    const randomNumber = Math.random();

    let computermove = ' ';

    if(randomNumber >= 0 && randomNumber < 1/3){
        computermove = 'rock'; 
    } else if(randomNumber >= 1/3 && randomNumber < 2/3){
        computermove = 'paper';
    }else if(randomNumber >= 2/3 && randomNumber <1){
        computermove = 'scissors';
    }

    return computermove;
}

fetch("")