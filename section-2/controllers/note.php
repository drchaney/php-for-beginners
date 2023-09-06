<?php

$config = require('config.php');
$db = new Database($config['database'], 'david');

$heading = "Note";
$currentUserId = 1;
// dd($_GET['id']); --> shows me the id of example.com/note?id=1, so "1"

$note = $db->query('select * from notes where id = :id', [
  'id' => $_GET['id']
])->fetch();

if (! $note){
  abort();
}

if ($note['user_id'] != $currentUserId){
  abort(Response::FORBIDDEN);
}

require "views/note.view.php";