
<h3>EJERCICIO Nº1<br></h3>
<h2>
<?php
  $a=3;

  if ($a > 0) {
    echo "$a es un numero positivo <br><hr>";
  }

 ?>
 </h2>
<h3>EJERCICIO Nº2<br></h3>
<h2>
 <?php

    $b=8;
    if ($b>1 & $b<10) {
      echo "$b es mayor a 1 y menor a 10";
    }
    else {
      echo "$b no esta dentro del rango especificado <br><hr> ";
    }
  ?>
  </h2>

  <h3>EJERCICIO Nº3<br></h3>
  <h2>
    <?php

    $C=1;

    if ($C>10 || $C<2) {
      echo "$C ES MAYOR A 10 O MENOR QUE 2 <br> <hr>";
    }
    else {
      echo "$C NO ESTA DENTRO DEL RANGO especificado <br> <hr>";
    }
     ?>
     </h2>

     <h3>EJERCICIO Nº4<br></h3>
      <h2>
     <?php
      $numero1=5;
      $numero2=15;
      $suma=$numero1+$numero2;
      $resta=$numero1-$numero2;
      $mult=$numero1*$numero2;
      $division=$numero1/$numero2;
      $resto=$numero1%$numero2;

      echo "numero1 = $numero1 <br>";
      echo "numero2 = $numero2<br><br>";

      if ($numero1>$numero2) {
        echo "la suma es $suma <br> la resta es $resta <br> <hr>";
      }
      elseif ($numero1<$numero2) {
        echo "la multiplicacion es $mult <br> la division es $division<br> el resto es $resto<br> <hr>";
      }
      elseif ($numero1 == $numero2) {
        echo "los numeros son iguales <br> <hr> ";
      }

            ?>
            </h2>
