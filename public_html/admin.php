<?php
require('top.inc.php');
?>
<!doctype html>
<html lang="ru">
<head>
  <title>Админ-панель</title>
</head>
<body>

  <?php
    $host = 'localhost';  // Хост, у нас все локально
    $user = 'artempa6_12';    // Имя созданного вами пользователя
    $pass = 'Cyhrw4%2'; // Установленный вами пароль пользователю
    $db_name = 'artempa6_12';   // Имя базы данных
    $link = mysqli_connect($host, $user, $pass, $db_name); // Соединяемся с базой
    if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN']!=''){

}else{
   header('location:login.php');
   die();
}
    // Ругаемся, если соединение установить не удалось
    if (!$link) {
      echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
      exit;
    }

    //Если переменная Name передана
    if (isset($_POST["title"])) {
      //Если это запрос на обновление, то обновляем
      if (isset($_GET['red'])) {
        $sql = mysqli_query($link, "UPDATE `product` SET `title` = '{$_POST['title']}',`price` = '{$_POST['price']}',`image` = '{$_POST['image']}' WHERE `ID`={$_GET['red']}");
      } else {
        //Иначе вставляем данные, подставляя их в запрос
        $sql = mysqli_query($link, "INSERT INTO `product` (`title`, `image`, `price` ) VALUES ('{$_POST['title']}','{$_POST['image']}', '{$_POST['price']}')");
      }

      //Если вставка прошла успешно
      if ($sql) {
        echo '<p>Успешно!</p>';
      } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
      }
    }

    //Удаляем, если что
    if (isset($_GET['del'])) {
      $sql = mysqli_query($link, "DELETE FROM `product` WHERE `id` = {$_GET['del']}");
      if ($sql) {
        echo "<p>Товар удален.</p>";
      } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
      }
    }

    if (isset($_GET['red'])) {
      $sql = mysqli_query($link, "SELECT `id`, `image`, `title`, `price` FROM `product` WHERE `ID`={$_GET['red']}");
      $product = mysqli_fetch_array($sql);
    }
  ?>

  <form action="" method="post">
    <table>
      <tr>
        <td>Наименование:</td>
        <td><input type="text" name="title" value="<?= isset($_GET['red']) ? $product['title'] : ''; ?>"></td>
      </tr>
      <tr>
        <td>Цена:</td>
        <td><input type="text" name="price" size="3" value="<?= isset($_GET['red']) ? $product['price'] : ''; ?>"> руб.</td>
      </tr>
      <tr>
        <td>Путь к картинке:</td>
        <td><input type="text" name="image" size="3" value="<?= isset($_GET['red']) ? $product['image'] : ''; ?>"></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" value="Добавить товар"></td>
      </tr>
    </table>
  </form>
  <?php
  //Получаем данные
 $sql = mysqli_query($link, 'SELECT `id`, `title`, `price`, `image` FROM `product`');
  while ($result = mysqli_fetch_array($sql)) {
    echo "<p>{$result['id']}) {$result['title']} {$result['image']} - {$result['price']} ₽ - <a href='?del={$result['id']}'>Удалить</a> - <a href='?red={$result['id']}'>Редактировать</a></p>";
  }
  ?>
  </body>
</html>