<?php

require './views/layout/head.php';

?>
<main>
<?php
require './views/layout/anim1.php';
?>
    <?php
echo "<table style='border: solid 1px white;'>";
echo "<tr><th>First Name</th><th>Last Name</th><th>Email</th></tr>";

class TableRows extends RecursiveIteratorIterator
{
    public function current(): mixed
    {
        return "<td style='width:150px;border:1px solid white;'>" . parent::current() . "</td>";
    }

    public function beginChildren(): void
    {
        echo "<tr>";
    }

    public function endChildren(): void
    {
        echo "</tr>" . "\n" . "</table>";
    }
}


$servername = "localhost";
$username = "root";
$password = "Zuiijsvhatte33!";
$dbname = "profile";


    $sql = "";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // use exec() because no results are returned

        $sql = "SELECT FirstName, LastName ,Email FROM contact";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        // Set the result to associative array and fetch
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach (new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) {
            echo $v;
        }
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;


require './views/layout/anim2.php';


require './views/layout/footer.php';


