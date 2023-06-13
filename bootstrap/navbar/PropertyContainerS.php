<?php
namespace bootstrap\navbar;

/**
 * the class makes the Singleton implementation of the container's 
 * property
 * 
 * класс делает Singleton реализацию проперту контейнера
 */

class PropertyContainerS extends PropertyContainer
{
    static private $link = 0;

    static public function createPContainer()
    {
        if (empty(self::$link)) self::$link = new PropertyContainerS;
        return self::$link;
    }
}
