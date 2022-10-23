<?php
    //require MySQL Connection
    require('database/DBController.php');

    //require Product Class
    require('database/Product.php');

    //require Cart Class
    require('database/Cart.php');

    //Db Controller Object
    $db = new DBController();

    //Product Object
    $product = new Product($db);
    $product_shuffle = $product->getData();

    //Cart Object
    $Cart = new Cart($db);