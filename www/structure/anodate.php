<?php

$num = 0;
$total = 0;
for($l=1;$l<=5;$l++){
    for($c=1; $c<=5;$c++){
        $num++;
    $total = $total + $num;
        $vetor[$l][$c] = $num;
        print $vetor[$l][$c]." ";
    }
    print "<br>";
}
    print "<br>";
  print "Resultado da soma => $total";

?>


<body class="container bg-light">

<h1 class="text-success">ATIVIDADES SLIDE 5 - Arrays Multidimensionais</h1>

<hr>

<br>

<h3 class="text-primary">Questão 2 - Utilizar o exemplo anterior e somar todos os valores desta matriz.</h3>

<br>

</body>