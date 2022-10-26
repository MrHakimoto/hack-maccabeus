<?php

$t1 = $_POST['t1'];
$t2 = $_POST['t2'];

function sameordif($v1,$v2) {
  if ($v1 == $v2) {
    print "IGUAL";
  }
  else {
    print "DIFERENTE";
  }
}

sameordif($t1,$t2);


$texto = $_POST['t1'];
$total = 0;
for ($i = 0; $i < strlen($texto); $i++) {
  $cont = substr($texto,$i,1);
  if ($cont == 'a') {
    $total++;
  }
}

print "O total de caracteres 'a' é: ". $total. ".";

?>