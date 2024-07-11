<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/photos/rock-paper-scissors.png">
    <title>Rock-Paper-Scissors</title>
    <link rel="stylesheet" href="css/08.css">
    <link rel="stylesheet" href="css/pop-up.css">
</head>
<body>
    <div class="topnav">
        <a href=""><img src="photos/Safaricom_logo.png" alt=""></a>
        <a href="#news"><img class="profil-pic" src="photos/profile-user.png" alt=""></a>
    </div>

    <div class="content">
        <p class="title">Rock Paper Scissors</p>


        <button class="move-buttons" onclick="
            playgame('rock');
        "><img src="photos/rock-emoji.png" class="move-icon" alt="rock"></button>

        <button class="move-buttons" onclick="
            playgame('paper');
        "><img src="photos/paper-emoji.png" class="move-icon" alt="paper"></button>
            
        <button class="move-buttons" onclick="
            playgame('scissors');
        "><img src="photos/scissors-emoji.png" class="move-icon" alt="scissors"></button>

        <p class="js-result result"></p>

        <p class="js-moves"></p>

        <p class="js-score score"></p>

        <button class="reset-score-button" onclick="
            score.wins = 0;
            score.losses = 0;
            score.ties = 0;
            localStorage.removeItem('score');
            updatescoreElement();
        ">Reset Score</button>
    </div>

    <div class="pop-up" id="repeatpopup">
        <img src="photos/reloading.png" alt="reload">
        <h2>It's a Tie</h2>
        <button type="button" onclick="closerepeatPopup()">Try Again</button>
    </div>

    <div class="pop-up" id="winpopup">
        <img src="photos/medal.png" alt="reload">
        <h2>You Win</h2>
        <button type="button" onclick="closewinPopup()">See Award</button>
    </div>

    <div class="pop-up" id="losepopup">
        <img src="photos/lose.png" alt="reload">
        <h2>You Lose</h2>
        <a href="08-open.php"><button type="button" onclick="closelosePopup()">You Tried Your Best</button></a>

    <script src="js/08-rps.js"></script>

</body>
</html> 