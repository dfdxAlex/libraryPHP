<?php
namespace class\nonBD\cripto;

/**
 * функция coding() должна зашифровать строку для передачи через coockie
 * функция coding() преобразовывает каждый символ строки в её код UTF-8;
 * получившаяся строка разделяется символами ;
 * 
 * функция deCoding($str) раскодирует строку в нормальный вид
 */

class CodingStr
{
    /**Преобразовать символьную строку в строку из кодов символов */
    static public function coding($str)
    {
        $rez = '';
        for ($i=0; $i<mb_strlen($str); $i++) {

            /**Получить очередной символ из строки */
            $simbol = mb_substr($str,$i,1);

            /**Добавить разделительную точку с запятой если в строке
             * уже что-то есть.
             */
            if ($rez!='') $rez .= '_';

            /**Добавить к строке код очередного символа */
            $rez .= mb_ord($simbol);
        }
        return $rez;
    }

    /** функция принимает строку созданную с помощью  coding()
     * и переводит в нормальный вид
    */
    static public function deCoding($str)
    {
        $rez = '';
        $simbolMas = explode('_',$str);
        foreach ($simbolMas as $val) {
            $rez .= mb_chr($val);
        }
        return $rez;
    }
}
