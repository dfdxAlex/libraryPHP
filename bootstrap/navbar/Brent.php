<?php
namespace bootstrap\navbar;

/**
 * interface for creating classes for branding the navbar menu
 * function returnBrent returns a string for menu branding
 * The $link parameter is a link to jump to, for the <a> tag
 * The $text parameter contains the content inside the link, <a> or
 * if there is a picture inside <a>, then $text gets into the alt of the picture
 * The $img parameter contains a link to the image that will be placed
 * inside the <a> tag
 *
 * интерфейс для создания классов для брендирования меню navbar
 * функция returnBrent возвращает строку для брендирования меню
 * Параметр $link - ссылка для перехода, для тега <a>
 * Параметр $text содержит контент внутри ссылки, <a> или
 * если внутри <a> будет картинка, то $text попадает в alt картинки
 * Параметр $img содержит ссылку на картинку, которая будет помещена 
 * внутрь тега <a>
 */

class Brent implements IBrent
{
    public function returnBrent($link="#", $text="Navbar", $img="")
    {
        if ($img!=="") $text="<img src='$img' alt='$text'>";
        return "<a class='navbar-brand' href='$link'>$text</a>";
    }
}
