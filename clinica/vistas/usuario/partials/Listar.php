

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de usuarios</h1>
    <table>
    <thead>
   <th>Id</th>
   <th>Nombre</th>
   <th>Usuario</th>
   <th>Perfil</th>
   <th>Codigo</th>
   <th>Especialidad</th>
   <th>Operaciones</th>
    </thead>
    <tbody>
    <?php
foreach ($usuarios as $key => $usuario) {
    echo "<tr><td>$usuario->id</td> <td>$usuario->nombre</td> <td>$usuario->usuario</td> <td>$usuario->perfil</td> <td>$usuario->codigo</td> <td>$usuario->especialidad</td> <td><button id='del-$usuario->id' class='btnEliminar'>Eliminar</button> <form action='usuario/Registrar' method='post'><input type='hidden' name='id' value=$usuario->id> <input type='submit' value='Modificar'></form>";
   
}

    ?>
     
    </tbody>
    </table>
</body>
</html>