<?php
include_once 'Views/Layout.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Fancy Product</h5>
                                <!-- Product price-->
                                $40.00 - $80.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <!-- View options button to open modal -->
                                <button class="btn btn-outline-dark mt-auto" data-bs-toggle="modal" data-bs-target="#modalDetallesLibro">
                                    View options
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Sale Item</h5>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">$50.00</span>
                                $25.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <!-- View options button to open modal -->
                                <button class="btn btn-outline-dark mt-auto" data-bs-toggle="modal" data-bs-target="#modalDetallesLibro">
                                    View options
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Detalles del Libro -->
    <div class="modal fade" id="modalDetallesLibro" tabindex="-1" aria-labelledby="modalDetallesLibroLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDetallesLibroLabel">Detalles del Libro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Aquí va la información detallada del libro -->
                    <div class="row">
                        <div class="col-md-4">
                            <img src="https://dummyimage.com/300x400/dee2e6/6c757d.jpg" class="img-fluid" alt="Libro">
                        </div>
                        <div class="col-md-8">
                            <h4 class="fw-bold">Fancy Product</h4>
                            <p class="text-muted">$40.00 - $80.00</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis libero in nunc vehicula, eget accumsan lorem ultricies. Sed maximus justo nec nunc pellentesque consectetur.</p>
                            <p>Año: 2023</p>
                            <p>Existencia: 10 unidades</p>
                            <p>Autor: Autor Ejemplo</p>
                            <p>Categoría: Categoria Ejemplo</p>
                            <p>Editorial: Editorial Ejemplo</p>
                            <!-- Botón para agregar al carrito -->
                            <button class="btn btn-primary">Agregar al Carrito</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include_once 'Views/Footer.php';
    ?>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-fGGFVCt5b2z/bC2wqsC/QH5GOJS+FhHHqv4IyOeaWNJhDv8o4dD4neFm+K99JGvK" crossorigin="anonymous"></script>
</body>

</html>
