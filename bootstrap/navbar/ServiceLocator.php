<?php
namespace bootstrap\navbar;

class ServiceLocator
{
    private static $instances = null;

    protected function __construct() 
    {
        $this->init();
    }

    protected function __clone() { }

    // Бизнес логика свойства
    private $connectCSS;
    private $connectJS;
    private $container;
    private $brand;
    private $toggler;
    private $navLink;

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    public static function serviceLoc()
    {
        if (is_null(self::$instances)) 
            self::$instances = new self();
        return self::$instances;
    }

    private function init()
    {
        // методы подключения актуального бутстрапа
        $this->connectCSS = ConnectBootStrap::connectCSS();
        $this->connectJS = ConnectBootStrap::connectJS();
        // создание контейнера свойств
        $this->container = PropertyContainerS::createPContainer();

        // создать объект брендирования
        $this->brand = new Brand($this->container);

        // Кнопка сворачивания-разворачивания
        $this->toggler = new Toggler($this->container);

        // пункт меню простого
        $this->navLink = new NavLink($this->container);
    }


    // Список геттеров
    public function connectCSS()
    {
        return $this->connectCSS;
    }
    public function connectJS()
    {
        return $this->connectJS;
    }
    public function container()
    {
        return $this->container;
    }
    public function setProperty($strOld, $strNew)
    {
        return $this->container->setProperty($strOld,$strNew);
    }
    public function brand()
    {
        return $this->brand->returnBrand();
    }
    public function toggler()
    {
        return $this->toggler->returnToggler();
    }
    public function returnNavLink()
    {
        return $this->navLink->returnNavLink();
    }

}
