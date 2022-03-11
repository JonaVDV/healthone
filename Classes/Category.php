<?php
class Category
{
    public $id;
    public $name;
    public $image;

    public function __construct()
    {
        settype($this->id, 'integer');
    }
}