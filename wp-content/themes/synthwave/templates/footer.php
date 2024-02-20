<?php
/*
Template Name: footer
*/
?>

<footer>
    <div class="container">
        <p>&copy; <?php echo date('Y'); ?> - <?php bloginfo('name'); ?>. All Rights Reserved.</p>
        <p><?php bloginfo('description'); ?></p>
        <!-- add here elements -->
        <h2>About</h2>
    </div>

    <?php wp_footer(); ?>
</footer>

</body>
</html>
