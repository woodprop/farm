<?php

spl_autoload_register(function ($className) {
    require_once "{$className}.php";
});

$farm = new Farm();
$products = $farm->getProducts();


echo('Собрано:' . PHP_EOL);
echo('- ' . $products['milk'] . ' литров молока' . PHP_EOL);
echo('- ' . $products['eggs'] . ' шт. яиц' . PHP_EOL);
