
<?php
$host = 'localhost';
$dbname = 'oneformulary';
$user = 'root';
$pass = '';

try {
    // Conectar ao banco de dados
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Verificar se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $nickname = $_POST['nickname'];
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Hash para segurança

        // Preparar a consulta SQL
        $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email, nickname, senha) VALUES (:nome, :email, :nickname, :senha)");
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':nickname', $nickname);
        $stmt->bindParam(':senha', $senha);

        // Executar a consulta
        if ($stmt->execute()) {
            echo "Usuário cadastrado com sucesso!";
        } else {
            echo "Erro ao cadastrar usuário.";
        }
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}



