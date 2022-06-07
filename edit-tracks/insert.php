<?php

require_once '../audio-player/Track.php';
require_once 'DBBlackbox.php';



$track = new Track;

$track->title = $_POST['title'] ?? $track->title;
$track->length = $_POST['length'] ?? $track->length;
$track->image = $_POST['image'] ?? $track->image;
$track->track_url = $_POST['track_url'] ?? $track->track_url;

$id = insert($track);

//include 'create.php';

// if (!empty($_POST['title'])) {

//     $track->title = $_POST['title'];
// } else {
//     $track->title = $track->title
// }
