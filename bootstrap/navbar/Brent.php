<?php
namespace bootstrap\navbar;

class Brent implements IBrent
{
    public function returnBrent($link="#", $text="Navbar")
    {
        return "<a class='navbar-brand' href='$link'>$text</a>";
    }
}
