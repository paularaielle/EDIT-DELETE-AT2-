<?php
INCLUDE('classes/conexao.php');

if(isset($_POST["botao"])&& $_POST["botao"]=="Enviar"){

    echo "O formulário foi enviado";

    $cliente= $_POST['cliente'];
    $produto= $_POST['produto'];
    $vendedor= $_POST['vendedor'];
    $valor= $_POST['valor'];
    $forma_pg= $_POST['forma_pg'];


    $sql="INSERT INTO venda (cliente, produto, vendedor, valor, forma_pg) VALUES (?,?,?,?,?)";
    $stmt=conexao()->prepare($sql);
    $stmt->bindParam(1,$cliente);
    $stmt->bindParam(2,$produto);
    $stmt->bindParam(3,$vendedor);
    $stmt->bindParam(4,$valor);
    $stmt->bindParam(5,$forma_pg);
    $stmt->execute();

    echo"Salvo com sucesso";
}
?>

<form method="POST" action="">
    Cliente <input type="text" class="form-control"  name="cliente"/> <br/>
    Produto(s): <input type="text" class="form-control" name="produto"/> <br/>
    Vendedor: <input type="text" class="form-control" name="vendedor"/> <br/>
    Valor: <input type="text" class="form-control" name="valor"/> <br/>
    Forma de pagamento: <input type="text" class="form-control" name="forma_pg"/> <br/>


    <input type="submit" name="button" value="Enviar"/>
</form>


