<?php


$num = 0;
      print "<table border='2'>";
      for($l = 1;$l <= 3;$l++){
        print "<tr>";
        for($c = 1;$c <= 3;$c++){
          print "<td>";
          $num--;
          $matriz[$l][$c] = $num;
          if($l == $c){
            print $matriz[$l][$c]." ";
          }
          print "</td>";
        }
        print "</tr>";
      }
        print "</table>";

      for ($i=0; $i <= 10; $i++) {
        $num = 0;
      print "<table border='2'>";
      for($l = 1;$l <= 3;$l++){
        print "<tr>";
        for($c = 1;$c <= 3;$c++){
          print "<td>";
          $num--;
          $matriz[$l][$c] = $num;
          if($l == $c){
            print $matriz[$l][$c]." ";
          }
          print "</td>";
        }
        print "</tr>";
      }
        print "</table>";

   
      }

      $slq = "SELECT * FROM t_Table WHERE id != 2";
      $num = 0;
      print "<table border='2'>";
      for($l = 1;$l <= 5;$l++){
        print "<tr>";
        for($c = 1;$c <= 5;$c++){
          print "<td>";
          $num++;
          $matriz[$l][$c] = $num;
          print $matriz[$l][$c]." ";
          print "</td>";
        }
        print "</tr>";
      }

      $num = 0;
      print "<table border='2'>";
      for($l = 1;$l <= 3;$l++){
        print "<tr>";
        for($c = 1;$c <= 3;$c++){
          print "<td>";
          $num--;
          $matriz[$l][$c] = $num;
          if($l == $c){
            print $matriz[$l][$c]." ";
          }
          print "</td>";
        }
        print "</tr>";
      }
        print "</table>";


        print "</table>";

        ?>