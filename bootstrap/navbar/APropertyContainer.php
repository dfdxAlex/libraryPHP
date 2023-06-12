<?php
namespace bootstrap\navbar;

abstract class APropertyContainer
{
    protected $property = [];
    abstract public function setProperty($klassOld, $classNew);
    abstract public function getProperty($classNew);
}
