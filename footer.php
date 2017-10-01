    <? $titan = TitanFramework::getInstance('wordpressBase'); ?>

    <footer id="footer">
        <?= $titan->getOption('footer') ?>
    </footer>

    <? wp_footer(); ?>

</body>
</html>
