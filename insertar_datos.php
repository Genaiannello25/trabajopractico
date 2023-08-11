
<?php
$conexion= mysqli_connect("localhost","root","","bibliotecashe") or exit ("no se puede conectar.....");
$nombre_libro = $_POST["Nombre_Libr"];
$nombre_autor = $_POST["Nombre_Aut"];
$categoria = $_POST["Categoria"];
$stock = $_POST["Stock"];

$insertar = "INSERT INTO `abregu` (`id_Libro`, `Nombre_Libr`, `Nombre_Aut`, `Categoria`, `Stock`) VALUES (NULL, '$nombre_libro', '$nombre_autor', '$categoria', '$stock')";
if (mysqli_query($conexion, $insertar)) {
    echo "Consulta enviada";
} else {
    echo "Error al ejecutar la consulta: " . mysqli_error($conexion);
}

$consulta1 = mysqli_query($conexion, "SELECT * FROM abregu");

while ($list = mysqli_fetch_assoc($consulta1)) {
    ?>
    <div>
        <ul>
            <li><?php echo $list["Nombre_Libr"] ?></li>
            <li><?php echo $list["Nombre_Aut"] ?></li>
            <li><?php echo $list["Categoria"] ?></li>
            <li><?php echo $list["Stock"] ?></li>
        </ul>
    </div>
<?php
}
?>

