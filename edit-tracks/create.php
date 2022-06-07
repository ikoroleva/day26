<?php
// take care of preparing a form to CREATE a NEW track

require_once '../audio-player/Track.php';

$track = new Track;
var_dump($track);

?>

<form action="insert.php" method="post">
 
    <!-- display the form prefilled with the current data -->
    Title: <br>
    <input type="text" name="title" value="<?=$track->title?>">
    <br>
    <br>

    Length: <br>
    <input type="number" name="length" value="<?=$track->length?>">
    <br>
    <br>

    <button>Save</button>
 
</form>
