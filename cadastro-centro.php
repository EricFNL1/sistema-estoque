<?php 
require_once 'conexao.php';

$setornome = $_POST['id_setornome'];


$sql = "INSERT INTO cadastro_centrodecusto (id_setornome) VALUES ('$setornome')";

if ($conn->query($sql) === TRUE) {
    echo "Novo registro criado com sucesso";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

?>