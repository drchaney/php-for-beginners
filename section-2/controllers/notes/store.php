<?php

use Core\Validator;
use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$errors = [];

if (! Validator::string($_POST['note'], 1, 1000)) {
    $errors['note'] = 'A body of no more than 1,000 characters is required.';
}

if (! empty($errors)) {
    return view("notes/create.view.php", [
        'heading' => 'Create Note',
        'errors' => $errors
    ]);
}

$db->query('INSERT INTO notes(note, user_id) VALUES(:note, :user_id)', [
    'body' => $_POST['note'],
    'user_id' => 1
]);

header('location: /notes');
die();