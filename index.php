<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP - Badwords</title>
    </head>
    <body>
        <form action="badwords.php" method="GET">
            <hr>
            <label for="textInput">Testo</label>
            <textarea name="testoDaCensurare" id="textInput" placeholder="Scrivi qui!"></textarea>
            <br>
            <label for="badword">Parola da censurare</label>
            <input type="text" name="badword" id="badword" placeholder="Parola da censurare...">
            <hr>
            <button type="submit">Censura Testo</button>
        </form>
    </body>
</html>