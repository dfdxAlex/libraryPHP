<?php
namespace bootstrap\navbar;

// interface for creating classes for branding the navbar menu
// интерфейс для создания классов для брендирования меню navbar
interface IBrent
{
    public function returnBrent($link="#", $text="Navbar", $img="");
}
