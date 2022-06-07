<?php

require_once 'Track.php';
require_once 'Author.php';
require_once 'Album.php';

//create a new object 
$track1 = new Track('Imagine');
//$track1->title = 'Imagine';


$track2 = new Track('Let it be');

// var_dump($track1);
// var_dump('<br>');
// var_dump('<br>');
// var_dump($track2);
// var_dump('<br>');
// var_dump('<br>');

$author1 = new Author;
// var_dump($author1);
// var_dump('<br>');
// var_dump('<br>');

$author2 = new Author('John', 'Lennon');
// var_dump($author2);
// var_dump('<br>');
// var_dump('<br>');

$author2->setBiography("John Winston Ono Lennon[nb 1] (born John Winston Lennon; 9 October 1940 – 8 December 1980) was an English singer, songwriter, musician and peace activist[2] who achieved worldwide fame as the founder, co-songwriter, co-lead vocalist and rhythm guitarist of the Beatles. Lennon was characterised by the rebellious nature and acerbic wit in his music, writing and drawings, on film, and in interviews. His songwriting partnership with Paul McCartney remains the most successful in history.[3]");

//echo 'The biography of ' . $author2->getFullName() . 'is ' . $author2->getBiographyLength() . ' characters long';


$author2->addTrack($track1);
//var_dump($author2);


//var_dump($author2->tracks[0] -> title);

$white_album = new Album ('The white album', 1968);

$white_album->setAuthor($author2);
$white_album->setTrack($track1);
$white_album->setTrack($track2);

$white_album->setCoverImage('https://upload.wikimedia.org/wikipedia/commons/thumb/0/0e/The_White_Album.svg/1024px-The_White_Album.svg.png');

var_dump($white_album);

echo 'There are ' 
    . $white_album->getNrOfTracks() 
    . ' tracks on ' 
    . $white_album->getTitle() 
    . ', for example ' 
    . $white_album->getTitleOfFirstTrack();