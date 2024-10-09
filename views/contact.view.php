<?php

require './views/layout/head.php';

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
<form action="test.php" method="post">
    <label for="title">Title:</label><br>
    <input type="text" id="title" name="title"><br>
    <label for="content">Content:</label><br>
    <input type="text" id="content" name="content"><br>
    <label for="author">Author:</label><br>
    <input type="text" id="author" name="author"><br><br>
    <input type="submit" value="Submit" name="submit">
</form>
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
