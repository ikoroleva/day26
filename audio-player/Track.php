<?php 

class  Track  
{
    public $title = null;
    public $length = null;
    public $artist = null;
    public $image = null;
    public $track_url = null;


public function __construct($title = null) 
{
    $this->title = $title;
}

public function addToPlayList($playlist_id)
{
    // add this track to a playlist
    // identified by the $playlist_id
}

}