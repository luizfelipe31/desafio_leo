<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?= $error->title; ?></title>
    </head>
    <body>
        <header >
            <p class="error">&bull;<?= $error->code; ?>&bull;</p>
            <h1><?= $error->title; ?></h1>
            <p><?= $error->message; ?></p>
            <?php if ($error->link): ?>
                <a class="not_found_btn gradient gradient-green gradient-hover transition radius" 
                   title="<?= $error->linkTitle; ?>" href="<?= $error->link; ?>"><?= $error->linkTitle ?></a>
               <?php endif; ?>
        </header>
    </body>
</html>
