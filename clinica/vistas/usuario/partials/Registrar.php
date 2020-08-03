
<form action="" method="post">
<?php if (isset($user)) {
    echo "<input type='hidden' name='id' value='$user->id'>";
}
?>

<input type="text" name="nombre" placeholder="Nombre"  value="<?php echo (isset($user->nombre)) ? $user->nombre : "" ?>">
<input type="text" name="usuario" placeholder="Usuario" value="<?php echo (isset($user->usuario)) ? $user->usuario : "" ?>">
<input type="password" name="password" placeholder="Contraseña" value="<?php echo (isset($user->password)) ? $user->password : "" ?>">
<input type="number" name="perfil" placeholder="Perfil" value="<?php echo (isset($user->perfil)) ? $user->perfil : "" ?>">
<input type="text" name="codigo" placeholder="Codigo" value="<?php echo (isset($user->codigo)) ? $user->codigo : "" ?>">
<input type="text" name="especialidad" placeholder="Especialidad" value="<?php echo (isset($user->especialidad)) ? $user->especialidad : "" ?>">
<input type="submit" value="Enviar">
</form>
