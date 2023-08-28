<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-davice-width, initial- scane=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASE_URL; ?>/css/bootstrap.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="<?= BASE_URL; ?>/home" class="navbar-brand">Reza WEB</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" arial-controls="navbarNavAltMarkup" arial-expanded="false" aria-label="toggle navigator">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-item nav-link active" href="<?= BASE_URL; ?>/home">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="<?= BASE_URL; ?>/blog">Blog </a>
                <a class="nav-item nav-link" href="<?= BASE_URL; ?>/data/guru">Data Guru </a>
                <a class="nav-item nav-link" href="<?= BASE_URL; ?>/siswa/index"> Data Siswa </a>
                <a class="nav-item nav-link" href="<?= BASE_URL; ?>/user/profile">About </a>
                </div>
            </div>
        </div>
    </nav>