<?php
namespace src\js\connectFunctionJs;

/**
 * Класс подключает функцию JS из папки Js
 * c событием Load
 */
use \class\nonBD\trait\DirectorySep;

class ConnectFunctionJsLoad
{
    public function __construct($name)
    {   
        $doc = "let doc = 'window'";
        
        $pathFileJs = "$name";
        $pathFileJs = DirectorySep::insertDirectorySeparator($pathFileJs);
        
        echo '<script src="'.$pathFileJs.'"></script>';

        $masFileName = preg_split('///',$name);

        

        echo '<script>
                window.addEventListener("load",'.$name.',false);
              </script>';
    }
}
