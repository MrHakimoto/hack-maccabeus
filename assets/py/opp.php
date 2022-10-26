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

?>