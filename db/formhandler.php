<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $contact = $_POST["contact"];

    try {
        require_once "connect.php";
        require_once 'player_model.php';
        require_once 'player_contr.php';

        // ERROR HANDLERS
        $errors = [];

        if (is_input_empty($name, $contact)) {
            $errors["empty_input"] = "Fill in all Fields!";
        }

        if (is_contact_played( $pdo, $contact)) {
            $errors["contact_used"] = "Contact already Played!";
        }

        session_start();

        if ($errors) {
            $_SESSION["errors_play"] = $errors;
            header("Location: ../08-open.php");
            die();
        }

        $query = "INSERT INTO players (name, contact) VALUES (?, ?);";

        $stmt = $pdo->prepare($query);

        $stmt->execute([$name, $contact]);

        $pdo = NULL;
        $stmt = NULL;

        header("Location: ../08-rps.php");

        die();
    } catch (PDOException $e) {
        die("Query failed: " .$e->getMessage());
    }
} else {
    header("Location: ../08-open.php");
    die();
}