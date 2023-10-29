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

function taskA() {
  $val=0;
  echo "Задача A началась<br>";
  while ($val!=5) {
      $val = rand (1,10);
      echo 'Бросаем камень 1<br>';
      Fiber::suspend($val);
  }
  echo "Задача A завершилась<br>";
}

function taskB() {
  $val=0;
  echo "Задача B началась<br>";
  while ($val!=5) {
      $val = rand (1,10);
      echo 'Бросаем камень 2<br>';
      Fiber::suspend($val);
  }
  echo "Задача B завершилась<br>";
}

$fiberA = new Fiber('taskA');
$fiberB = new Fiber('taskB');

$task1 = $fiberA->start();
$task2 = $fiberB->start();

do {
echo '<br><br>Начало цикла<br>';
         
         if ($fiberA->isSuspended()) {
             echo "Камень 1 вернул $task1 <br>";
             $task1 = $fiberA->resume();
         }

echo '----------<br>';
         
         if ($fiberB->isSuspended()) {
             echo "Камень 2 вернул $task2 <br>";
             $task2 = $fiberB->resume();
         }
echo '----------<br>';
}
while ($fiberA->isSuspended() || $fiberB->isSuspended())
?>

  </body>
</html>
