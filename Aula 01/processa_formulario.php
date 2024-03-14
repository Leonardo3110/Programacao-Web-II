<?php
// Recebe os dados do formulário via POST
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

// Obtém o cabeçalho da requisição
$cabecalho = apache_request_headers();

// Exibe os dados e o cabeçalho
echo "<h2>Dados Recebidos:</h2>";
echo "<p><strong>Nome:</strong> $nome</p>";
echo "<p><strong>Telefone:</strong> $telefone</p>";
echo "<p><strong>E-mail:</strong> $email</p>";
echo "<p><strong>Mensagem:</strong> $mensagem</p>";

echo "<h2>Cabeçalho da Requisição:</h2>";
echo "<pre>" . print_r($cabecalho, true) . "</pre>";

// Verifica se há parâmetros na URL (método GET)
if (!empty($_GET)) {
    echo "<h2>Parâmetros na URL (GET):</h2>";
    echo "<pre>" . print_r($_GET, true) . "</pre>";
}
?>