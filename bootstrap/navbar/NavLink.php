<?php
namespace bootstrap\navbar;

/**
 * The class puts a simple menu item - a list plus a link in it
 * 
 * Класс ставит простой элемент меню - список плюс ссылка в нем
 */

class NavLink implements INavLink, Service
{
    private $link;

    public function __construct(APropertyContainer $link)
    {
        $this->link = $link;
    }

    public function returnNavLink($text="Enter Text", $href="#")
    {
        $navItem = $this->link->getProperty('nav-item');
        $navLink = $this->link->getProperty('nav-link');
        
        $rez = "
        <li class='$navItem'>
          <a 
            class='$navLink' 
            aria-current='page' 
            href='$href'
           >
            $text
           </a>
        </li>
        ";
        return $rez;
    }
}
