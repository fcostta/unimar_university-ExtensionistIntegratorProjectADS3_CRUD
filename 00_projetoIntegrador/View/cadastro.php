
<title>【 CADASTRO DE ITENS 】</title>

<?php

  include('header.php');

?>
<!--DADOS DO FORMULÁRIO-->

        <!-- Início do formulário -->
        <form method="POST" action="./cadastro_Item.php">
          <br>

            <fieldset class="grupo">
                <!-- Campo do nome com legenda "nome" e css de classe "campo" -->
                <div class="campo">
                    <label for="nome"><strong>Nome do Item</strong></label>
                    <input type="text" name="nome" id="nome" style="width: 26em" required>
                </div>
                <br>
                
            </fieldset> 


            <!-- Campo de desenvolvimento web com 3 opções de botões selecionáveis (radio button) e css de classe "campo" -->
            <div class="campo">
                <label><strong>Tipo de Armazenagem:</strong></label>
                
                <label>
                    <input type="radio" name="tipoArmazenagem" value="Área seca" checked> Área seca
                </label>
               
                <label>
                    <input type="radio" name="tipoArmazenagem" value="Área molhada"> Área molhada
                </label>
                
                <label>
                    <input type="radio" name="tipoArmazenagem" value="Área resfriada"> Área resfriada
                </label>
            </div>
            

            <fieldset class="grupo">
                <!-- Campo do nome com legenda "nome" e css de classe "campo" -->
                <div class="campo">
                    <label for="nomeSolicitante"><strong>Nome do Solicitante</strong></label>
                    <input type="text" name="nomeSolicitante" id="nomeSolicitante" style="width: 26em" required>
                </div>
                <br>
                
            </fieldset> 

            <!-- Caixa de texto -->
            <div class="campo">
                <br>
                <label for="descricaoItem"><strong>Descrição do Item: </strong></label>
                
                <textarea rows="6" style="width: 35em" id="descricaoItem" name="descricaoItem"></textarea>
            </div>

            <!-- Botão para enviar o formulário -->
            <button class="botao" type="submit" onsubmit=""> Cadastrar </button>           

        </form>

<?php
  include('footer.php');
?>
