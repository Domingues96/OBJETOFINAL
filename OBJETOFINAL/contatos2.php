<?php

require_once ('classes/contatos.class.php');

$form = new contactForm($_SERVER['PHP_SELF']);

        //setters
        $form->setFormError('Tá errado');
        $form->setFormName('Bessinha');
        $form->setFormEmail('bessinha@bessa.com');
        $form->setFormsubject('Bessa');
        $form->setFormmessage('Vamo falar do bessa');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça Contato - Campos preenchidos</title>
</head>
<body>

<h2>Faça Contato</h2>

<?php echo $form->get(); ?>
</body>
</html>