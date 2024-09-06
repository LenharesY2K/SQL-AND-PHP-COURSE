<?php include "cabecalho.php"; ?>


<div class="container mt-5">
    <center><h2>Excluir Usuário</h2></center>
    <form method="POST" action="excluir2.php">
        <div class="mb-3">
            <center><label for="id" class="form-label">ID do Usuário:</label></center>
            <input type="text" class="form-control" name="id" id="id" required>
        </div>
        <center><button type="submit" class="btn btn-danger col-5">Excluir Usuário</button></center>
    </form>
</div>
<br><BR><BR><BR>
<center><img src="IMG/angryanya.gif" class="img-fluid" alt="Gif animado" style="width: 500px; height: auto;""></center>
<br>
<center><p>exclui nao mestre, coitado do id do usuario... :(</p></center>
<BR><BR><BR><BR><BR><BR>


<?php include "rodape.php"; ?>