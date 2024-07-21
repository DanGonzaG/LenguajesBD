<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/Login':
        require __DIR__ . 'InterfazLenguageBD/Controller/LoginController.php';
        break;
    case '/Libros':
        require __DIR__ . '/Controller/LibrosController.php';
        break;
    case '/Categorias':
        require __DIR__ . '/Controller/CategoriasController.php';
        break;
    case '/Editoriales':
        require __DIR__ . '/Controller/EditorialesController.php';
        break;
        case '/Carrito':
            require __DIR__ . '/Controller/CarritoController.php';
            break;
    default:
        require __DIR__ . '/Controller/HomeController.php';
        break;
}
