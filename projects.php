<?php

$buttonPress = isset($_POST['buttonPress']) ? (int)$_POST['buttonPress'] : 0;
// Check if the form is submitted and process the checkboxes
$gameChecked = isset($_POST['game']) ? 1 : 0;    // 1 if checked, 0 if not
$programChecked = isset($_POST['program']) ? 1 : 0; // 1 if checked, 0 if not

class ItemDivs extends RecursiveIteratorIterator
{
    private $count = 0; // Initialize counter for projects

    public function current(): mixed
    {
        // Wrap each field value in a styled div
        return "<div style='padding: 5px; border: 1px solid white; color: white; width: 250px; margin: 5px;'>" . parent::current() . "</div>";
    }

    public function beginChildren(): void
    {
        // Start a new row container if this is the beginning of a new row
        if ($this->count % 2 == 0) {
            echo "<div style='display: flex; flex-wrap: wrap; justify-content: center; align-items: flex-start;'>";
        }

        // Generate a unique ID for each project div using $this->count
        $projectId = "project_" . $this->count;

        // Start of a new record container div with a unique id
        echo "<div id='{$projectId}' style='margin-bottom: 10px; padding: 10px; border: 2px solid white; display: inline-block;'>";
    }

    public function endChildren(): void
    {
        // Close record container div
        echo "</div>";
        $this->count++;

        // Close the row container div after every 3 projects
        if ($this->count % 3 == 0) {
            echo "</div>"; // End row container
        }
    }

    public function __destruct()
    {
        // Close any unclosed row container at the end
        if ($this->count % 2 != 0) {
            echo "</div>";
        }
    }
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "profile";

$sql = "";
try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// Set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Query to fetch data
    if ($programChecked == 1 && $gameChecked == 1) {
        $sql = "SELECT * FROM projects";
    }

    else if ($programChecked == 0 && $gameChecked == 1) {
            $sql = "SELECT * FROM projects WHERE type = 'game'";
    }

    else if ($programChecked == 1 && $gameChecked == 0) {
            $sql = "SELECT * FROM projects WHERE type = 'program'";
    }
$stmt = $conn->prepare($sql);
$stmt->execute();

// Set the result to associative array and fetch
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
foreach (new ItemDivs(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) {
echo $v;
}
} catch (PDOException $e) {
echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
