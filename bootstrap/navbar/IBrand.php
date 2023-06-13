<?php
namespace bootstrap\navbar;

// interface for creating classes for branding the navbar menu
// интерфейс для создания классов для брендирования меню navbar
interface IBrand
{
    public function returnBrand($link="#", $text="Navbar", $img="");
}
