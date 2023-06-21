<?php
namespace bootstrap\navbar;

/**
 * abstract class to implement the Property Container pattern
 * 
 * абстрактный класс для реализации шаблона Property Container
 */

abstract class APropertyContainer
{
    public $property = [];
    abstract public function setProperty($klassOld, $classNew);
    abstract public function getProperty($classNew);
}
