<?php

// This is how we console.log in php, called "dump and die":
function dd($value) {
  echo "<pre>";
  var_dump($value);
  echo "</pre>";
  die();
}
// dd($_SERVER['REQUEST_URI']); --> shows "SERVER" and the property of "REQUEST_URI"
function urlIs($value) {
  return $_SERVER['REQUEST_URI'] === $value;
}
