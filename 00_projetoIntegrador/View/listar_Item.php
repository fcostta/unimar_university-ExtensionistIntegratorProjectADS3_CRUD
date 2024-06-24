
<title>【 RELATÓRIO DE ITENS CADASTRADOS 】</title>

<?php
  include('header.php');
?>

        <br>
        <br>


        <div class="row">

        <table border="4" class="table table-hover table -striped align-items-center">
            <thead class="text-center">
            <tr>
                <th scope="col" class="align-middle">CÓDIGO <br> ITEM</th>
                <th scope="col" class="align-middle">NOME DO <br> ITEM</th>
                <th scope="col" class="align-middle">TIPO DE <br> ARMAZEMAGEM</th>
                <th scope="col" class="align-middle">USUARIO <br> SOLICITANTE</th>
                <th scope="col" class="align-middle">DESCRIÇÃO <br> ITEM</th>
                <th scope="col" class="align-middle">AÇÕES</th>
            </tr>
            </thead>
            <?php
                require('./ControllerBanco.php');

                $dados_select = mysqli_query($conn, "SELECT id_item, nome, tipo_armazenagem, 	nome_solicitante, descricao_item FROM dados_cadastrais_itens");

                while($dado = mysqli_fetch_array($dados_select)) {
                        
                        echo '<tr class="text-center">';
                        echo '<td class="align-middle">'.$dado[0].'</td>';
                        echo '<td class="align-middle">'.$dado[1].'</td>';
                        echo '<td class="align-middle">'.$dado[2].'</td>';
                        echo '<td class="align-middle">'.$dado[3].'</td>';
                        echo '<td class="align-middle">'.trim($dado[4]).'</td>';
                        echo '<td class="align-middle">
                          <a href= "alterar_item.php?id='.$dado['id_item'].'" class="btn btn-warning text-black" style="background-color: #ffdc68"> Editar </a>
                          <a href= "deletar_item.php?id='.$dado['id_item'].'" class="btn btn-danger text-white" style="background-color: #bf2a23"> Excluir </a>
                        </td>';
                        echo '</tr>';
                        
                }
            ?>
        </table>
        <br />
        <center>
        <a href="../index.html"><input type="button" value="  Voltar  "></a>
        </center>
    </div>


<?php
  include('footer.php');
?>
