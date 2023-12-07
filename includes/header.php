<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="Jurassic" />

        <title>Dashboard</title>
        
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/jquery.dataTables.min.css" rel="stylesheet" />
        <link href="css/dataTables.bootstrap5.min.css" rel="stylesheet" />

        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

        <!-- Summernote CSS - CDN Link -->
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
        <!-- //Summernote CSS - CDN Link -->
    </head>

<body class="sb-nav-fixed">

    <?php include('includes/navbar-top.php'); ?>

    <div id="layoutSidenav">

        <?php include('includes/sidebar.php'); ?>

        <div id="layoutSidenav_content">
            <main>

            <?php
            include('config/dbcon.php'); // Jika Anda memiliki file konfigurasi untuk koneksi database

            // $con = mysqli_connect("localhost", "root", "", "dss_destinasiwisata");

            // if (mysqli_connect_error()) {
            //     echo "Failed to connect to MySQL: " . mysqli_connect_error();
            //     exit();
            // }
            ?>
