<h1>ejercicio nº1</h1>

<?php

$pares=[2,4,6,8,10,12,14,16,18,20];

foreach ($pares as $lista) {
  echo "<p>$lista</p>";

}

 ?>

 <h1>ejercicio nº2</h1>

 <?php

$esquema=["Pedro","Ana",34,1];

print_r ($esquema);


  ?>

  <h1>ejercicio nº3</h1>
  <pre>
  <?php

  $valores=["nombre"=>"pedro","apellido"=>"torres","direccion"=>"av.mayor 3703","telefono"=>"1122334455"];

  print_r ($valores);

   ?>
 </pre>

 <h1>ejercicio nº4</h1>


 <?php

  $ciudades=["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles","Chicago" ];

  foreach ($ciudades as $key => $value) {
    echo "<p>La ciudad con el indice $key tiene como nombre $value</p>";
  }



  ?>


  <h1>ejercicio nº5</h1>

  <?php

  $ciudades=["MD"=>"Madrid","BCL"=>"Barcelona","LD"=>"Londres","NY"=>"New York", "LA"=>"Los Ángeles","CCG"=>"Chicago"];

  foreach ($ciudades as $key => $value) {

      echo ("<p>El indice de $value es $key</p>");

  }





   ?>
