<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<h2>
    <?php
    echo "hola mundo <br> <hr>";

    $nombre = "hola mundo";

    echo "$nombre <br> <hr>";

    $n1 = 8;
    $n2 = 3;
    $suma=$n1+$n2;
    $resta=$n1-$n2;
    $mult=$n1*$n2;
    $div=$n1/$n2;
    $resto=$n1%$n2;


    echo "$n1+$n2=$suma <br>" . "$n1-$n2=$resta <br>" . "$n1*$n2=$mult <br>" . "$n1/$n2=$div <br>" . "$n1%$n2=$resto <hr>";

    // formula para conversion ºF = (ºC · 1,8) + 32

    $grado=20;
    $fahrenheit= ($grado*1.8)+32;

    echo "$grado grados celcius equivalen a  $fahrenheit grados fahrenheit<hr>";

    $base=18;
    $altura=12;
    $area = $base*$altura;
    $perimetro = 2*$base + 2*$altura;

    echo "el area del rectangulo es $area <br>" . "el perimetro del rectangulo es $perimetro <hr>";

    $pi = 3.1415;
    $radio = 30;
    $area = $pi*$radio*$radio;
    $perimetro = 2 * $pi * $radio;

    echo "el area del circulo es $area <br>" . "el perimetro del circulo es $perimetro <hr>";


      ?>
    </h2>
  </body>
</html>
