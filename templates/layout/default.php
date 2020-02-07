<?php

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css">

    <?= $this->Html->css('milligram.min.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>  
    <nav class="top-nav">
    <div></div>            
    <div>   
    <?= $this->Html->link(__('Profesores'), ['controller' => 'profesors', 'action' => 'index'], ['class' => 'button float-right', 'style'=>'background:darkred']) ?>   
    </div>
    
    <div>
    <?= $this->Html->link(__('Materias'), ['controller' => 'materias', 'action' => 'index'], ['class' => 'button float-right', 'style'=>'background:darkred']) ?> 
    </div>
    <div></div> 
    </nav>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
