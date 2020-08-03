<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Tienda<h1>

<?php
include "vistas/header.php";
include "navegacion.php";
if (isset($action) && $action != "") {
    include "partials/".$action . ".php";
}

?>


</body>
</html>