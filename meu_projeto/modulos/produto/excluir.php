<?php 

if(isset($_GET["id"])&& is_numeric($_GET["id"])){
		
	$sql="DELETE FROM produto WHERE id = :id";
	$stmt=conexao()->prepare($sql);
	$stmt->bindParam(':id',$_GET["id"]);
	$produto = $stmt->execute();
	
	if($produto){
		echo "Registro Excluido com Sucesso";
	}else{		
		echo "Erro ao Excluir Registro";
	}
	
	
}

?>