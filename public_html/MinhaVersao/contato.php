                <div id="bussola">
                    <h4>Glass > Fale Conosco</h4>
                </div>
                <h2>Formulário de Contato</h2>

                <form method="post" id="frmContato" action="captura.php">
                    <fieldset id="usuario">
                        <legend>Identificação do Usuário</legend>
                        <p><label for="cmpNome">Nome</label>: <input type="text" name="txtNome" id="cmpNome" size="30" maxlength="30" placeholder="Nome Completo" /> </p>
                        <p><label for="cmpSenha">Senha</label>: <input type="password" name="txtSenha" id="cmpSenha" size="8" maxlength="8" placeholder="08 Dígitos" /></p>
                        <p><label for="cmpEmail">E-mail</label>: <input type="E-mail" name="txtEmail" id="cmpEmail" size="40" maxlength="40" placeholder="Digite um e-mail válido"></p>
                        <fieldset id="sexo">
                            <legend>Sexo:</legend>
                            <input type="radio" name="rdbSexo" id="opMas" checked="checked" /><label for="opMas">Masculino</label></p>
                            <input type="radio" name="rdbSexo" id="opFem" /><label for="opFem">Feminino</label>
                        </fieldset>
                        <p>Data de Nascimento: <input type="date" name="txtData" id="cmpData"></p>
                    </fieldset>

                    <fieldset id="endereco">    
                        <legend>Endereço do Usuário</legend>
                        <p><label for="cmpEnd">Logradouro</label>: <input type="text" name="txtEnd" id="cmpEnd" size="40" maxlength="40" placeholder="Endereço Completo" /> </p>
                        <p><label for="cmpNum">Número</label>: <input type="number" name="txtNum" id="cmpNum" min="0" max="99999" /></p>
                        <p><label for="cmpUF">Estado</label>:
                            <select name="slcUF" id="opUF">
                                <optgroup label="Região Sudeste">
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="MG">Minas Gerais</option>
                                </optgroup>
                                <optgroup label="Região Sul">
                                    <option value="PR">Paraná</option>
                                    <option value="SC" selected>Santa Catarina</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                </optgroup>
                            </select>
                        </p>
                        <p><label for="cmpCidade">Cidade</label>: <input type="text" name="txtCidade" id="cmpCidade" size="30" maxlength="30" list="opCidade" placeholder="Cidade" /></p>
                        <datalist id="opCidade">
                            <option value="Rio de Janeiro"></option>
                            <option value="São Paulo"></option>
                            <option value="Belo Horizonte"></option>
                            <option value="Curitiba"></option>
                            <option value="Florianópolis"></option>
                            <option value="Porto Alegre"></option>
                        </datalist>
                    </fieldset>
                    
                    <fieldset id="mensagem">
                        <legend>Mensagem do Usuário</legend>
                        <p><label for="cmpUrg">Grau de Urgência</label>: &nbsp; 0<input type="range" name="rngGrau" id="cmpUrg" min="0" max="10" />10</p>
                        <p><label for="cmpMsg">Mensagem</label>: <textarea name="txtMsg" id="cmpMsg" cols="50" rows="5" placeholder="Deixe sua mensagem."></textarea></p>
                    </fieldset>
    
                    <fieldset id="pedido">
                        <legend>Quero um Google Glass</legend>
                        <p><input type="checkbox" name="opPed" id="cmpPed" /> <label for="cmpPed">Gostaria de adquirir um Google Glass quando disponível</label></p>
                        <p><label for="cmpCor">Cor</label>: <input type="color" name="cores" id="cmpCor" /> </p>
                        <p><label for="cmpQtd">Quantidade</label>: <input type="number" name="Qtd" id="cmpQtd" min="1" max="5" maxlength="3" oninput="calcTotal()" /> x R$ 1500,00 </p>
                        <p><label for="cmpPreco">Preço Total</label>: R$ <input type="text" name="Valor" id="cmpPreco" readonly /> </p>
                    </fieldset>
                    
                    <p>
                    <!-- <input type="submit" id="btnEnviar" name="Enviar" title="Enviar" /> <br/> -->
                    <input type="image" src="imagens/botao-enviar.png" name="Enviar" id="btnEnviar">
                    <p>
                </form>