<?php
require './views/layout/head.php';
?>
<main>
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
<!-- End main -->

<!-- Start Footer -->
<footer>
    <!-- &copy; -->
    <div>© 2024 My Website</div>
    <div class="breadcrumbs"><a href="index.view.php">Home</a> &gt; About</div>
    <div>Email: info@example.com</div>
</footer>
<!-- END Footer -->

</body>
<script src="js/myScript.js"></script>
</html>
