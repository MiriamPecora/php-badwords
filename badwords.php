<?php 

    $to_be_censured = $_GET['toBeCensured'];

    $badword = $_GET['badword'];

    $to_be_censured_length = strlen($to_be_censured);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pagina con testo censurato</title>
    </head>
    <body>
        <h3>Testo inserito</h3>
        <p>"<?php echo $to_be_censured;?>"</p>
        <p>Numero di caratteri all'interno del paragrafo: <span style='color: blue;'><?php echo $to_be_censured_length; ?></span></p>
    </body>
</html>