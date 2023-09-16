<?php
namespace class\redaktor\interface\trait\toStatistic;

trait TraitLabelStatistika
{
  
public function metkaStatistika($metka)
    {
      $rez=$this->zaprosSQL("SELECT id FROM slegka_dfdx WHERE metka='".$metka."'");
      $stroka=mysqli_fetch_assoc($rez);
      if ($this->notFalseAndNULL($stroka) && $stroka['id']>0) {
        $id=$stroka['id'];
        $rez=$this->zaprosSQL("SELECT zaprosov FROM slegka_dfdx WHERE metka='".$metka."'");
        $stroka=mysqli_fetch_assoc($rez);
        $stroka['zaprosov']++;
        $this->zaprosSQL("UPDATE slegka_dfdx SET zaprosov=".$stroka['zaprosov']." WHERE id=".$id);
      } else $this->zaprosSQL("INSERT INTO slegka_dfdx(id, metka, zaprosov) VALUES (".$this->maxIdLubojTablicy('slegka_dfdx') .",'".$metka."',1)");
    }
}
