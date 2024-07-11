<?php
declare(strict_types=1);

function check_play_errors() {
    if (isset($_SESSION["errors_play"])) {
        $errors = $_SESSION['errors_play'];

        echo "<br>";

        foreach ($errors as $error) {
            echo '<div class="card bg-danger text-white">' . $error . '</div>';
        }

        unset($_SESSION["errors_play"]);
    }
}