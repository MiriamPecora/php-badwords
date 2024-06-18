<?php 
    $to_be_censured = $_GET['toBeCensured'];
    $to_be_censured_length = strlen($to_be_censured);

    $badword = $_GET['badword'];
    
    $censured_text = str_ireplace($badword, '***', $to_be_censured);
    $censured_text_length = strlen($censured_text);
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
        <hr>
        <h3>Qui il testo censurato:</h3>
        <p>"<?php echo $censured_text;?>"</p>
        <p>Numero di caratteri all'interno del paragrafo censurato: <span style='color: blue;'><?php echo $censured_text_length; ?></span></p>
    </body>
</html>