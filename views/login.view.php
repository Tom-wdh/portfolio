<?php

require './views/layout/head.php';

?>

<main>
    <?php
    require './views/layout/anim1.php';
    ?>
<div class="contact">
    <form method="post" action="login.php">
        <label for="user">Username:</label><br>
        <input type="text" id="user" name="user"><br>
        <label for="pw">Password:</label><br>
        <input type="password" id="pw" name="pw"><br>
        <input type="submit" value="Submit" name="submitted">
    </form>
</div>
</main>

<?php
require './views/layout/anim2.php';
?>
<!-- End main -->

<!-- Start Footer -->

<!-- END Footer -->

</body>
<script src="./views/js/myScript.js"></script>
<?php

require './views/layout/footer.php';

?>
</html>
