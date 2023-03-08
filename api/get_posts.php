<?php

include('../import.php');

$databaseEngine = new DatabaseEngine();

$post = new Post($databaseEngine);

$posts = $post->displayAllPosts($databaseEngine);

foreach ($posts as $post) {
  echo "<h1>" . $post->getTitle() . "</h1>";
  echo "<p>" . $post->getContent() . "</p>";
  echo "<p>By: " . $post->getAuthor()->getName() . "</p>";
  echo "<hr>";
}
