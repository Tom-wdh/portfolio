<?php

require './views/layout/head.php';
require './views/layout/nav.php';

?>

<main>
    <?php
    require './views/layout/anim1.php';
    ?>

    <aside class="sidebar-l">
        <br>
        <h1 id="welcome">Welkom bij mijn portfolio</h1>

    </aside>
    <aside class="projects">
        <br>
        <br>
        <br>
        <br>
        <h2 id="skills">Vaardigheden</h2>
        <ul>
            <li>Item 1</li>
            <li>Item 2</li>
            <li>Item 3</li>
        </ul>
    </aside>

</main>
<a href="/portfolio" class="cta" id="cta">Bekijk projecten hier</a>
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
