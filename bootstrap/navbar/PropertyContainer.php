<?php
namespace bootstrap\navbar;

/**
 * class extends the abstract class APropertyContainer
 * class implements methods for reading and writing data to the container
 * 
 * класс расширяет абстрактный класс APropertyContainer
 * класс реализует методы чтения и записи данных в контейнер
 */

class PropertyContainer extends APropertyContainer
{
    public function setProperty($klassOld, $classNew)
    {
        $this->property[$klassOld] = $classNew;
    }

    public function getProperty($classNew)
    {
        if (empty($this->property[$classNew])) return $classNew;
        return (string) $this->property[$classNew];
    }
}
