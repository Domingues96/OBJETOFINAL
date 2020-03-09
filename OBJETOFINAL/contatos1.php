<?php

require_once ('classes/contatos.class.php');

$form = new contactForm($_SERVER['PHP_SELF']);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça Contato - Campos em branco</title>
</head>
<body>

<h2>Faça Contato</h2>

<?php echo $form->get();?>
</body>
</html>