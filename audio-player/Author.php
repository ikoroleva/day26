<?php 

class Author 
{
    public $first_name = null;
    public $last_name = null;
    public $aliases = [];
    public $biography = null;
    public $image = null;
    public $date_of_birth = null;
    public $date_of_death = null;
    public $genres = [];
    public $tracks = [];

    public function __construct($first_name = null, $last_name = null) 
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    

    public function addTrack(Track $track) 
    {
        $this->tracks[] = $track;

        //same
        //array_push($this->tracks, $track);
    }

    public function setBiography($biograpthy)
    {
        $this->biograpthy = $biograpthy;
    }

    public function getBiographyLength()
    {
        return strlen($this->biography);
    }

public function getFullName()
{
    return $this->first_name . ' ' . $this->last_name; 
}


}