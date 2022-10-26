<?php

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$idade = $_POST['idade'];
$altura = $_POST['altura'];

$dados_usuario = array(
  "Nome" => "$nome |",
  "Email" => "$email |",
  "Senha" => "$senha |",
  "Idade" => "$idade |",
  "Altura" => "$altura"
);
print_r($dados_usuario);
    
$matriz[1] = "Thúlio";
    
for($n = 1;$n <= 30; $n++){
  $matriz[$n] = "Thúlio";
  print "Posição = $n | Valor = ". $matriz[$n];
  print "<br>";
}



$num = 0;
$total = 0;
for($l=1;$l<=5;$l++){

  for($c=1; $c<=5;$c++){
    $num++;
    $total = $total + $num;
    $vetor[$l][$c] = $num;
    print $vetor[$l][$c]." ";
  }

  
  for($c=1; $c<=5;$c++){
    $num++;
    $total = $total + $num;
    $vetor[$l][$c] = $num;
    print $vetor[$l][$c]." ";

    for($c=1; $c<=5;$c++){
      $num++;
      $total = $total + $num;
      $vetor[$l][$c] = $num;
      print $vetor[$l][$c]." ";
    }

  }
  print "<br>";
}
  print "<br>";
  print "Resultado da soma => $total";



?>