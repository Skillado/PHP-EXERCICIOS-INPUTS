<?php

$n1 = $_POST['n1'];
$cinco= $n1*.05;
$cinquenta =  $n1*.5;;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recibo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/recibo.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
            <div class="container-fluid">
                <a href="index.php" class="navbar-brand mr-auto"><img src="img/logo_essj.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" style="border:none;">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto text-center">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container" style="width:100%;">
        <h1 class="display-4 mt-5">Resposta</h1>
        <hr>
        <table class="table">
            <thead class="bg-danger text-white">
                <tr>
                <th scope="col">Numero1</th>
                <th scope="col">5%</th>
                <th scope="col">50%</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $n1 ?></td>
                     <td><?= $cinco ?></td>
                     <td><?= $cinquenta ?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <script type="text/JavaScript" src="js/bootstrap.bundle.min.js"></script>    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</body>
</html>