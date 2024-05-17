<?php 
require_once 'conexao.php';

$cidade = $_POST['id_cidade'];
$nome = $_POST['id_nome'];
$telefone = $_POST['id_contato'];

$sql = "INSERT INTO cadastro_fornecedor (id_cidade, id_nome, id_contato) VALUES ('$cidade', '$nome','$telefone')";

if ($conn->query($sql) === TRUE) {
    echo "Novo registro criado com sucesso";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

?>