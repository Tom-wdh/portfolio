<?php
require './views/layout/head.php';
?>

<nav>
    <form method="post" onsubmit="checkCheckboxes(event)">
        <input type="checkbox" id="games" name="games" value="1" checked>
        <label for="games">Games</label><br>
        <input type="checkbox" id="programs" name="programs" value="2" checked>
        <label for="programs">Programs</label><br>
        <button type="submit">Submit</button>
    </form>

</nav>
<main>

    <?php
    require './views/layout/anim1.php';
    ?>

   <ul class="port">
       <li id="project_1" class="game">Casual Clickers</li>
       <li id="project_2" class="program">C# Chatbot</li>
       <li id="project_3" class="game">Project of Jump</li>
       <li id="project_4" class="program">A program that can crash your pc</li>
       <li id="project_5" class="game">Ping</li>
       <li id="project_6" class="game">Pesten Online (unreleased)</li>
       <li id="project_7" class="game">The Button Game (unreleased)</li>
   </ul>



    <!-- Modal structure -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <img src="./views/img/click.png">
            <h1>Casual Clickers</h1>
            <h2>Dit is de eerste game die ik met mijn vrienden heb gemaakt. Het is een clicker game.</h2>
            <h3>Ik heb hiervoor gebruik gemaakt van Unity samen met de progammeertaal C#.</h3>
        </div>
    </div>

    <div id="myModal2" class="modal">
        <div class="modal-content">
            <span class="close2">&times;</span>
            <img src="img" alt="Image not found">
            <h1>C# Chatbot</h1>
            <h2>Een programma waar je mee kunt "praten" wat ik gebruikte om nieuwe soort code in uit te testen.</h2>
            <h3>Ik heb hiervoor Visual Studio Code met de progammeertaal C# en de .NET framework gebruikt.</h3>
        </div>
    </div>

    <div id="myModal3" class="modal">
        <div class="modal-content">
            <span class="close3">&times;</span>
            <img src="./views/img/poj.png">
            <h1>Project of Jump</h1>
            <h2>Dit is een platformer game die ik heb gemaakt samen met een vriend en de bedoeling was om het zo lastig mogelijk te maken.</h2>
            <h3>Ik heb hiervoor gebruik gemaakt van de klokhuis gamestudio. </h3>
        </div>
    </div>


    <div id="myModal4" class="modal">
        <div class="modal-content">
            <span class="close4">&times;</span>
            <img src="./views/img/???.png" alt="Image not found">
            <h1>A program that can crash your pc</h1>
            <h2>Dit is een batch file die constant command prompt windows opent tot en met je device crashed.</h2>
            <h3>Ik heb hiervoor gebruik gemaakt van kladblok en het opgeslagen als een batch bestand.</h3>
        </div>
    </div>

    <div id="myModal5" class="modal">
        <div class="modal-content">
            <span class="close5">&times;</span>
            <img src="./views/img/ping.png">
            <h1>Ping</h1>
            <h2>Dit is een versie van pong die ik zelf heb gemaakt.</h2>
            <h3>Ik heb hiervoor gebruik gemaakt van Unity samen met de progammeertaal C#.</h3>
        </div>
    </div>

    <div id="myModal6" class="modal">
        <div class="modal-content">
            <span class="close6">&times;</span>
            <img src="./views/img/???.png" alt="Image not found">
            <h1>Pesten Online (unreleased)</h1>
            <h2>Dit is de kaartspel Pesten, maar online.</h2>
            <h3>Ik heb hiervoor gebruik gemaakt van Unity samen met de progammeertaal C#.</h3>
        </div>
    </div>

    <div id="myModal7" class="modal">
        <div class="modal-content">
            <span class="close7">&times;</span>
            <img src="./views/img/???.png" alt="Image not found">
            <h1>The Button Game</h1>
            <h2>Dit is een game waarbij je een grote rode knop voor je hebt. Klik je het of niet?</h2>
            <h3>Ik heb hiervoor gebruik gemaakt van Unity samen met de progammeertaal C#.</h3>
        </div>
    </div>
<br>

</main>
<?php
require './views/layout/anim2.php';
?>
</body>

<script src="./views/js/myScript.js"></script>
<?php

require './views/layout/footer.php';

?>
</html>
