<?php 

if(isset($_GET["id"])&& is_numeric($_GET["id"])){
	$id = $_GET["id"];
	$sql="SELECT * FROM venda WHERE id = :id";
	$stmt=conexao()->prepare($sql);
	$stmt->bindParam(':id', $id, PDO: : PARAM_INT);
	$venda = $stmt->execute();
	
?>

<form method="POST" action="">
   
    Nome<input type="text" class="form-control" name="nome"/> <br/>
    Idade <input type="text" class="form-control" name="idade"/> <br/>
    Data de Nascimento <input type="text" class="form-control" name="data_nasc"/> <br/>
    Data do Contrato <input type="text" class="form-control" name="data_contr"/> <br/>
    Salário <input type="text" class="form-control" name="sal"/> <br/>


    <input type="submit" name="botao" value="Salvar"/>
    
</form>

<?php
}
?>