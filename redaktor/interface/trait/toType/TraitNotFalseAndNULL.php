<?php
namespace class\redaktor\interface\trait\toType;

trait TraitNotFalseAndNULL
{
   public function notFalseAndNULL($data):bool
   {
     if ($data===false) return false;
     if (is_null($data)) return false;
     if (!isset($data)) return false;
     return true;
   }
}
