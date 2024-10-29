<?php

require './views/layout/head.php';
require './views/layout/nav.php';
?>

<main>
    <?php
    require './views/layout/anim1.php';
    ?>
    <aside class="sidebar-l">
        <h2>Menu</h2>
        <ul>
            <li>Item 1</li>
            <li>Item 2</li>
            <li>Item 3</li>
        </ul>
    </aside>
    <div class="form">
    <form action="test.php" method="post">
        <label for="FN">First Name:</label><br>
        <input type="text" id="FN" name="FN"><br>
        <label for="LN">Last Name:</label><br>
        <input type="text" id="LN" name="LN"><br>
        <label for="Email">Email:</label><br>
        <input type="text" id="Email" name="Email"><br><br>
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
