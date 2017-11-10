<?php
  $jsonData = file_get_contents(__DIR__.'/data.json');
  $data = json_decode($jsonData);
  exit;
?>
<html>
<head>
  <title>Домашнее задание к лекции 2.1 «Установка и настройка веб-сервера»</title>
</head>
<body>
  <table>
    <thead>
      <tr>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Адрес</th>
        <th>Телефон</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($data as $user) : ?>
        <tr>
          <td><?=$user->firstName?></td>
          <td><?=$user->lastName?></td>
          <td><?=$user->address?></td>
          <td><?=$user->phoneNumber?></td>
        </tr>
      <?php endforeach;?>
    </tbody>
  </table>
</body>
</html>