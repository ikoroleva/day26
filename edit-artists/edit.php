<?php 
session_start();
require_once 'DBBlackbox.php';
require_once '../audio-player/Author.php';

$messages = [];
 
if (!empty($_SESSION['flashed_messages'])) {
    $messages = $_SESSION['flashed_messages'];
    unset($_SESSION['flashed_messages']);
}

$id = $_GET['id'] ?? null;


if ($id) {
    //editing existing record
    $author = find($id,  'Author');
} else {

    //creating a new record
    $author = new Author;
}


?>

<?php foreach ($messages as $type => $messages_of_type) : ?>
    <?php foreach ($messages_of_type as $message) : ?>
        <div class="message message_<?= $type ?>">
            <?= $message ?>
        </div>
    <?php endforeach; ?>
<?php endforeach; ?>

<?php if ($id) : ?>
    <form action="save.php?id=<?= $id ?>" method="post">
<?php else : ?>
    <form action="save.php" method="post">
<?php endif; ?>


 
    <!-- display the form prefilled with the current data -->
    First name: <br>
    <input type="text" name="first_name" value="<?=$author->first_name?>">
    <br>
    <br>
    Last name: <br>
    <input type="text" name="last_name" value="<?=$author->last_name?>">
    <br>
    <br>
    Biography:<br>
    <textarea name="biography" id="" cols="30" rows="10"><?=$author->biography?></textarea>
    <br>
    <br>
    Image URL: 
    <input type="text" name="image" value="<?=$author->image?>">
    <br>
    <br>
    <button>Save</button>
 
</form>