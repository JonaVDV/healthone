<?php


class OpeningTime{
    
    public $opening_time;
    public $closing_time;
    public $day;
    public $id;

    public function __construct(){
        settype($this->id, 'integer');
    }
}