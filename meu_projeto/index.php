<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loja.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <header> Topo do template</header>
        <nav>
            <a href="?modulo=categoria&acao=listar">Categoria</a><br/>
            <a href="?modulo=cliente&acao=listar">Cliente</a><br/>
            <a href="?modulo=produto&acao=listar">Produto</a><br/>
            <a href="?modulo=venda&acao=listar">Venda</a><br/>
            <a href="?modulo=Vendedor&acao=listar">Vendedor</a>
        </nav>
        <div class="container">
        <!-- modulo -->
    <?php
        if(isset($_GET["modulo"])){
            $modulo=$_GET["modulo"];
        }
        else{
            $modulo= false;
        }
        
        //acao
        if(isset($_GET["acao"])){
            $acao= $_GET["acao"];
        }
        else{
            $acao=false; 
        }
       
        $url= "modulos/".$modulo."/".$acao.".php";
        if($modulo && $acao && file_exists($url)){
            include("modulos/".$modulo."/add.php");
            include($url);
        }
        else{
            echo "Página solicitada não existe";
        }
    ?>
    </div>

    <footer>Rodapé do Template</footer>
</body>
</html>