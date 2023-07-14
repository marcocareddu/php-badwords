<?php

// Get from index.html
$secret_word = $_GET[trim("secret-word")];
$paragraph = $_GET[trim("paragraph")];

// Replace secret_word with censored one
$censored_paragraph = str_replace($secret_word, '***', $paragraph);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css" type="text/css">
    <title>Badwords</title>
</head>

<body>

    <div class="container">

        <!-- Uncensored Section -->
        <div class="uncensored">
            <H1>Testo non censurato</H1>
            <p><?= $paragraph ?></p>
        </div>

        <!-- Censored Section -->
        <div class="censored">
            <H1>Testo censurato</H1>
            <p><?= $censored_paragraph ?></p>
        </div>
    </div>

</body>

</html>