<html>
<head>
    <title>Site Simples</title>
    <?php require_once("estilo.css"); ?>
</head>

<body>

<div id="wrap">
    <?php require_once("menu.php"); ?>
    <!-- Begin page content -->
    <div class="container">
        <div class="page-header">
            <h1>Contato</h1>
        </div>
        <!-- Menssagem de Sucesso -->
        Dados enviados com sucesso, abaixo seguem os dados que você enviou:
        <br>
        Nome: <?php echo $_POST["nome"]; ?>.
        <br>
        Email: <?php echo $_POST["email"]; ?>.
        <br>
        Assunto: <?php echo $_POST["assunto"]; ?>.
        <br>
        Menssagem: <?php echo $_POST["mensagem"]; ?>.
        <br>



    </div>


    <div id="push"></div>
</div>

<?php require_once("footer.php"); ?>

</body>
</html>