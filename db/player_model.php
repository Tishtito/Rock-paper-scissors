<?php 

declare(string_type=1);

function get_contact(object $pdo, $contact) {
    $query = "SELECT contact FROM players WHERE contact = :contact;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":contact", $contact);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}