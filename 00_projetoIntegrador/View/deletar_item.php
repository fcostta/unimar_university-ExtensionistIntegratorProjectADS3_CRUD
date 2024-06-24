<?php

include('header.php');

require('./ControllerBanco.php');

$id = $_GET['id'];

$sql= "DELETE FROM  dados_cadastrais_itens WHERE id_item = '$id';";

$resultado = mysqli_query($conn, $sql);

if ($conn->query($sql) === TRUE) {
      echo "<center><br><h3>Dados Excluídos com Sucesso</h3><br>";
      echo "<a href='listar_Item.php'><input type='button' value='  Voltar  '></a></center>";
} else {
      echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
}

  include('footer.php');

?>