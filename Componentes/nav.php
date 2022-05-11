<?php

require 'Variables/VariablesGlobal.php';

?>

<header>
    <nav class="container">
        <img src="https://react-rick-morty-api.netlify.app/static/media/icon.433dc13f.svg"
            alt="">
        <div>
            <?php
            foreach($nav as $valores) :
            ?>

                <a href=""><?= $valores?></a>


            <?php 
            endforeach;
            ?>
        </div>

    </nav>

</header>