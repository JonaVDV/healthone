<?php


class Product
{
    public $id;
    public $name;
    public $picture;
    public $description;
    public $categoryid;

    public function __construct()
    {
        settype($this->id, 'integer');
        settype($this->categoryid, 'integer');
    }
}