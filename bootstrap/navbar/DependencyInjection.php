<?php
namespace bootstrap\navbar;

class DependencyInjection
{
    public function __construct(
        $connectCSS,
        $connectJS,
        $createPContainer,
        Service $Brand,
        Service $Toggler,
        Service $NavLink
    ) 
    {
        // методы подключения актуального бутстрапа
        $this->connectCSS = $connectCSS;
        $this->connectJS = $connectJS;
        // создание контейнера свойств
        $this->container = $createPContainer;

        // создать объект брендирования
        $this->brand = $Brand;

        // Кнопка сворачивания-разворачивания
        $this->toggler = $Toggler;

        // пункт меню простого
        $this->navLink = $NavLink;
    }

    // Бизнес логика свойства
    private $connectCSS;
    private $connectJS;
    private $container;
    private $brand;
    private $toggler;
    private $navLink;

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
