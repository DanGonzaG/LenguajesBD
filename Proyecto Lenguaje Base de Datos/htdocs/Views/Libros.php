<?php
include_once '../Views/Layout.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Libros</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
</head>

<body>
    <!-- Section-->
    <section class="py-5">
        <div class="container mt-5">
            <h2>Formulario de Libros</h2>
            <form>
                <div class="form-group">
                    <label for="editorial">Editorial</label>
                    <select class="form-control" id="editorial">
                        <option value="" disabled selected>Seleccione una editorial</option>
                        <option value="1">Editorial A</option>
                        <option value="2">Editorial B</option>
                        <option value="3">Editorial C</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="categoria">Categoría</label>
                    <select class="form-control" id="categoria">
                        <option value="" disabled selected>Seleccione una categoría</option>
                        <option value="1">Categoría A</option>
                        <option value="2">Categoría B</option>
                        <option value="3">Categoría C</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" id="titulo" placeholder="Ingrese el título">
                </div>
                <div class="form-group">
                    <label for="autor">Autor</label>
                    <input type="text" class="form-control" id="autor" placeholder="Ingrese el autor">
                </div>
                <div class="form-group">
                    <label for="sipnosis">Sipnosis</label>
                    <textarea class="form-control" id="sipnosis" rows="3" placeholder="Ingrese la sipnosis"></textarea>
                </div>
                <div class="form-group">
                    <label for="anio">Año</label>
                    <input type="number" class="form-control" id="anio" placeholder="Ingrese el año">
                </div>
                <div class="form-group">
                    <label for="existencia">Existencia</label>
                    <input type="number" class="form-control" id="existencia" placeholder="Ingrese la existencia">
                </div>
                <div class="form-group">
                    <label for="precio">Precio</label>
                    <input type="number" class="form-control" id="precio" placeholder="Ingrese el precio">
                </div>
                <div class="form-group">
                    <label for="rutaImagen">           
                    Subir Imagen
                    </label>
                    <br>
                    <input type="file" class="form-control-file" id="rutaImagen">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </section>
    <?php
    include_once '../Views/Footer.php';
    ?>
</body>

</html>