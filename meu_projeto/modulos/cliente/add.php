<?php
INCLUDE('classes/conexao.php');

if(isset($_POST["botao"])&& $_POST["botao"]=="Enviar"){

    echo "O formulário foi enviado";

    $nome= $_POST['nome'];
    $data_nasc= $_POST['data_nasc'];
    $data_c= $_POST['data_c'];
    $num_c= $_POST['num_c'];
    $valor= $_POST['valor'];


    $sql="INSERT INTO cliente (nome, data_nasc, data_c, num_c, valor) VALUES (?,?,?,?,?)";
    $stmt=conexao()->prepare($sql);
    $stmt->bindParam(1,$nome);
    $stmt->bindParam(2,$data_nasc);
    $stmt->bindParam(3,$data_c;
    $stmt->bindParam(4,$num_c);
    $stmt->bindParam(5,$valor);
    $stmt->execute();

    echo"Salvo com sucesso";
}
?>

<form method="POST" action="">
    Nome <input type="text"class="form-control" name="nome"/> <br/>
    Data de Nascimento <input type="text" class="form-control" name="data_nasc"/> <br/>
    Data de Compra <input type="text"class="form-control"  name="data_c"/> <br/>
    Número da Compra <input type="text" class="form-control"  name="num_c"/> <br/>
    Valor <input type="text" class="form-control" name="valor"/> <br/>


    <input type="submit" name="button" value="Enviar"/>
</form>

