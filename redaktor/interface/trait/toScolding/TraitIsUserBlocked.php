<?php
namespace class\redaktor\interface\trait\toScolding;

trait TraitIsUserBlocked
{
    use \class\redaktor\interface\trait\toBD\TraitZaprosSQL;
    
    public function zablokirovanMaty()  // Функция блокировка пользователя
    {
        $vivod=false;
        $rez=$this->zaprosSQL("SELECT login FROM blocked_list_dobavit_mat WHERE 1"); // проверяем заблокирован ли пользователь на добавление матов
        while(!is_null($stroka=mysqli_fetch_array($rez)))
              if ($stroka[0]==$_SESSION['login']) {// Если была нажата кнопка, блокировки пользователя
                  $vivod=true; break;
                }
        return $vivod;
    }
}
