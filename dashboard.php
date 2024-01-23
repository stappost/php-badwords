<?php
    $text= $_GET["text"];
    $word= $_GET["word"];
    $new_text= str_replace($word, '***', $text)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Text with badwords</h2>
    <p>
        <?php echo $text ?>
        <div>
            La lunghezza del paragrafo è:
            <?php echo strlen($text) ?>
        </div>
    </p>
    <h2>Text without badwords</h2>
    <p>
        <?php echo $new_text ?>
        <div>
            La lunghezza del nuovo paragrafo è:
            <?php echo strlen($new_text) ?>
        </div>
    </p>
</body>
</html>