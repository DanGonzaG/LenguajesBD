<?php
include_once '../Views/Layout.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Editoriales</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
</head>

<body>
    <section class="py-5">
        <div class="container mt-5">
            <h2 class="mt-5">Formulario de Editoriales</h2>
            <form>
                <div class="form-group">
                    <label for="nombreEditorial">Nombre Editorial</label>
                    <input type="text" class="form-control" id="nombreEditorial" placeholder="Ingrese el nombre de la editorial">
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input type="tel" class="form-control" id="telefono" placeholder="Ingrese el teléfono">
                </div>
                <div class="form-group">
                    <label for="sitioWeb">Sitio Web</label>
                    <input type="url" class="form-control" id="sitioWeb" placeholder="Ingrese el sitio web">
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