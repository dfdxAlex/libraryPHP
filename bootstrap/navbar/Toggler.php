<?php
namespace bootstrap\navbar;

/**
* interface for creating classes for the collapse-expand button
* menu on the small screen.
*
* интерфейс для создания классов для кнопки сворачивания-разворачивания
* меню на малом экране.
*/

class Toggler implements IToggler, Service
{
    private $link;

    public function __construct(APropertyContainer $link)
    {
        $this->link = $link;
    }
/**
 *The method can take two parameters, both parameters are related
 * span tag inside button tag.
 * If no parameters are specified, the span tag will be empty.
 * If you set one parameter, then - this will be the text for the span tag.
 * If you set two parameters, then the second parameter is a link to
 * picture, and the first parameter is for alt text in
 * img tag.
 * 
 * Метод может принимать два параметра, оба параметра касаются
 * тега span внутри тега button.
 * Если не задавать параметров, то тег спан будет пустым.
 * Если задать один параметр, то - это будет текст для тега спан.
 * Если задать два парамера, то второй параметр - это ссылка на 
 * картинку, а первый параметр для альтернативного текста в 
 * теге img.
 */
    public function returnToggler($text="", $img="")
    {
        $navbarToggler = $this->link->getProperty('navbar-toggler');
        $navbarTogglerIcon = $this->link->getProperty('navbar-toggler-icon');
        
        if ($img!=="") $text="<img src='$img' alt='$text'>";
        $rez = "
            <button 
              class='$navbarToggler' 
              type='button' 
              data-bs-toggle='collapse' 
              data-bs-target='#navbarSupportedContent' 
              aria-controls='navbarSupportedContent' 
              aria-expanded='false' 
              aria-label='Toggle navigation'
            >
              <span 
                class='$navbarTogglerIcon'
              >
              $text
              </span>
            </button>
        ";
        return $rez;
    }
}
