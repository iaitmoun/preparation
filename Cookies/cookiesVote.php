<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if (isset($_COOKIE['exit_Cookie'])) {
        echo "<script> alert( 'Vous avez déjà voté!!! ');</script>";
    }

    else{
        $vote= $_POST['vote'];
        setcookie('voteCookie', $vote, time() + 10);
        setcookie('exit_Cookie', 'Vrai' , time() + 86400);
        echo "<script> alert( ' Merci d avoir voter');</script>";
        }
}
?>