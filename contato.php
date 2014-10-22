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

            <form class="form-horizontal" action="contato_resultado.php" method="POST">
                <fieldset>

                    <!-- Text input-->
                    <div class="control-group">
                        <label class="control-label" for="nome">Nome</label>
                        <div class="controls">
                            <input id="nome" name="nome" type="text" placeholder="Nome" class="input-xlarge" required="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="control-group">
                        <label class="control-label" for="email">Email</label>
                        <div class="controls">
                            <input id="email" name="email" type="text" placeholder="Email" class="input-xlarge" required="">

                        </div>
                    </div>

                    <!-- Select Basic -->
                    <div class="control-group">
                        <label class="control-label" for="assunto">Assunto</label>
                        <div class="controls">
                            <select id="assunto" name="assunto" class="input-xlarge">
                                <option>Sugestão</option>
                                <option>Reclamação</option>
                                <option>Dúvida</option>
                            </select>
                        </div>
                    </div>

                    <!-- Textarea -->
                    <div class="control-group">
                        <label class="control-label" for="mensagem">Mensagem</label>
                        <div class="controls">
                            <textarea id="mensagem" name="mensagem">Escreva aqui o seu texto</textarea>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="control-group">
                        <label class="control-label" for="enviar"></label>
                        <div class="controls">
                            <button id="enviar" name="enviar" class="btn btn-default" >Enviar</button>
                        </div>


                </fieldset>
            </form>



    </div>


    <div id="push"></div>
</div>

<?php require_once("footer.php"); ?>

</body>
</html>