<?php
/**
 * @author nml
 * example from textbook, Doyle, 2010
 */
    require_once './includes/Sellable.inc.php';
    require_once './includes/Television.inc.php';
    require_once './includes/TennisBall.inc.php';
    require_once './includes/StoreManager.inc.php';
    require_once './includes/GolfBall.inc.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Testing Interface, OO PHP</title>
    </head>
    <body>
<?php

    $golfball= new GolfBall();
    $golfball->setColor('white');

    $tv = new Television();
    $tv->setScreenSize(42);

    $ball = new TennisBall();
    $ball->setColor('yellow');

    $manager = new StoreManager();
    $manager->addProduct($tv);
    $manager->addProduct($ball);
    $manager->addProduct($golfball);
    $manager->stockUp();

    printf("<p> There are %s %s golfball for sale </p>\n"
          , $golfball->getStockLevel()
          , $golfball->getColor());

    printf("<p>There are %s %s-inch televisions and %s "
            . "%s tennis balls in stock.</p>\n"
            , $tv->getStockLevel()
            , $tv->getScreenSize()
            , $ball->getStockLevel()
            , $ball->getColor());

    print("<p>Selling a television ...</p>\n");
    $tv->sellItem();
    print("<p>Selling two tennis balls...</p>\n");
    $ball->sellItem();
    $ball->sellItem();
    $ball->sellItem();
    print("<p>Selling 6 Golfballs ...</p>\n");
    $golfball->sellItem();
    $golfball->sellItem();
    $golfball->sellItem();
    $golfball->sellItem();
    $golfball->sellItem();
    $golfball->sellItem();




    printf("<p>There are now %s %s-inch televisions and %s "
            . "%s tennis balls in stock.</p>\n"
            , $tv->getStockLevel()
            , $tv->getScreenSize()
            , $ball->getStockLevel()
            , $ball->getColor());

    printf("<p> There are %s %s golfballs in stock</p>\n"
            , $golfball->getStockLevel()
            , $golfball->getColor());

?>
    </body>
</html>
