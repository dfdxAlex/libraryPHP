<?php
namespace class\redaktor\interface\trait\toHeader;

class FirstCreationSessionVariables
{
    public function __construct()
    {
        if (!isset($_SESSION["resetNameTable"])) $_SESSION["resetNameTable"]=false;
        if (!isset($_SESSION["regimRaboty"])) $_SESSION["regimRaboty"]=0;
        if (!isset($_SESSION["status"])) $_SESSION["status"]=0;
        if (!isset($_SESSION["sSajta"])) $_SESSION["sSajta"]=false;
        if (!isset($_SESSION["runStrNews"])) $_SESSION["runStrNews"]=false; // если страницу загрузили из модуля news, то значение true, если по прямой ссылке, то остается false
        if (!isset($_SESSION['redaktiruem'])) $_SESSION['redaktiruem']='';
    }
}
