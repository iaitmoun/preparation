<?php
    session_start();
    if ( !isset( $_SESSION['Enregistrement'])){
        $_SESSION['Enregistrement']=array();
    }
    
    $_SESSION['Enregistrement'][]=date('Y-m-d H:i-s');
    foreach ($_SESSION['Enregistrement'] as $key ) {
        echo "<p>$key</p>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Enregistrement des visites </h1>

    
</body>
</html>
