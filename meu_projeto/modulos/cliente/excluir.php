<?php 

if(isset($_GET["id"])&& is_numeric($_GET["id"])){
		
	$sql="DELETE FROM cliente WHERE id = :id";
	$stmt=conexao()->prepare($sql);
	$stmt->bindParam(':id',$_GET["id"]);
	$cliente = $stmt->execute();
	
	if($cliente){
		echo "Registro Excluido com Sucesso";
	}else{		
		echo "Erro ao Excluir Registro";
	}
	
	
}

?>