<?php
include_once "autoloader.php";
?>
<!doctype html>
<html lang="ru">
  <head>
    <!-- Обязательные метатеги -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php 
        $x1 = 
        // $locator = bootstrap\navbar\ServiceLocator::serviceLoc();
        $locator = new bootstrap\navbar\DependencyInjection(
          bootstrap\navbar\ConnectBootStrap::connectCSS(),
          bootstrap\navbar\ConnectBootStrap::connectJS(),
          bootstrap\navbar\PropertyContainerS::createPContainer(),
          new bootstrap\navbar\Brand(bootstrap\navbar\PropertyContainerS::createPContainer()),
          new bootstrap\navbar\Toggler(bootstrap\navbar\PropertyContainerS::createPContainer()),
          new bootstrap\navbar\NavLink(bootstrap\navbar\PropertyContainerS::createPContainer())
        );

        echo $locator->connectCSS();
    ?>

    <title>Привет мир!</title>
  </head>
  <body>

<?php

// установка данных ссылки брендирования
$locator->setProperty("navbar-brand","navbar-brand my-class");
//////////////////////////////////////

// пункт меню простого
// $navLink = new bootstrap\navbar\NavLink($x1);

$locator->setProperty("sss",["DropDown",
                        "Текст",
                        "#Ссылка",
                      ]);

$x2 =  new bootstrap\navbar\DropDown($locator->container());
$x2->searchMas();

?>
    
    

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <?php 
     echo $locator->brand();
     echo $locator->toggler();
     ?>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php
           $locator->setProperty("nav-link","nav-link active");
           echo $locator->returnNavLink("Home");
           $locator->setProperty("nav-link","nav-link");
           echo $locator->returnNavLink("Link");
        ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" 
             href="#" 
             role="button" 
             data-bs-toggle="dropdown" 
             aria-expanded="false"
          >
            Dropdown
          </a>
          <ul class="dropdown-menu">

            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          
          </ul>
        </li>
        <?php
           $locator->setProperty("nav-link","nav-link disabled");
           echo $locator->returnNavLink("Disabled");
        ?>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


    <?php 
        echo $locator->connectJS();
    ?>
  </body>
</html>


