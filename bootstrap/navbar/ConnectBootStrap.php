<?php
namespace bootstrap\navbar;

/**
 * Class for connecting the actual version of bootstrap for the project
 * 
 * Класс для подключения актуальной для проекта версии bootstrap
 */

class ConnectBootStrap implements Service
{
    static public function connectCSS()
    {
        echo ('<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
                     rel="stylesheet" 
                     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
                     crossorigin="anonymous">');
    }
    static public function connectJS()
    {
        echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>';
    }
}
