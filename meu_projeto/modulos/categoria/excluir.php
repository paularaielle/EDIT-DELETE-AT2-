<?php 

if(isset($_GET["id"])&& is_numeric($_GET["id"])){
		
	$sql="DELETE FROM categoria WHERE id = :id";
	$stmt=conexao()->prepare($sql);
	$stmt->bindParam(':id',$_GET["id"]);
	$categoria = $stmt->execute();
	
	if($categoria){
		echo "Registro Excluido com Sucesso";
	}else{		
		echo "Erro ao Excluir Registro";
	}
	
	
}

?>