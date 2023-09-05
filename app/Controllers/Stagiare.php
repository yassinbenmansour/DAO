

<?php


namespace app\Controllers;

class Stagiare
{
    public $fullname;
    public function __construct($fullname)
    {
        $this->fullname = $fullname;
    }

    public function getFullname()
    {
        return $this->fullname;
    }


    public function setFullname($fullname)
    {
        $this->fullname = $fullname;
    }


}