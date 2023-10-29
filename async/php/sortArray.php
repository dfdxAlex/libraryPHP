<?php
include_once "autoloader.php";
?>
<!doctype html>
<html lang="ru">
  <head>
    <!-- Обязательные метатеги -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Привет мир!</title>
  </head>
  <body>

  <?php

  $tStart = time();

  function mas($number)
  {
    $mas = [];
    for ($i=0; $i<$number; $i++) {
      $mas[] = rand(1,1000);
    }
    return $mas;
  }

  $mas1 = $mas11 = mas(8000);
  $mas2 = $mas21 = mas(8000);
  $mas3 = $mas31 = mas(8000);

  function sortMas($mas)
  {
      do {
        $flag = false;
        for ($i=1; $i<count($mas); $i++)
          if ($mas[$i] < $mas[$i-1]) {
            $time = $mas[$i-1];
            $mas[$i-1] = $mas[$i];
            $mas[$i] = $time;
            $flag = true;
          }
      }
      while ($flag);
      return $mas;
  }

  
  $fiberSort = new Fiber(function () use ($mas1) {
      return sortMas($mas1);
  });

  $fiberSort2 = new Fiber(function () use ($mas2) {
      return sortMas($mas2);
  });

  $fiberSort3 = new Fiber(function () use ($mas3) {
    return sortMas($mas3);
  });

  $fiberSort->start();
  $fiberSort2->start();
  $fiberSort3->start();

  while (!$fiberSort->isTerminated() || !$fiberSort2->isTerminated() || !$fiberSort3->isTerminated())
  {
  }

  $tFinish = time();
  $tRez = $tFinish-$tStart;
  echo "время выполнения скрипта = $tRez <br>";

  $mas11 = sortMas($mas11);
  $mas21 = sortMas($mas21);
  $mas31 = sortMas($mas31);

  $tStart = time();
  $tRez = $tStart - $tFinish;
  echo "время выполнения скрипта = $tRez <br>";

  foreach($mas11 as $val) {
      echo $val.'<br>';
  }
?>

  </body>
</html>
