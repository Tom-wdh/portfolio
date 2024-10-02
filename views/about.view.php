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
    <section id="myContent" class="content">
        <h1>About Content</h1>
        <p>This is where the about content goes.</p>
    </section>
    <aside class="sidebar-r">
        <h2>Events List</h2>
        <ul>
            <li>Event 1</li>
            <li>Event 2</li>
            <li>Event 3</li>
        </ul>
    </aside>
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
