<?php

  $numero_escolhido = $_POST['numero'];
 
  for ($i = 1; $i <= 10; $i++) {
    echo $numero_escolhido . ' x ' . $i . " = " . ($numero_escolhido * $i);
    echo "<br />";
  }

?>