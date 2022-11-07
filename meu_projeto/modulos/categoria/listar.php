<h1 ALIGN="CENTER" class="under">Tabela Categorias</h1>
    <?php
    $categoria= array();

    $categoria[]=array(
        'cosmetico'=> "Batom",
        'roupa'=> "Vestido",
        'sapato'=>"Tênis",
        'joia'=>"Brinco",
        'eletronico'=>"Celular",
    );
    $categoria[]=array(
        'cosmetico'=> "Pó compacto",
        'roupa'=> "Blusa Masculina",
        'sapato'=>"Sandalia Feminina",
        'joia'=>"Cordão Feminino",
        'eletronico'=>"Fone de ouvido",
    );
    $categoria[]=array(
        'cosmetico'=> "Blush",
        'roupa'=> "Blusa feminina",
        'sapato'=>"Sandalia Masculina",
        'joia'=>"Cordão masculino",
        'eletronico'=>"Caixa de Som",
    );
    $categoria[]=array(
        'cosmetico'=> "Base",
        'roupa'=> "Calça Jeans",
        'sapato'=>"Sapatilha",
        'joia'=>"Pulseira",
        'eletronico'=>"Mouse sem fio",
    );

    $categoria[]=array(
        'cosmetico'=> "Perfume",
        'roupa'=> "Blazer",
        'sapato'=>"Salto Alto",
        'joia'=>"Chocker",
        'eletronico'=>"Teclado sem fio",
    );
    


     /*
    foreach($categoria as $cat){
        echo $cat."<br/>";
        
    }*/
    ?>

    <table class="table table-striped">
        <tr  ALIGN="CENTER">
            <th >Cosmético</th>
            <th>Roupa</th>
            <th>Sapato</th>
            <th>Jóia</th>
            <th>Eletrônico</th>
        </tr>

        <?php
        foreach($categoria as $cat){
        ?>
        <tr>
            <td ALIGN="CENTER"><?php echo $cat['cosmetico']; ?> </td>
            <td ALIGN="CENTER"><?php echo $cat['roupa']; ?></td>
            <td ALIGN="CENTER"><?php echo $cat['sapato']; ?></td>
            <td ALIGN="CENTER"><?php echo $cat['joia']; ?></td>
            <td ALIGN="CENTER"><?php echo $cat['eletronico']; ?></td>
        </tr>
        <?php } ?>
    </table>