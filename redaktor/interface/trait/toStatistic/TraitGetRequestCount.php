<?php
namespace class\redaktor\interface\trait\toStatistic;

trait TraitGetRequestCount
{
    public function kolZaprosow()
    {
      $rez=$this->zaprosSQL("SELECT n_zapros FROM statistik_dfdx WHERE 1");
      $stroka=mysqli_fetch_assoc($rez);
      return $stroka['n_zapros'];
    }
}
