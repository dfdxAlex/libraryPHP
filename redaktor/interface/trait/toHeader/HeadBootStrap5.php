<?php
namespace class\redaktor\interface\trait\toHeader;

class HeadBootStrap5
{
    private $listFileStyle;

    public function __construct(array $listFileStyle)
    {
        $this->listFileStyle = $listFileStyle;
    }

    public function __toString()
    {
        $rez = '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">';
        
        foreach($this->listFileStyle as $value)
        $rez.= '<link rel="stylesheet" href="'.$value.'"> ';

        return $rez;
    }
}
