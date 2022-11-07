<?php
INCLUDE('classes/conexao.php');

if(isset($_POST["botao"])&& $_POST["botao"]=="Enviar"){

    echo "O formulário foi enviado";

    $produto= $_POST['produto'];
    $estoque= $_POST['estoque'];
    $valor_f= $_POST['valor_f'];
    $valor_v= $_POST['valor_v'];
    $fornecedor= $_POST['fornecedor'];


    $sql="INSERT INTO produto (produto, estoque, data_c, valor_v, fornecedor) VALUES (?,?,?,?,?)";
    $stmt=conexao()->prepare($sql);
    $stmt->bindParam(1,$produto);
    $stmt->bindParam(2,$estoque);
    $stmt->bindParam(3,$valor_f;
    $stmt->bindParam(4,$valor_v);
    $stmt->bindParam(5,$fornecedor);
    $stmt->execute();

    echo"Salvo com sucesso";
}
<form method="POST" action="">
    Produto <input type="text" class="form-control" name="produto"/> <br/>
    Estoque <input type="text" class="form-control" name="estoque"/> <br/>
    Valor de Fábrica <input type="text" class="form-control" name="valor_f"/> <br/>
    Valor de Venda <input type="text" class="form-control" name="valor_v"/> <br/>
    Fornecedor <input type="text" class="form-control" name="fornecedor"/> <br/>


    <input type="submit" name="button" value="Enviar"/>
</form>