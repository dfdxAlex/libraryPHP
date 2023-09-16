<?php
namespace class\redaktor\interface\trait\toScolding;

trait TraitUserAddMat
{
     // работаем с заполнением базы матов от пользователей на главной странице сайта
  public function dobavilMat($text) 
  {
   if (isset($_POST['otkazDobawleniaMatow'])) {//Самозаблокироваться от показа окна добавления матов
     $id=$this->maxIdLubojTablicy('blocked_list_dobavit_mat');
     if ($id<1) $id=1;
     $this->zaprosSQL("INSERT INTO blocked_list_dobavit_mat(id, login) VALUES (".$id.", '".$_SESSION['login']."')");
    }
   if ($_SESSION['status']<1 || $_SESSION['status']>5) return false;
   if ($this->zablokirovanMaty()) return false; // если пользователь заблокирован, то выйти
   if ($this->sborMatov()==0) return false;
    // Узнаем сколько матов пользователь может ввести
    $rez=$this->zaprosSQL("SELECT * FROM mat_ot_polzovatelej WHERE login='".$_SESSION['login']."'");
    $cisloMatov=10;
      while(!is_null($stroka=mysqli_fetch_assoc($rez)))
         $cisloMatov--;

   if ($cisloMatov>0 && isset($_POST['dobawilMat']) && $_POST['dobawilMat']=='Ok' && $_POST['dobawilMatText']!='') {
           foreach($this->mas_mat as $value)
             if ($value==$_POST['dobawilMatText']) $text='Спасибо, но данное нецензурное слово уже присутствует в базе данных.';
           foreach($this->nie_mat as $value)
             if ($value==$_POST['dobawilMatText']) $text='Спасибо, но данное слово уже присутствует в базе данных и помечено как слово, разрешенное к применению на данном ресурсе.';
      
   if (!preg_match_all('/Спасибо/u',$text)>0) { //Если мата нет в двух постоянных таблицах матов и нематов, то проверяем во временной таблице
           $rez=$this->zaprosSQL("SELECT * FROM mat_ot_polzovatelej WHERE login='".$_SESSION['login']."'");
           if (!$rez) echo 'не удалось прочитать данные из таблицы временных нецензурных слов';
           while(!is_null($stroka=mysqli_fetch_assoc($rez))) 
               if ($stroka['mat']==$_POST['dobawilMatText']) $text='Спасибо, но некто, с логином '.$stroka['login'].' уже отправил данное слово на рассмотрение.';
       }

       if (!preg_match_all('/Спасибо/u',$text)>0) {  //Если мата нет в двух постоянных таблицах матов и нематов, то проверяем во временной таблице
             $this->zaprosSQL("INSERT INTO mat_ot_polzovatelej(mat, login) VALUES ('".$_POST['dobawilMatText']."','".$_SESSION['login']."')");
             $cisloMatov--;
        } 
     }
   if ($cisloMatov<1) $text='Лимит ввода нецензурных слов исчерпан, подождите пока модератор одобрит предыдущие Ваши предложения.';
    else   {
               $text=$text.' Лимит матов-'.$cisloMatov;
               $this->formBlock('formaSborMata',$this->initsite(),
                                'p', $text, 'dobawilMatP',
                                'text2','dobawilMatText',
                                'submit','dobawilMat',
                                'reset',
                                'submit','otkazDobawleniaMatow','Заблокировать данную функцию');
            }
}
}
