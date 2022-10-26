<?php

  $n = $_POST['n1'];

  function imparoupar($valor) {
    if ($valor % 2 == 0) {
      print "Este número é par!";
    }
    else{
      print "Esse número é ímpar!";
    }
  }

  imparoupar($n);

  function primeiraForma() {
    $agora = time();
    $data = getdate($agora);

    print "Dia: ".$data['mday']."<br/>";
    print "Mês : ".$data['mon']."<br/>";
    print "Ano: ".$data['year']."<br/>";
    print "Dia da Semana: ".$data['weekday'];
  }

  ?>