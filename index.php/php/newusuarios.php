<?php require_once('../conn/connect.php'); ?>
<html>
<head><meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/estilosm.css">
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script src="../materialize/js/materialize.min.js"></script>
	<title>Buscador</title>
  <link rel="stylesheet" href="../materialize/css/materialize.min.css" />
</head>
<body>
  <div id="container">
		<img src="../img/logoMetro.png" id="logo">
	</div>

  <div class="container center">
    <center>
<?php
$area=$_POST['area'];
$nombre=$_POST['nombre'];
$apaterno=$_POST['apaterno'];
$amaterno=$_POST['amaterno'];
$nick=$_POST['nick'];
$password=$_POST['password'];
 echo "Área: ".$area."<br>"; 
 echo "Nombre: ".$nombre."<br>";
 echo "Apellido Paterno: ".$apaterno."<br>";
 echo "Apellido Materno: ".$amaterno. "<br>";
 echo "Nick: ".$nick;
 $consulta = "INSERT into usuarios values(null,'$area','$nombre','$apaterno','$amaterno','$nick',md5('$password'))";
 //echo "$consulta";
 $resultado = $connect->query($consulta);

?>
<br>
<a href="../cuentas.html"><input type="button" value="Regresar"></a>
</center>
</div>
</body>
</html>
