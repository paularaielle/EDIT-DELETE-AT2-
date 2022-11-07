<?php 

if(isset($_GET["id"])&& is_numeric($_GET["id"])){
	$id = $_GET["id"];
	$sql="SELECT * FROM venda WHERE id = :id";
	$stmt=conexao()->prepare($sql);
	$stmt->bindParam(':id', $id, PDO: : PARAM_INT);
	$venda = $stmt->execute();
	
?>

<form method="POST" action="">
   
    Cliente <input type="text" class="form-control"  name="cliente"/> <br/>
    Produto(s): <input type="text" class="form-control" name="produto"/> <br/>
    Vendedor: <input type="text" class="form-control" name="vendedor"/> <br/>
    Valor: <input type="text" class="form-control" name="valor"/> <br/>
    Forma de pagamento: <input type="text" class="form-control" name="forma_pg"/> <br/>


    <input type="submit" name="botao" value="Salvar"/>
    
</form>

<?php
}
?>