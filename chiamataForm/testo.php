<?php
# var_dump($_GET);

if (isset($_GET['testo']) && $_GET['testo'] != '') {
    $testo = $_GET['testo'];
    echo strlen($testo);
}else{
    $testo = 'Devi inserire del testo';
}

if (isset($_GET['censored']) && $_GET['censored'] != '') {
    $censored = $_GET['censored'];
    echo str_replace($censored,"***", $testo);
}else{
    $censored = 'Devi inserire la parola da censurare';
};


// str_replace(porzioneDaModificare, conCosa, stringa)


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>PHP Bad Words</title>
</head>
<body>
    <h1>Il tuo testo</h1>
    <h2><?php echo str_replace($censored,"***", $testo); ?></h2>
    <h3> Il tuo testo è lungo:</h3>
    <h3><?php echo strlen($testo) . ' ' . 'caratteri' ?></h3>
</body>
</html>

