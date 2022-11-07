<?php 

if(isset($_GET["id"])&& is_numeric($_GET["id"])){
	$id = $_GET["id"];
	$sql="SELECT * FROM produto WHERE id = :id";
	$stmt=conexao()->prepare($sql);
	$stmt->bindParam(':id', $id, PDO: : PARAM_INT);
	$produto = $stmt->execute();
	
?>

<form method="POST" action="">
   
    Produto <input type="text" class="form-control" name="produto"/> <br/>
    Estoque <input type="text" class="form-control" name="estoque"/> <br/>
    Valor de Fábrica <input type="text" class="form-control" name="valor_f"/> <br/>
    Valor de Venda <input type="text" class="form-control" name="valor_v"/> <br/>
    Fornecedor <input type="text" class="form-control" name="fornecedor"/> <br/>

    <input type="submit" name="botao" value="Salvar"/>
    
</form>

<?php
}
?>