<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="yo.css">
    <title>Formulario de Inserción de Libros</title>
</head>
<body>
    <h1>Decime tu libro, poyo</h1>
    <form action="insertar_datos.php" method="POST">
        <div>
            <div>
                <label for="nombre_libro">Nombre libro</label>
                <input type="text" id="nombre_libro" name="Nombre_Libr" placeholder="Ingrese nombre del libro" required>
            </div>
            <div>
                <label for="nombre_autor">Nombre autor</label>
                <input type="text" id="nombre_autor" name="Nombre_Aut" placeholder="Ingrese nombre del autor" required>
            </div>
            <div>
                <label for="categoria">Categoría</label>
                <input type="text" id="categoria" name="Categoria" placeholder="Ingrese la categoría" required>
            </div>
            <div>
                <label for="stock">Stock</label>
                <input type="text" id="stock" name="Stock" placeholder="Ingrese el stock" required>
            </div>
            <div>
                <button type="submit">Enviar</button>
            </div>
        </div>
    </form>
</body>
</html>
