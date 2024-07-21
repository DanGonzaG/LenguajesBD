<?php
include_once '../Views/Layout.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Carrito de Compras</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
</head>

<body>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <h1 class="mb-4">Carrito de Compras</h1>
            <div class="row gx-4 gx-lg-5">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Producto</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Cantidad</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Ejemplo de productos en el carrito -->
                                <tr>
                                    <td>Producto A</td>
                                    <td>$40.00</td>
                                    <td><input type="number" class="form-control" value="1" min="1"></td>
                                    <td>$40.00</td>
                                    <td>
                                        <button class="btn btn-danger btn-sm">Eliminar</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Producto B</td>
                                    <td>$25.00</td>
                                    <td><input type="number" class="form-control" value="2" min="1"></td>
                                    <td>$50.00</td>
                                    <td>
                                        <button class="btn btn-danger btn-sm">Eliminar</button>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="3" class="text-end">Total:</td>
                                    <td>$90.00</td>
                                    <td></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a class="btn btn-outline-dark me-2" href="/" >Seguir Comprando</a>
                        <button class="btn btn-primary" id="btnPagar" data-bs-toggle="modal" data-bs-target="#modalPago">Proceder al Pago</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal de Pago -->
    <div class="modal fade" id="modalPago" tabindex="-1" aria-labelledby="modalPagoLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalPagoLabel">Proceder con el Pago</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formPago">
                        <div class="mb-3">
                            <label for="nombreTarjeta" class="form-label">Nombre en la Tarjeta</label>
                            <input type="text" class="form-control" id="nombreTarjeta" required>
                        </div>
                        <div class="mb-3">
                            <label for="numeroTarjeta" class="form-label">Número de Tarjeta</label>
                            <input type="text" class="form-control" id="numeroTarjeta" required>
                        </div>
                        <div class="mb-3">
                            <label for="fechaExpiracion" class="form-label">Fecha de Expiración</label>
                            <input type="text" class="form-control" id="fechaExpiracion" placeholder="MM/YY" required>
                        </div>
                        <div class="mb-3">
                            <label for="cvv" class="form-label">CVV</label>
                            <input type="text" class="form-control" id="cvv" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Pagar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de Confirmación de Pago -->
    <div class="modal fade" id="modalConfirmacion" tabindex="-1" aria-labelledby="modalConfirmacionLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalConfirmacionLabel">Confirmación de Pago</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Su pago ha sido procesado exitosamente.</p>
                    <p>Número de Confirmación: <span id="numeroConfirmacion"></span></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="location.href='/'">OK</button>
                </div>
            </div>
        </div>
    </div>

    <?php
    include_once '../Views/Footer.php';
    ?>
    <script>
        document.getElementById('formPago').addEventListener('submit', function(event) {
            event.preventDefault();
            // Simulación de procesamiento de pago
            setTimeout(function() {
                // Generar número de confirmación aleatorio (solo como ejemplo)
                var numeroConfirmacion = Math.floor(Math.random() * 1000000);
                // Mostrar modal de confirmación
                document.getElementById('numeroConfirmacion').textContent = numeroConfirmacion;
                var modalConfirmacion = new bootstrap.Modal(document.getElementById('modalConfirmacion'));
                modalConfirmacion.show();
            }, 1500); // Simular una demora de 1.5 segundos para el proceso
        });
    </script>
</body>

</html>
