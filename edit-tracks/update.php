<?php

require_once 'DBBlackbox.php';
require_once '../audio-player/Track.php';

$id = $_GET['id'];

$track = find($id,  'Track');

$track->title = $_POST['title'] ?? $track->title;
$track->length = $_POST['length'] ?? $track->length;
$track->image = $_POST['image'] ?? $track->image;
$track->track_url = $_POST['track_url'] ?? $track->track_url;

update($id, $track);