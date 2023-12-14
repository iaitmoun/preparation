<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_COOKIE['exit_Cookie'])) {
        echo 'Vous avez déjà voté! ';}

    else{
        $vote= $_POST['vote'];
        setcookie('voteCookie', $vote, time() + 86400);
        setcookie('exit_Cookie', 'Vrai' , time() + 86400);
        echo "Merci d'avoir voter";
        }
}
?>