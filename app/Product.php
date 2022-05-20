<?php
namespace App;
use Illuminate\Support\Facades\Log;

class Product
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function nameFunct()
    {
       // Log::info("Test name:".$this->name);
        return $this->name;
        //return 'Fallout 4';
    }
}
