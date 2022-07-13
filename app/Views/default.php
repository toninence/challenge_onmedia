<!DOCTYPE html>
<html lang="en">
<style>
    * {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
    }
</style>
<!-- fuente rickandmortyapi -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Creepster&family=PT+Sans&display=swap" rel="stylesheet">

<link rel="stylesheet" href="<?= base_url(); ?>/nav.css">
<script src="<?= base_url(); ?>/search.js"></script>

<head>
    <style>
        body {
            background-color: rgb(3, 44, 66);
            color: #fff;
        }
        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 20px 10px;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rick y Morty app</title>
    <?= $this->renderSection('header') ?>

</head>

<body>
    <?= view('components/navbar.php') ?>
    <div class="container">
        <?= $this->renderSection('content') ?>
    </div>
    <?= $this->renderSection('footer') ?>

</body>

</html>