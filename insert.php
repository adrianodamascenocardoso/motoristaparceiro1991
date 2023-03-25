<?php
// Configurações do banco de dados
$host = "localhost";
$user = "seu_usuario";
$pass = "sua_senha";
$db = "seu_banco_de_dados";

// Conexão com o banco de dados
$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}

// Recebe os dados do formulário via POST
$nome = $_POST['nome'];
$musica = $_POST['musica'];
$opcao = $_POST['opcao'];

// Insere os dados na tabela do banco de dados
$sql = "INSERT INTO tabela_musica (nome, musica, opcao) VALUES ('$nome', '$musica', '$opcao')";
if (mysqli_query($conn, $sql)) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir dados: " . mysqli_error($conn);
}

// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>
