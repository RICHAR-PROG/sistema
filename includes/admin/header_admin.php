<?php
include("../../model/database/conexion.php");

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dashboard ABQ</title>
    <link type="image/x-icon" href="../../resource/img/logo.png" rel="shortcut icon">

    <link rel="stylesheet" href="../../assets/fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!-- https://fonts.google.com/ -->
    <link href="../../assets/lib/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="../assets/estyle_dashboard.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../assets/estyle_dashboard.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script>
        function guardarSeleccionado(indice) {
            // Almacenar el índice del elemento de lista seleccionado en localStorage
            localStorage.setItem("seleccionado", indice);

            // Establecer el elemento de lista seleccionado como "active"
            var lis = document.getElementsByClassName("tm-nav-item");
            for (var i = 0; i < lis.length; i++) {
                if (i == indice) {
                    lis[i].classList.add("active");
                } else {
                    lis[i].classList.remove("active");
                }
            }
        }
    </script>
</head>

<body>
    <header class="tm-header" id="tm-header">
        <div class="tm-header-wrapper">
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="tm-site-header">
                <div class="mb-3 mx-auto tm-site-logo">
                    <img src="../../resource/img/logo.png" height="180px" alt="">
                </div>
                <h1 class="text-center">A.B.Q</h1>
            </div>
            <nav class="tm-nav" id="tm-nav">
                <ul>
                    <li class="tm-nav-item active">
                        <a href="../../view/admin/dashboard.php" class="tm-nav-link active">
                            <i class="fa fa-users"></i>
                            Docentes
                        </a>
                    </li>
                    <li class="tm-nav-item" onclick="guardarSeleccionado(1)">
                        <a href="../../view/admin/documentos.php" class="tm-nav-link" >
                            <i class="fas  fa-file"></i>
                            Documentos
                        </a>
                    </li>
                    <!-- <li class="tm-nav-item">
                        <a href="about.html" class="tm-nav-link" onclick="guardarSeleccionado(2)">
                            <i class="fa fa-user"></i>
                            Cuenta we
                        </a>
                    </li> -->
                </ul>
            </nav>

            <p class="tm-mb-80 pr-5 text-white">
            </p>
        </div>
    </header>

    <div class="container-fluid">
        <main class="tm-main">