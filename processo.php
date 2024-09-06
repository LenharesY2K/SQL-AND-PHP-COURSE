<?php include "cabecalho.php"; ?>
<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "oneformulary"; 
$link= "index.php";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome = $conn->real_escape_string(trim($_POST['nome']));
    $email = $conn->real_escape_string(trim($_POST['email']));
    $nickname = $conn->real_escape_string(trim($_POST['nickname']));
    $senha = $conn->real_escape_string(trim($_POST['senha']));

    
    $sql = "INSERT INTO usuarios (nome, email, nickname, senha) VALUES (?, ?, ?, ?)";

    
    if ($stmt = $conn->prepare($sql)) {
        
        $stmt->bind_param("ssss", $nome, $email, $nickname, $senha);

        if ($stmt->execute()) {
            echo "Cadastro realizado com sucesso!";
        } else {
            echo "Erro: " . $stmt->error;
        }

        
        $stmt->close();
    } else {
        echo "Erro na preparação da consulta: " . $conn->error;
    }
}


$conn->close();
?>
<br><br>
<center><div class="container mt-5">
    <a href="<?php echo htmlspecialchars($link); ?> "class="btn btn-danger col-3">Voltar</a>
    </div></center>

<?php include "rodape.php"; ?>