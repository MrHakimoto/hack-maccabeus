<html>
  <head>
    <title>Slide 5</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>

  <body class="container bg-light">

    <h1 class="text-success">ATIVIDADES SLIDE 5 - Arrays Lineares</h1>
    <hr>
    <br>

    <h3 class="text-primary">Questão 5 - Faça um programa que crie um vetor de inteiros de 10 posições leia os
valores e imprima os valores onde o índice for impar.</h3>
    <br>

    <?php
    
      for($v = 0,$n = 0;$v <= 10;$v++){
        $n++;
        if($v % 2 != 0){
          $numeros[$v] = "$n";
          print "Posição = $v | Valor = $numeros[$v]<br>";
        }
      }
    
    ?>

    <hr> <br>

  </body>
</html>