<?php 
require_once 'DBBlackbox.php';
require_once '../audio-player/Track.php';

$id = $_GET['id'];
$track = find($id,  'Track');

var_dump($track);
?>

<form action="update.php?id=<?= $id ?>" method="post">
 
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