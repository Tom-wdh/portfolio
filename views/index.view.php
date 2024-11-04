<?php

require './views/layout/head.php'

?>

<main>
    <?php
    require './views/layout/anim1.php';
    ?>

    <aside class="sidebar-l">
        <h1 id="welcome">Welkom bij mijn portfolio</h1>
        <p>Ik ben een student van Windesheim Almere en doe de studie AD Software Development</p>
    </aside>
    <aside class="projects">
        <br>
        <h1 id="skills">Vaardigheden</h1>
        <ul class="skill">
            <li>Web Development</li>
            <li>Software Development</li>
            <li>Game Development</li>
        </ul>
    </aside>

</main>
<br><br><br>
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
