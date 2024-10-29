<?php
require './views/layout/head.php';
?>

<nav>
    <form method="post">
        <input type="checkbox" id="game" name="game" value="1"  <?php if (isset($_POST['game'])) echo 'checked'?>>
        <label for="game">Games</label><br>
        <input type="checkbox" id="program" name="program" value="2" <?php if (isset($_POST['game'])) echo 'checked'?>>
        <label for="program">Programs</label><br>
        <button type="submit">Submit</button>
    </form>
</nav>
<main>

    <?php
    require './views/layout/anim1.php';
    ?>

    <?php
    require './projects.php';
    ?>



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
