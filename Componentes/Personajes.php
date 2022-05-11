<?php
require 'Variables/VariablesGlobal.php';

?>

<section class="color">
    <article class="container personajes">
        <?php
        foreach($datos as $fila) :
        ?>
        <div class="cartas">
            <img src="<?=$fila->image?>" alt="">
            <div class="contenido-cartas">
                <h1><?= $fila->name?></h1>
                <?php 
                if($fila->status == "Alive"){
                    echo '<div class="status"><div class="bold-status"></div><h2>'.$fila->status.'</h2></div>';
                }else if($fila->status == "Dead"){
                    echo '<div class="status"><div class="bold-status2"></div><h2>'.$fila->status.'</h2></div>';
                }else{
                    echo '<div class="status"><div class="bold-status3"></div><h2>'.$fila->status.'</h2></div>';
                }
                ?>
                <p>Last known location:</p>
                <p><?= $fila->location->name?></p>
                <p>Gender:</p>
                <p><?= $fila->gender?></p>
            </div>
        </div>
        <?php
        endforeach
        ?>
    </article>
</section>