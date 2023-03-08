<?php

include('../import.php');
// delete_post.php?id=18342948

$id = $_GET['id'] ?? 0;

if (empty($id)) {
  die('');
}

(new Post(new DatabaseEngine()))->setId($id)->delete();


//call the static function
//Post::loadPost(new DatabaseEngine(), 1234);