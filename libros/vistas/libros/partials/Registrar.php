
<form action="" method="post">
<?php if (isset($libro1)) {
    echo "<input type='hidden' name='id' value='$libro1->id'>";
}
?>

<input type="text" name="codigo" placeholder="Codigo"  value="<?php echo (isset($libro1->codigo)) ? $libro1->codigo : "" ?>">
<input type="text" name="titulo" placeholder="Titulo" value="<?php echo (isset($libro1->titulo)) ? $libro1->titulo : "" ?>">
<input type="text" name="autor" placeholder="Autor" value="<?php echo (isset($libro1->autor)) ? $libro1->autor : "" ?>">
<input type="submit" value="Enviar">
</form>
