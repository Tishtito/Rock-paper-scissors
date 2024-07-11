<?php

declare(strict_types=1);

function is_input_empty($name, $contact){
    if (empty($name) || empty($contact)) {
        return true;
    } else {
        return false;
    }
}

function is_contact_played(object $pdo, $contact){
    if (get_contact($pdo, $contact)) {
        return true;
    } else {
        return false;
    }
}