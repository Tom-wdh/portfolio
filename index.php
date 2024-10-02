<?php

//var_dump($_SERVER['DOCUMENT_ROOT']);

// Commentaar wat ga ik hier doen?

/*
 * String
 * Float
 * Integer -Big int
 * Boolean
 * _____________________
 * Array
 * Object
 */

/* echo "<html><head>
<link rel='stylesheet' href='/views/css/myStyle.css'>
</head>
<body>
<header><div class='icon'>🌐</div>
    <div class='menu'>
        <a href='index.view.php'>Home</a>
        <a href='about.view.php'>About</a>
        <a href='contact.view.php'>Contact</a>
    </div></header>
<main>";


echo"<aside class='sidebar-l'>";
echo "<strong>Different types of variables</strong><br>";
$string = 'Hello';
echo $string . " (" . gettype($string) . ")<br>";

$int = 5;
echo $int . " (" . gettype($int) . ")<br>";

$float = 6.9;
echo $float . " (" . gettype($float) . ")<br>";

$grootgetal = PHP_INT_MAX;
echo number_format($grootgetal) . " (" . gettype($grootgetal) . ")<br>";

$bool = false;
$age = 18;

if ($age >= 18) {
    $bool = true;
    if ($bool === true) {
        echo 'you are an adult' . " (" . gettype($bool) . ") <br>";
    }
} else {
    echo 'you are not an adult';
}
echo "</aside>";
echo "<br>";
echo "<strong>Arrays and loops</strong>";
echo "<br>";
$fruits = ['apple', 'banana', 'pineapple', 'pear'];
// print_r($fruit[1]);
// var_dump($fruit);
echo "<br>";
// for, foreach, (do) while
echo "<strong>foreach loop:</strong>" . " ". "<br>";
foreach ($fruits as $fruit) {
    echo $fruit  . " " . "<br>";
}
echo "<br>";
echo "<strong>for loop:</strong>" . " ". "<br>";
for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i] . " " . "<br>";
}

echo "<br>";
echo "<strong>while loop:</strong>" . " ". "<br>";

$egg = 0;

while ($egg < count($fruits)) {
    echo $fruits[$egg] . " " . "<br>";
    $egg++;
}

echo "<br><br>";
echo "<strong>Try yourself excercises</strong>";
echo "<br>";



for ($e = 0; $e < 6; $e++) {
    for ($f = 0; $f <= $e; $f++) {
        echo "*";
    }
    echo "<br>";
}

echo "<br>";

$hobbies = ['gaming', 'coding', 'drawing', 'writing'];

foreach ($hobbies as $hobby) {
    echo $hobby . " " . "<br>";
}
echo "<br>";

for($num = 1; $num <= 10; $num++) {
    $num2 = $num * 5;
    echo "5 x " . $num . "=" . $num2 . " " . "<br>";
}
echo "<br>";
echo "<strong>Associative Array</strong><br>";

$fruits = [
    'apple' => 0.56,
    'pineapple' => 1.29,
    'strawberry' => 0.20
];

$fruits["mango"] = 2.11;
$fruits += ["kiwi" => 1.21];

foreach ($fruits as $fruit => $value) {
    echo $fruit . " = " . $value . "<br>";
}

echo "</main>
<footer>
    <!-- &copy; -->
    <div>© 2024 My Website</div>
    <div class='breadcrumbs'>Home</div>
    <div>Email: info@example.com</div>
</footer>
</body>
</html>";

*/

// require 'views/index.view.php';

//die(var_dump($_SERVER));

//die(var_dump($_SERVER['REQUEST_URI']));

require'./controllers/indexController.php';
require'./controllers/contactController.php';
require'./controllers/aboutController.php';

$index =new IndexController;
$contact =new ContactController;
$about =new AboutController;
$path = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : "/";


switch ($path) {
    case '':
    case '/':
    case '/index':
        $index -> page();
        break;
    case '/about':
        $about -> page();
        break;
    case '/contact':
        $contact -> page();
        break;
   default:
       echo "Trying to find secret pages? Sorry they don't exist.";
}