<title>【 CADASTRO DE ITENS 】</title>

<?php
    
include('header.php');

    require('./ControllerBanco.php');

    $nome = $_POST['nome'];
    $tipoArmazenagem =  $_POST['tipoArmazenagem'];
    $nomeSolicitante =  $_POST['nomeSolicitante'];
    $descricaoItem =  $_POST['descricaoItem'];

    $sql = "INSERT INTO dados_cadastrais_itens (nome,tipo_armazenagem, nome_solicitante, descricao_item)
    VALUES ('$nome', '$tipoArmazenagem', '$nomeSolicitante', '$descricaoItem')";

    if ($conn->query($sql) === TRUE) {
      echo "<center><br><h3>Registro Inserido com Sucesso</h3><br>";
      echo "<a href='../index.html'><input type='button' value='  Voltar  '></a></center>";
    } else {
      echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }

include('footer.php');

?>