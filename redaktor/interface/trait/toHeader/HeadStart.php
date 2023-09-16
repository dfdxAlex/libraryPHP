<?php
namespace class\redaktor\interface\trait\toHeader;

class HeadStart
{
    private $title;
    public function __construct($title)
    {
        $this->title = $title;
    }

    public function __toString()
    {
        return "
                 <meta charset='UTF-8'>  
                 <meta 
                   name='viewport' 
                   content='width=device-width, 
                            initial-scale=1.0'
                 >
                 <link 
                   rel='shortcut icon' 
                   href='image/favicon2.ico' 
                   type='image/x-icon'
                 >
                 $this->title
                 <meta 
                   name='Cache-Control' 
                   content='no-store'
                 >
              ";
    }
}
