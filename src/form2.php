<?php
    $out_nome = $_POST["nome"];
    $out_email = $_POST["email"];
    $out_cidade = $_POST["cidade"];
?>
<html>
    <body>
        <form id="form2" name="form2" method="post" action="form2.php">
            <p>
            <label for="nome">Nome:<br />
            </label>
            <input type="text" size="70" name="nome" id="nome" required="required" value="<?php echo $out_nome; ?>" />
            </p>
            <p>
            <label for="email">E-mail:<br />
            </label>
            <input type="text" size="70" name="email" id="email" required="required" value="<?php echo $out_email; ?>" />
            </p>
            <p>
            <label for="cidade">Cidade:<br />
            </label>
            <input type="text" size="70" name="cidade" id="cidade" required="required" value="<?php echo $out_cidade; ?>" />
            </p>
            <p>
            <label for="fone">Fone:<br />
            </label>
            <input type="text" size="70" name="fone" id="fone" required="required" value="" />
            </p>
            <p>
            <label for="cnpj">CNPJ MEI:<br />
            </label>
            <input type="text" size="70" name="cnpj" id="cnpj" required="required" value="" />
            </p>
            <p>
            <label for="cpf">CPF:<br />
            </label>
            <input type="text" size="70" name="cpf" id="cpf"  required="required" value=""/>
            </p>
            <p>
            <label for="dtnasc">Data de Nascimento:<br />
            </label>
            <input type="text" size="70" name="dtnasc" id="dtnasc" placeholder="DD/MM/AAA" required="required" value="" />
            </p>
                <p>
            <label for="atividade">Atividade:<br />
            </label>
            <input type="text" size="70" name="atividade" id="atividade" required="required" value="" />
            </p>
        
            <p>
            <select name="pacote" required="required">
            <option value="pacote1">Pacote 1</option>
                <option value="pacote2">Pacote 2</option>
                <option value="pacote3">Pacote 3</option>
            </select>
            
            </p>
            <input name="cadastro" type="submit" value="Cadastre-se" />
        </form>
    </body>
  </html>