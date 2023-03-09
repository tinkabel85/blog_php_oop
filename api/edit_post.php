<?php

include('../import.php');

$id = $_POST['id'] ?? '';
$title = $_POST['title'] ?? '';
$content = $_POST['content'] ?? '';
$authorName = $_POST['author_name'] ?? '';

$post = POST::loadPost(new DatabaseEngine(), $id)->setTitle($title)->setAuthor(new Author($authorName))->setContent($content);
$post->save();