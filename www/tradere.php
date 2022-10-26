<?php

$dados_usuario = array(
    "Nome" => "$nome",
    "Email" => "$email",
    "Senha" => "$senha",
    "Idade" => "$idade",
    "Altura" => "$altura"
  );

  function ks() {
    for($v = 0,$n = 0;$n <= 10;$n++){
        if($n % 2 != 0){
          $numeros[$v] = "$n";
          print "Posição = $v | Valor = $numeros[$v]<br>";
          $v++;
        }
      }
  }

  ?>