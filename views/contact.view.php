<?php

require './views/layout/head.php';
?>

<main>
    <?php
    require './views/layout/anim1.php';
    ?>
    <div class="sidebar-l">
        <h1>Mijn Sociale Media</h1>
        <a href="https://github.com/Tom-wdh"><img src="./views/img/github-mark-white.png" class="icons"></a>
        <a href="https://decayingdevs.itch.io"><img src="./views/img/itch.png" class="icons"></a>
        <a href="https://www.youtube.com/@BeamerDev"><img src="./views/img/youtube.png" class="icons"></a>
    </div>
    <div class="form">
    <form action="test.php" method="post">
        <label for="FN">Voornaam:*</label><br>
        <input type="text" id="FN" name="FN" required><br>
        <label for="LN">Achternaam:*</label><br>
        <input type="text" id="LN" name="LN" required><br>
        <label for="Email">Email:*</label><br>
        <input type="email" id="Email" name="Email" required><br><br>
        <input type="submit" value="Submit" name="submit">
    </form>
    </div>
</main>




<?php
require './views/layout/anim2.php';
?>
</body>
<script src="js/myScript.js"></script>
<?php

require './views/layout/footer.php';

?>
</html>
