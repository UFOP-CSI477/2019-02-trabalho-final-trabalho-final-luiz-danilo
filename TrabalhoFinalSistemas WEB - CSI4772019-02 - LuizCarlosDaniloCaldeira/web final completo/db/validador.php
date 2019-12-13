<?php

  session_start();

  // analise se a seção não existe ou se seu valor é diferente de sim... será forçado o redirencionamento para a página principal.
  if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM'){
    header('Location: index.php?login=erro2');
  }
?>
