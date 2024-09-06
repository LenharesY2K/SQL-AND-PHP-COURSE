<?php include "cabecalho.php"; ?>
<?php

$link="index.php";

?>

<div class="container">
        <h1 class="mt-5">Cadastre-se!</h1>
        <br>
        <form action="processo.php" method="post" class="mt-3">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" class="form-control" required>
            </div><br>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div><br>
            <div class="form-group">
                <label for="nome">Senha</label>
                <input type="password" id="senha" name="senha" class="form-control" required>
            </div><br>
            <div class="form-group">
                <label for="email">Nickname</label>
                <input type="text" id="nickname" name="nickname" class="form-control" required>
            </div>
            <br><br><Br>
            <button type="submit" class="btn btn-danger col-3">Enviar</button>
        </form>
    </div>

    <center><div class="container mt-5">
    <a href="<?php echo htmlspecialchars($link); ?> "class="btn btn-danger col-3">Voltar</a>
    </div></center>

<?php include "rodape.php"; ?>