<?php

$servername = "localhost";
$username = "root";
$password = "Zuiijsvhatte33!";
$dbname = "profile";

if (isset($_POST['submit'])) {
    $title = $_POST['title'];     // Getting the form data
    $content = $_POST['content'];
    $author = $_POST['author'];

$sql = "";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO posts (title, content, author) VALUES ('$title', '$content', '$author')";

        // use exec() because no results are returned
        $conn->exec($sql);
        echo "New record created successfully";

    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
}

?>