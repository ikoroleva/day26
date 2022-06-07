<?php

session_start();

require_once 'DBBlackbox.php';
require_once '../audio-player/Author.php';

$id = $_GET['id'] ?? null;

if ($id) {
    //editing existing record
    $author = find($id,  'Author');
} else {

    //creating a new record
    $author = new Author;
}

$author->first_name = $_POST['first_name'] ?? $author->first_name;
$author->last_name = $_POST['last_name'] ?? $author->last_name;
$author->biography = $_POST['biography'] ?? $author->biography;
$author->image = $_POST['image'] ?? $author->image;

if ($id) {
    update($id, $author);
} else {
    $id = insert($author);
}

$_SESSION['flashed_messages']['success'][] = 'Data was successfully saved!';
//redirect to the form

header('Location: edit.php?id=' .$id);