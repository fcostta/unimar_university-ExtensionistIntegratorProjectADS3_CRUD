<title>【 EDITAR ITENS CADASTRADOS 】</title>

<?php

include('header.php');

include('ControllerBanco.php');

$id= $_GET['id'];

$sql = "SELECT * FROM dados_cadastrais_itens WHERE id_item = $id";

$resultado = mysqli_query($conn, $sql);

$dados = mysqli_fetch_assoc($resultado);


?>

<!--DADOS DO FORMULÁRIO-->

        <!-- Início do formulário -->
        <form method="POST" action="./atualiza.php" onsubmit="return comfirm('Deseja atualizar os dados?')">
          <input type="hidden" name="id"value="<?php echo $dados['id_item'];?>">
           
          <br>
         
            <fieldset class="grupo">
                <!-- Campo do nome com legenda "nome" e css de classe "campo" -->
                <div class="campo">
                    <label for="nome"><strong>Nome do Item</strong></label>
                    <input type="text" name="nome" id="nome" style="width: 26em" required 
                            value="<?php echo $dados['nome'];?>">
                </div>
                <br>
                
            </fieldset> 


            <!-- Campo de desenvolvimento web com 3 opções de botões selecionáveis (radio button) e css de classe "campo" name="devweb" -->
            <div class="campo">
                <label><strong>Tipo de Armazenagem:</strong></label>
                
                <?php 

                 $tipoArmazenagem = $dados['tipo_armazenagem'];

                    if ($tipoArmazenagem == "Área seca")
                    {
                        echo    '<label>
                                <input type="radio" name="tipoArmazenagem" value="Área seca" checked /> Área seca
                                </label>
               
                                <label>
                                <input type="radio" name="tipoArmazenagem" value="Área molhada" /> Área molhada
                                </label>
                
                                <label>
                                <input type="radio" name="tipoArmazenagem" value="Área resfriada" /> Área resfriada
                                </label>';
                    }
                        elseif ($tipoArmazenagem == "Área molhada")
                        {

                            echo    '<label>
                                    <input type="radio" name="tipoArmazenagem" value="Área seca" /> Área seca</label>
               
                                    <label>
                                    <input type="radio" name="tipoArmazenagem" value="Área molhada" checked /> Área molhada
                                    </label>
                
                                    <label>
                                    <input type="radio" name="tipoArmazenagem" value="Área resfriada" /> Área resfriada
                                    </label>';
                        }
                            else
                            {
                                echo    '<label>
                                        <input type="radio" name="tipoArmazenagem" value="Área seca" /> Área seca
                                        </label>
               
                                        <label>
                                        <input type="radio" name="tipoArmazenagem" value="Área molhada" /> Área molhada
                                        </label>
                
                                        <label>
                                        <input type="radio" name="tipoArmazenagem" value="Área resfriada" checked /> Área resfriada
                                        </label>';
                            }

                ?>

            </div>
            

            <fieldset class="grupo">
                <!-- Campo do nome com legenda "nome" e css de classe "campo" -->
                <div class="campo">
                    <label for="nomeSolicitante"><strong>Nome do Solicitante</strong></label>
                    <input type="text" name="nomeSolicitante" id="nomeSolicitante" style="width: 26em" required
                    value="<?php echo $dados['nome_solicitante'];?>">
                </div>
                <br>
                
            </fieldset> 

            <!-- Caixa de texto -->
            <div class="campo">
                <br>
                <label for="descricaoItem"><strong>Descrição do Item: </strong></label>
                
                <textarea rows="6" style="width: 35em" id="descricaoItem" name="descricaoItem" wrap>
                    <?php echo trim($dados['descricao_item']);?>
                </textarea>
            </div>

            <!-- Botão para enviar o formulário -->
            <button class="botao" type="submit" onsubmit=""> Atualizar </button>            

        </form>

<?php

include('footer.php');

?>