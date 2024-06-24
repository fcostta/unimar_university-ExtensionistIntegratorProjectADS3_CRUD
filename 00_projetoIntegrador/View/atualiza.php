<title>【 EDITAR ITENS CADASTRADOS 】</title>

<?php

include('header.php');

require('./ControllerBanco.php');

$id = $_POST['id'];
$nome = htmlspecialchars($_POST['nome']);
$tipoArmazenagem =  htmlspecialchars($_POST['tipoArmazenagem']);
$nomeSolicitante =  htmlspecialchars($_POST['nomeSolicitante']);
$descricaoItem =  htmlspecialchars($_POST['descricaoItem']);

$sql= "UPDATE dados_cadastrais_itens SET nome='$nome', tipo_armazenagem='$tipoArmazenagem', nome_solicitante='$nomeSolicitante', descricao_item='$descricaoItem' WHERE id_item = $id;";

$resultado = mysqli_query($conn, $sql);


    if ($conn->query($sql) === TRUE) {
      echo "<center><br><h3>Registro Alterado com Sucesso</h3><br>";
      echo "<a href='../index.html'><input type='button' value='  Voltar  '></a></center>";
    } else {
      echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }

include('footer.php');

?>