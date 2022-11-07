<h1 ALIGN="CENTER" class="under">Tabela Vendas</h1>
<?php
    $vendas= array();

    $vendas[]=array(
        'cliente'=>"Paula Raielle",
        'produto'=> "3 vestidos, 1 Batom",
        'vendedor'=> "João Paulo",
        'valor'=>"R$180,00",
        'forma_pg'=> "Débito");

    $vendas[]=array(
        'cliente'=>"José Junior",
        'produto'=> "Brinco",
        'vendedor'=> "Allan Patrick",
        'valor'=>"R$50,00",
        'forma_pg'=> "Crédito");    

    $vendas[]=array(
        'cliente'=>"Benedito Capela",
        'produto'=> "1 celular",
        'vendedor'=> "Claudia Sá",
        'valor'=>"R$1000,00",
        'forma_pg'=> "Crédito 5x R$200,00");

    $vendas[]=array(
        'cliente'=>"Anderson Patrick",
        'produto'=> "Tenis",
        'vendedor'=> "Renata Priscila",
        'valor'=>"R$100,00",
        'forma_pg'=> "Dinheiro");

    $vendas[]=array(
        'cliente'=>"Jennifer Daniele",
        'produto'=> "2 brincos, 4 batons",
        'vendedor'=> "Patricia Melo",
        'valor'=>"R$180,00",
        'forma_pg'=> "Pix");

    
                   
   
         /* foreach($vendas as $ven){
        echo $pro."<br/>";
        
    }*/
    ?>

    <table class="tabela" border="1" ALIGN="CENTER">
        <tr ALIGN="CENTER">
            <th>Cliente</th>
            <th>Produto(s)</th>
            <th>Vendedor</th>
            <th>Valor a pagar</th>
            <th>Forma de pagamento</th>
        </tr>

        <?php
        foreach($vendas as $ven){
        ?>
        <tr>
            <td ALIGN="CENTER"><?php echo $ven['cliente']; ?> </td>
            <td ALIGN="CENTER"><?php echo $ven['produto']; ?></td>
            <td ALIGN="CENTER"><?php echo $ven['vendedor']; ?></td>
            <td ALIGN="CENTER"><?php echo $ven['valor']; ?></td>
            <td ALIGN="CENTER"><?php echo $ven['forma_pg']; ?></td>
        </tr>
        <?php } ?>
    </table>