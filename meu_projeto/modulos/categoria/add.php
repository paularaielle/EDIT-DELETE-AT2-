<?php
INCLUDE('classes/conexao.php');

if(isset($_POST["botao"])&& $_POST["botao"]=="Enviar"){

    echo "O formulário foi enviado";

    $cosmetico= $_POST['cosmetico'];
    $roupa= $_POST['roupa'];
    $sapato= $_POST['sapato'];
    $joia= $_POST['joia'];
    $eletronico= $_POST['eletronico'];


    $sql="INSERT INTO categorias (cosmetico, roupa, sapato, joia, eletronico) VALUES (?,?,?,?,?)";
    $stmt=conexao()->prepare($sql);
    $stmt->bindParam(1,$cosmetico);
    $stmt->bindParam(2,$roupa);
    $stmt->bindParam(3,$sapato);
    $stmt->bindParam(4,$joia);
    $stmt->bindParam(5,$eletronico);
    $stmt->execute();

    echo"Salvo com sucesso";
}
?>

<form method="POST" action="">
   
    Cosmético<input type="text" class="form-control" name="cosmetico"/><br/>
    Roupa <input type="text" class="form-control" name="roupa"/> <br/>
    Sapato<input type="text" class="form-control" name="sapato"/> <br/>
    Jóia <input type="text" class="form-control" name="joia"/> <br/>
    Eletrônico <input type="text" class="form-control" name="eletronico"/> <br/>


    <input type="submit" name="botao" value="Enviar"/>
    
</form>


