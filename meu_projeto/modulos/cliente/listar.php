<h1 class="under" ALIGN="CENTER">Tabela Cliente</h1>
<?php
    $clientes= array();
    
    $clientes[]=array(
                     'nome'=> "Paula Raielle",
                     'data_nasc'=>"30/12/2001",
                     'data_c'=>"05/10/2022",
                     'num_c'=> 01,
                     'valor'=> "R$402,49");

    $clientes[]=array(
                     'nome'=> "José Júnior",
                     'data_nasc'=>"31/08/1999",
                     'data_c'=>"01/09/2022",
                     'num_c'=> 02,
                     'valor'=> "R$50,00");

   $clientes[]=array(
                     'nome'=> "Benedito Capela",
                     'data_nasc'=>"06/07/1988",
                     'data_c'=>"13/05/2022",
                     'num_c'=> 03,
                     'valor'=> "R$1000,00"); 

    $clientes[]=array(
                     'nome'=> "Anderson Patrick",
                     'data_nasc'=>"22/08/1988",
                     'data_c'=>"25/02/2022",
                     'num_c'=> 04,
                     'valor'=> "R$100,00");

    $clientes[]=array(
                     'nome'=> "Jennifer Daniele",
                     'data_nasc'=>"30/12/2001",
                     'data_c'=>"19/04/2022",
                     'num_c'=> 05,
                     'valor'=> "R$250,00"); 


   /* foreach($clientes as $cli){
        echo $cli."<br/>";
        
    }*/
    ?>

    <table class="tabela" border="1" ALIGN="CENTER">
        <tr ALIGN="CENTER">
            <th>Nome</th>
            <th>Data de Nascimento</th>
            <th>Data da Compra</th>
            <th>Número da compra</th>
            <th>Valor da Compra</th>
        </tr>

        <?php
        foreach($clientes as $cli){
        ?>
        <tr>
            <td ALIGN="CENTER"><?php echo $cli['nome']; ?> </td>
            <td ALIGN="CENTER"><?php echo $cli['data_nasc']; ?></td>
            <td ALIGN="CENTER"><?php echo $cli['data_c']; ?></td>
            <td ALIGN="CENTER"><?php echo $cli['num_c']; ?></td>
            <td ALIGN="CENTER"><?php echo $cli['valor']; ?></td>
        </tr>
        <?php } ?>

    </table>
