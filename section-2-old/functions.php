<?php

// This is how we console.log in php, called "dump and die":
function dd($value, $value2 = null, $value3 = null) {
  echo "<pre>";
  var_dump($value, $value2, $value3);
  echo "</pre>";
  die();
}
// dd($_SERVER['REQUEST_URI']); --> shows "SERVER" and the property of "REQUEST_URI"
function urlIs($value) {
  return $_SERVER['REQUEST_URI'] === $value;
}

function authorize($condition, $status = Response::FORBIDDEN){
  if (! $condition){
    abort($status);
  }
}