<?php
include "conectar.php";
include "cabecalho.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $nickname = $_POST['nickname'];
    $senha = $_POST['senha'];
    $link = "index.php";

    
    if (!empty($id) && !empty($nome) && !empty($email) && !empty($nickname) && !empty($senha)) {
        
        $sql = "UPDATE usuarios SET nome = ?, email = ?, nickname = ?, senha = ? WHERE id = ?";

        if ($stmt = $conn->prepare($sql)) {
            
            $stmt->bind_param("ssssi", $nome, $email, $nickname, $senha, $id);

            if ($stmt->execute()) {
                echo "<div class='alert alert-danger'>Usuário atualizado com sucesso!</div>";
            } else {
                echo "<div class='alert alert-warning'>Erro ao atualizar usuário: " . $stmt->error . "</div>";
            }

            $stmt->close();
        } else {
            echo "<div class='alert alert-danger'>Erro na preparação da query: " . $conn->error . "</div>";
        }
    } else {
        echo "<div class='alert alert-warning'>Por favor, preencha todos os campos!</div>";
    }
}
?>
<BR>
<center><div class="container mt-5">
    <a href="<?php echo htmlspecialchars($link); ?> "class="btn btn-danger col-3">Voltar</a>
    </div></center>
    <br>
<BR><BR><BR><BR><BR>
    <center><img src="IMG/anyafeliz.gif" class="img-fluid" alt="Gif animado" style="width: 500px; height: auto;""></center>
<br><br><BR><BR>

<?php include "rodape.php"; ?>

