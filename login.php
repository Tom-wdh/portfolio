<?php



if (isset($_POST['submitted'])) {
    $user = $_POST['user'];     // Pak de form gegevens
    $pw = $_POST['pw'];

        if ($user == 'Beamer' && $pw == 'zzzz') { // check of form gegevens gelijk zijn aan admin gegevens
            echo "Yippie";
            header('Location: http://localhost:8888/database.php'); //redirect naar de database pagina
        }

        else {
            echo "Wrong username or password";
        }

    }

?>
