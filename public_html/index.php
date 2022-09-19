<?php
spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.php';
});

  $PDO = PdoConnect::getInstance();

  $result = $PDO->PDO->query("
    SELECT * FROM `product`
  ");

  $products = array();{ }

  while ($productInfo = $result->fetch()) {
    $products[] = $productInfo;
  }
    $PDO = PdoConnect::getInstance();

  $result = $PDO->PDO->query("
    SELECT * FROM `hot`
  ");

  $hots = array();{ }

  while ($hotInfo = $result->fetch()) {
    $hots[] = $hotInfo;
  }

  include 'online_store.php';
?>