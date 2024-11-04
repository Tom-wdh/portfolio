<?php

$servername = "localhost";
$username = "root";
$password = "Zuiijsvhatte33!";
$dbname = "profile";

if (isset($_POST['submit'])) {
    $firstname = $_POST['FN'];     // Getting the form data
    $lastname = $_POST['LN'];
    $email = $_POST['Email'];

$sql = "";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO contact (FirstName, LastName, Email) VALUES ('$firstname', '$lastname', '$email')";

        // use exec() because no results are returned
        $conn->exec($sql);
        require './views/layout/head.php';
        echo "<main>";
        require './views/layout/anim1.php';
        echo "<a href='/contact' class='return' id='return'>Ga terug</a>";
        echo "</main>";
        require './views/layout/anim2.php';
        require './views/layout/footer.php';

    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
}


?>