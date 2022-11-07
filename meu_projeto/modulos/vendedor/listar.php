<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/loja.css"/>
    <title>Vendedores</title>
</head>
<body>
<h1 ALIGN="CENTER" class="under">Tabela Vendedores</h1>
<?php
    $vendedores= array();

    $vendedores[]= array(
        
        'nome'=>"João Paulo",
        'idade'=> 22,
        'data_nasc'=>"13/09/2000",
        'data_contr'=> "23/11/2020",
        'sal'=>"R$1200,00");

    $vendedores[]= array(
        
        'nome'=>"Renata Priscila",
        'idade'=> 26,
        'data_nasc'=>"15/06/1994",
        'data_contr'=> "21/02/2020",
        'sal'=>"R$1200,00");

    $vendedores[]= array(
        
        'nome'=>"Claudia Sá",
        'idade'=> 47,
        'data_nasc'=>"28/09/1975",
        'data_contr'=> "15/07/2020",
        'sal'=>"R$1200,00");

    $vendedores[]= array(
        
        'nome'=>"Allan Patrick",
        'idade'=> 32,
        'data_nasc'=>"18/06/1990",
        'data_contr'=> "04/02/2020",
        'sal'=>"R$1200,00"); 

    $vendedores[]= array(
        
    'nome'=>"Patricia Melo",
    'idade'=> 22,
    'data_nasc'=>"30/05/2000",
    'data_contr'=> "05/04/2020",
    'sal'=>"R$1200,00");

     /*  foreach($vendedores as $vddrs){
        echo $vddrs."<br/>";
        
    }*/
?>

    <table class="tabela" border="1" ALIGN="CENTER">
        <tr ALIGN="CENTER">
            <th>Nome</th>
            <th>Idade</th>
            <th>Data de Nascimento</th>
            <th>Data de Contrato</th>
            <th>Salário</th>
        </tr>

        <?php
        foreach($vendedores as $vddrs){
        ?>
        <tr>
            <td ALIGN="CENTER"><?php echo $vddrs['nome']; ?> </td>
            <td ALIGN="CENTER"><?php echo $vddrs['idade']; ?></td>
            <td ALIGN="CENTER"><?php echo $vddrs['data_nasc']; ?></td>
            <td ALIGN="CENTER"><?php echo $vddrs['data_contr']; ?></td>
            <td ALIGN="CENTER"><?php echo $vddrs['sal']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>