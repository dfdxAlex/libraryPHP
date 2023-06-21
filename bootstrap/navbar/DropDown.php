<?php
namespace bootstrap\navbar;

/**

 */

class DropDown implements IDropDown
{
    private $link;

    public function __construct(APropertyContainer $link)
    {
        $this->link = $link;
    }

    public function returnDropdownMenu($text="Enter Text", $href="#")
    {
        // классы для элемента-заголовка
        $navItem = $this->link->getProperty('nav-item dropdown');
        $navLink = $this->link->getProperty('nav-link dropdown-toggle');
        // классы для выпадающих элементов
        $dropdownMenu = $this->link->getProperty('dropdown-menu');
        
        $rez = "
        <li class='$navItem'>
          <a 
            class='$navLink' 
            role='button' 
            data-bs-toggle='dropdown' 
            aria-expanded='false'
            href='$href'
           >
            $text
           </a>
           <ul class='$dropdownMenu'>
             
             
           </ul>
        </li>
        ";
        return $rez;
    }

    public function searchMas()
    {
        foreach($this->link->property as $key=>$value) {
            if (is_array($value)) 
                if ($value[0]==="DropDown") 
                    {
                        //echo 'Нашли массив<br>';
                        //echo 'Ключ массива '.$value[0].'<br>';
                    }
        }
    }
}
