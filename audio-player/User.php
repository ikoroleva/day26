<?php 

class  User 
{
    public $first_name = null;
    public $last_name = null;
    public $login = null;
    public $image = null;
    public $playlists = [];
    public $tracks = [];


public function __construct($first_name = null, $last_name = null) 
{
    $this->first_name = $first_name;
    $this->last_name = $last_name;
}

public function addToPlayList($playlist, $track)
{
    // add this track to a playlist
    // identified by the $playlist_id
}

public function addToFavorites ($track) {

}

}