<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="styles.css">
  <title>Ecuacion Cuadrada</title>
</head>
<body>
  <div class="container">
    <div class="calc">
      <form action="ecuaciones.php">
        <input type="number" name="a" placeholder="x2" value=<?php echo $_GET["a"]?>>
        <input type="number" name="b" placeholder="x1" value=<?php echo $_GET["b"]?>>
        <input type="number" name="c" placeholder="c" value=<?php echo $_GET["c"]?>>
        <input  type="submit" value="Calcular">
      </form>

      <h4>Resultado: </h4>
      <?php 
      if(isset($_GET["a"]) ) {
        $a = $_GET["a"]; 
      } else {
        $a = 0;
      }
      if(isset($_GET["b"]) ) {
        $b = $_GET["b"]; 
      } else {
        $b = 0;
      }
      if(isset($_GET["c"]) ) {
        $c = $_GET["c"]; 
      } else {
        $c = 0;
      }

      if (isset($_GET["a"]) == NAN or isset($_GET["b"]) == NAN or isset($_GET["c"]) == NAN) {
        echo "<p>Ingrese todos los numeros</p>";
      } else {
        $d = $b**2 - 4*$a*$c;
        if($d > 0) {
          $x1 = ((-$b - sqrt($b**2 - 4*$a*$c))/(2*$a));
          $x2 = ((-$b + sqrt($b**2 - 4*$a*$c))/(2*$a));
          echo "<p>Primera raiz: " . $x1 . "</p>";
          echo "<p>Segunda raiz: " . $x2 . "</p>";
        } else if($d == 0) {
          $x1 = ((-$b + sqrt($b**2 - 4*$a*$c))/(2*$a));
          echo "<p>Raiz unica: " . $x1 . "</p>";
        } else {
          echo "<p>No es posible calcular, posee raices imaginarias.</p>";
        }
      }
      ?>
      <img src="https://source.unsplash.com/200x200/?mathematics,equations,numbers" alt=":(">
    </div>
  </div>
</body>
</html>