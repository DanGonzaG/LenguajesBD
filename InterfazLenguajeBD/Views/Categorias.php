<?php
include_once '../Views/Layout.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Categorias</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
</head>
<body>
<section class="py-5">
    <div class="container mt-5">
        <h2>Formulario de Categorías</h2>
        <form>
            <div class="form-group">
                <label for="nombreCategoria">Nombre Categoría</label>
                <input type="text" class="form-control" id="nombreCategoria" placeholder="Ingrese el nombre de la categoría">
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