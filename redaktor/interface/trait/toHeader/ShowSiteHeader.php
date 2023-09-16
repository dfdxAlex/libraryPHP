<?php
namespace class\redaktor\interface\trait\toHeader;

class ShowSiteHeader
{
    public function __construct(string $url)
    {
        echo '  <img src="'.\class\nonBD\SearchPathFromFile::createObj()->searchPath($url).'" alt="Картинка должна называться image/hapka2.png размер 300 на 300"/>';
    }
}
