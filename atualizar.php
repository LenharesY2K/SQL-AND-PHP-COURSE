<?php include "cabecalho.php"; ?>


<div class="container mt-5">
    <center><h2>Atualizar Usuário</h2></center>
    <form method="POST" action="atualizar2.php">
        <div class="mb-3">
            <center><label for="id" class="form-label">ID do Usuário:</label></center>
            <input type="text" class="form-control" name="id" id="id" required>
        </div>
        <div class="mb-3">
           <center> <label for="nome" class="form-label">Novo Nome:</label></center>
            <input type="text" class="form-control" name="nome" id="nome" required>
        </div>
        <div class="mb-3">
            <center><label for="email" class="form-label">Novo Email:</label></center>
            <input type="email" class="form-control" name="email" id="email" required>
        </div>
        <div class="mb-3">
            <center><label for="email" class="form-label">Novo Nickname:</label></center>
            <input type="text" class="form-control" name="nickname" id="nickname" required>
        </div>
        <div class="mb-3">
            <center><label for="email" class="form-label">Nova Senha:</label></center>
            <input type="password" class="form-control" name="senha" id="senha" required>
        </div>
        <br>
        <Center><button type="submit" class="btn btn-danger col-5">Atualizar Usuário</button></center>
    </form>
</div>


<?php include "rodape.php"; ?>