<?php

$servername = "localhost";
$username = "root";
$password = "Zuiijsvhatte33!";
$dbname = "profile";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT username, password FROM admin WHERE adminID = 1");
    $stmt->execute();

    // Fetch the results
    $admin = $stmt->fetch(PDO::FETCH_ASSOC);

    // Extract username and password from the fetched result
    $adminUsername = $admin['username'];
    $adminPassword = $admin['password'];

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit;
}

// Close the connection
$conn = null;



if (isset($_POST['submitted'])) {
    $user = $_POST['user'];     // Pak de form gegevens
    $pw = $_POST['pw'];

        if ($user == $adminUsername && $pw == $adminPassword) { // check of form gegevens gelijk zijn aan admin gegevens
            echo "Yippie";
            header('Location: http://localhost:8888/database.php'); //redirect naar de database pagina
        }

        else {
            echo "Wrong username or password";
        }

    }

?>
