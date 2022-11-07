<?php
INCLUDE('classes/conexao.php');

if(isset($_POST["botao"])&& $_POST["botao"]=="Enviar"){

    echo "O formulário foi enviado";

    $nome= $_POST['nome'];
    $idade= $_POST['idade'];
    $data_nasc= $_POST['data_nasc'];
    $data_contr= $_POST['data_contr'];
    $sal= $_POST['sal'];


    $sql="INSERT INTO vendedor (nome, idade, data_nasc, data_contr, sal) VALUES (?,?,?,?,?)";
    $stmt=conexao()->prepare($sql);
    $stmt->bindParam(1,$nome);
    $stmt->bindParam(2,$idade);
    $stmt->bindParam(3,$data_nasc);
    $stmt->bindParam(4,$data_contr);
    $stmt->bindParam(5,$sal);
    $stmt->execute();

    echo"Salvo com sucesso";
}
?>

<form method="POST" action="add.php">
    Nome<input type="text" class="form-control" name="nome"/> <br/>
    Idade <input type="text" class="form-control" name="idade"/> <br/>
    Data de Nascimento <input type="text" class="form-control" name="data_nasc"/> <br/>
    Data do Contrato <input type="text" class="form-control" name="data_contr"/> <br/>
    Salário <input type="text" class="form-control" name="sal"/> <br/>


    <input type="submit" name="button" value="Enviar"/>
</form>
