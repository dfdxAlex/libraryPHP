<?php
namespace bootstrap\navbar;
/**
* interface for creating classes for the collapse-expand button
* menu on the small screen.
*
* интерфейс для создания классов для кнопки сворачивания-разворачивания
* меню на малом экране.
*/
interface IToggler
{
    public function returnToggler($text="", $img="");
}
