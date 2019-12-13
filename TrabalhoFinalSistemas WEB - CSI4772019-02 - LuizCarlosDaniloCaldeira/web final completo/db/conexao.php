<!-- classe de coxexão com o banco de dados -->

<?php
  $utf8 = header("Content-Type: text/html; charset=utf-8");
  $link = new mysqli('localhost', 'root', '', 'vipdeskdb');
  $link->set_charset('utf8');
?>
