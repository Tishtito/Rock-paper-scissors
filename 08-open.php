<?php 
    session_start();
    require_once 'db/player_view.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/open.css">
    <link rel="stylesheet" href="css/apply-form.css">
    <link rel="icon" type="image/x-icon" href="/photos/rock-paper-scissors.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <title>Open Game</title>
</head>
<body>
    <div class="topnav">
        <a href=""><img src="photos/Safaricom_logo.png" alt=""></a>
    </div>

    <div class="body">
            <h1>Hello There!<span class="emoji" style="font-size: 38px;"> &#x1F44B;</span></h1>   
            <p><span class="emoji">&#9994;</span><span class="emoji1">&#9995;</span><span class="emoji2">&#9996;</span></p>
            <p class="p1">Try Your Luck and Win a Prize!!</p>
            <button onclick="openapplypopup();" class="btn btn-success">Play</button>
    </div>

    <div class="container" id="apply-form"> 
        <form action="db/formhandler.php" method="post">
            <legend>Enter Details</legend>

            <div class="form-group">
                <input type="text" class="form-control" name="name" id="name" placeholder="Name: ">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="contact" id="contact" placeholder="Phone Number: ">
            </div>

            <div class="form-btn">
                <input type="submit" class="btn btn-success" value="apply" name="submit">
            </div>
        </form>
        
        <!--call function to diplay error-->
        <?php
            check_play_errors();
        ?>
       
    </div>

   

    <script src="js/apply-form.js"></script>

</body>
</html>