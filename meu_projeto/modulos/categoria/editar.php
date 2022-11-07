<?php 

if(isset($_GET["id"])&& is_numeric($_GET["id"])){
	$id = $_GET["id"];
	$sql="SELECT * FROM categoria WHERE id = :id";
	$stmt=conexao()->prepare($sql);
	$stmt->bindParam(':id', $id, PDO: : PARAM_INT);
	$categoria = $stmt->execute();
	
?>

<form method="POST" action="">
   
    Cosmético<input type="text" class="form-control" name="cosmetico"/><br/>
    Roupa <input type="text" class="form-control" name="roupa"/> <br/>
    Sapato<input type="text" class="form-control" name="sapato"/> <br/>
    Jóia <input type="text" class="form-control" name="joia"/> <br/>
    Eletrônico <input type="text" class="form-control" name="eletronico"/> <br/>


    <input type="submit" name="botao" value="Salvar"/>
    
</form>

<?php
}
?>
