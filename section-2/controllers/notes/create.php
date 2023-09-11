<?php

require 'Validator.php';

$config = require 'config.php';
$db = new Database($config['database']);
$heading = "Create a note";
// dd($_SERVER); -- view ALL details about the server
// dd($_POST); -- view the post (what came across on the user's form)

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];

    if (! Validator::checkStringLength($_POST['note'], 1, 1000)){
        $errors['note'] = 'A note has at least one character and is shorter than a novel (1k char max)';
    }

    if (empty($errors)) {
        $db->query('INSERT INTO notes(note, user_id) VALUES(:note, :user_id)', [
            'note' => $_POST['note'],
            'user_id' => 1
        ]);
    }
}

require 'views/notes/create.view.php';