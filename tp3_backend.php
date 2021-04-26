<h1>ejercicio nº1</h1>
<?php
$i=1;
while ($i <= 100) {

echo "<p>$i</p>";
$i++;

}

 ?>

 <h1>ejercicio nº2</h1>

 <?php
 $i=100;
 while ($i > 0) {
   echo "<p>$i</p>";
   $i--;
 }

  ?>

  <h1>ejercicio nº3</h1>

  <?php

  for ($i=2; $i<=100; $i=$i+2) {
    echo "<p>$i</p>";
  }
   ?>

   <h1>ejercicio nº4</h1>

   <?php
    for ($i=1; $i<=100; $i=$i+2) {
      echo "<p>$i</p>";
    }


    ?>

    <h1>ejercicio nº5</h1>

    <?php

      print "<p>Comienzo</p>\n";
      $suma = 0;
      for ($i = 1; $i <= 20; $i++) {
      $suma += $i;
      }
      print "<p>La suma de los números del 1 al 20 es $suma.</p>\n";
      print "<p>Final</p>\n";
      ?>

      <h1>ejercicio nº6</h1>

      <?php
      print "<p>Comienzo</p>\n";
      $suma = 0;
      for ($i = 0; $i <= 20; $i=$i+2) {
      $suma += $i;
      }
      print "<p>La suma de los números pares del 1 a 20 es $suma.</p>\n";
      print "<p>Final</p>\n";
      ?>
