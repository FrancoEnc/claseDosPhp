<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<title>Primera web</title>
	<script src="https://kit.fontawesome.com/412f384ddd.js" crossorigin="anonymous"></script>
</head>

<body>
	<div class="container-fluid">
		<main>
<?php

$registro = array();

$datosPU = array();
$datosPU["nombre"] = "Franco";
$datosPU["apellido"] = "Encina";
$datosPU["edad"] = "20";
$datosPU["email"] = "franco@gmail.com";
$datosPU["dni"] = "43013848";

$datosPD = array();
$datosPD["nombre"] = "Ailina";
$datosPD["apellido"] = "Castro";
$datosPD["edad"] = "29";
$datosPD["email"] = "castroailen@gmail.com";
$datosPD["dni"] = "43013848";

$datosPT = array();
$datosPT["nombre"] = "Sofia";
$datosPT["apellido"] = "Aguirre";
$datosPT["edad"] = "24";
$datosPT["email"] = "sofia@gmail.com";
$datosPT["dni"] = "43013848";

$datosPC = array();
$datosPC["nombre"] = "Elian";
$datosPC["apellido"] = "Fuseneco";
$datosPC["edad"] = "30";
$datosPC["email"] = "elianfu@gmail.com";
$datosPC["dni"] = "43013848";

$registro[0] = $datosPU;
$registro[1] = $datosPD;
$registro[2] = $datosPT;
$registro[3] = $datosPC;
echo "<div class=\"row\">";
echo "<div class=\"col-12 col-sm-3\">Nombre</div>";
echo "<div class=\"col-12 col-sm-3\">Apellido</div>";
echo "<div class=\"col-12 col-sm-2\">Edad</div>";
echo "<div class=\"col-12 col-sm-2\">Email</div>";
echo "<div class=\"col-12 col-sm-2\">DNI</div>";
echo "</div>";
for ($i = 0; $i < count($registro); $i++) {
    echo "<div class=\"row\">";
    echo "<div class=\"col-12 col-sm-3\">".$registro[$i]["nombre"]."</div>";
    echo "<div class=\"col-12 col-sm-3\">".$registro[$i]["apellido"]."</div>";
    echo "<div class=\"col-12 col-sm-2\">".$registro[$i]["edad"]."</div>";
    echo "<div class=\"col-12 col-sm-2\">".$registro[$i]["email"]."</div>";
    echo "<div class=\"col-12 col-sm-2\">".$registro[$i]["dni"]."</div>";
    echo "</div>";

}
    





?>
        </main>
        <footer>

        </footer>
	</div>
</body>

</html>