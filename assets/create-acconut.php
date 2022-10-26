<?php

<?php

  $n1 = $_POST['n1'];
  $n2 = $_POST['n2'];

  function soma($n1, $n2){
    $total = $n1 + $n2;
    print $total;
  }
  print "Soma: ";
  soma($n1,$n2);

   function sub($n1, $n2){
    $total = $n1 - $n2;
    print $total;
  }
  
  $n1 = $_POST['n1'];

  function realraiz($valor) {
    if (is_numeric($valor)){
      $a = sqrt($valor);
      print "O valor ". $valor ." é inteiro, e sua raíz é: ".number_format($a,2);;
    }
  }

realraiz($n1);

  print "<br> Subtração: ";
  sub($n1,$n2);

 function mult($n1, $n2){
    $total = $n1 * $n2;
    print $total;
  }
  print "<br> Multiplicação: ";
  mult($n1,$n2);

 function div($n1, $n2){
    $total = $n1 / $n2;
    print $total;
  }
  print "<br> Divisão: ";
  div($n1,$n2);
?>








?>