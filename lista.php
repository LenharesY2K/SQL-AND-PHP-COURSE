<?php include "cabecalho.php"; ?>
<?php
$host = 'localhost';
$dbname = 'oneformulary';
$user = 'root';
$pass = '';
$link = 'index.php';
try {
    // Conectar ao banco de dados
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consultar todos os registros
    $stmt = $pdo->query("SELECT id, nome, email, nickname, reg_date FROM usuarios");
    $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
    <center><h1>Usuários Cadastrados</h1></center>
    <center><table border="1">
        <tr>
            <th class= col-2>ID</th>
            <th class= col-3>Nome</th>
            <th class= col-3>Email</th>
            <th class= col-3>Nickname</th>
            <th class= col-3>Data de Registro</th>
        </tr>
        <?php foreach ($usuarios as $usuario): ?>
        <tr>
            <td><?php echo htmlspecialchars($usuario['id']); ?></td>
            <td><?php echo htmlspecialchars($usuario['nome']); ?></td>
            <td><?php echo htmlspecialchars($usuario['email']); ?></td>
            <td><?php echo htmlspecialchars($usuario['nickname']); ?></td>
            <td><?php echo htmlspecialchars($usuario['reg_date']); ?></td>
        </tr>
        <?php endforeach; ?>
    </table></center>
    <br><Br>
    <center><div class="container mt-5">
    <a href="<?php echo htmlspecialchars($link); ?> "class="btn btn-danger col-3">Voltar</a>
    </div></center>



<?php include "rodape.php"; ?>