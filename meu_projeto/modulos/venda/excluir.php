<?php 

if(isset($_GET["id"])&& is_numeric($_GET["id"])){
		
	$sql="DELETE FROM venda WHERE id = :id";
	$stmt=conexao()->prepare($sql);
	$stmt->bindParam(':id',$_GET["id"]);
	$venda = $stmt->execute();
	
	if($venda){
		echo "Registro Excluido com Sucesso";
	}else{		
		echo "Erro ao Excluir Registro";
	}
	
	
}

?>