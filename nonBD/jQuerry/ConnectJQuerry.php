<?php
namespace class\nonBD\jQuerry;

/**
 * класс подключает библиотеку jQuerry 
 */
class ConnectJQuerry
{
    static public function connectFronDisk($link)
    {
        echo "<script src='$link'></script>";
    }

    static public function connectJQuerryFromNet()
    {
        echo '<script
        src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>';
    }
}
