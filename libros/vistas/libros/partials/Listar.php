<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
</head>
<body>
    <h1>Lista de libros</h1>
    <table>
    <thead>
   <th>Id</th>
   <th>Codigo</th>
   <th>Titulo</th>
   <th>Autor</th>
     <th>Operaciones</th>
    </thead>
    <tbody>
    <?php
foreach ($libros as $key => $libro) {
    echo "<tr><td>$libro->id</td> <td>$libro->codigo</td> <td>$libro->titulo</td> <td>$libro->autor</td><td><button id='del-$libro->id' class='btnEl'>Eliminar</button> <form action='libros/Registrar' method='post'><input type='hidden' name='id' value=$libro->id> <input type='submit' value='Modificar'></form>";

}

?>

    </tbody>
    </table>
</body>
</html>