<?php
namespace class\redaktor\interface\trait\toStatistic;

trait TraitGetLabelStatistika
{
    public function getMetkaStatistik($metka) // чтение числа запроссов к метке
    {
      $rez=$this->zaprosSQL("SELECT zaprosov FROM slegka_dfdx WHERE metka='".$metka."'");
      $stroka=mysqli_fetch_assoc($rez); 
      if (!$this->notFalseAndNULL($stroka)) return 0;
      return $stroka['zaprosov'];
    }
}
