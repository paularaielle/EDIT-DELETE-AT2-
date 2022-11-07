<?php 

if(isset($_GET["id"])&& is_numeric($_GET["id"])){
		
	$sql="DELETE FROM vendedor WHERE id = :id";
	$stmt=conexao()->prepare($sql);
	$stmt->bindParam(':id',$_GET["id"]);
	$result = $stmt->execute();
	
	if($result){
		echo "Registro Excluido com Sucesso";
	}else{		
		echo "Erro ao Excluir Registro";
	}
	
	
}

?>