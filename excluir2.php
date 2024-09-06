
<?php include "cabecalho.php"; 

$link = "index.php";



include "conectar.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    if (!empty($id)) {
        $sql = "DELETE FROM usuarios WHERE id = ?";

        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("i", $id);

            if ($stmt->execute()) {
                echo "<div class='alert alert-success'>Usuário excluído com sucesso!</div>";
            } else {
                echo "<div class='alert alert-danger'>Erro ao excluir usuário: " . $conn->error . "</div>";
            }

            $stmt->close();
        }
    } else {
        echo "<div class='alert alert-warning'>ID inválido!</div>";
    }
}
?>
<BR>
<center><div class="container mt-5">
    <a href="<?php echo htmlspecialchars($link); ?> "class="btn btn-danger col-3">Voltar</a>
    </div></center>
    <br>
<?php include "rodape.php"; ?>
