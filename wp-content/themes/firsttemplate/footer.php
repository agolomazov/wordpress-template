<div class="footer-info-wrapper">
    <div class="footer-info-main">
        <?php if(!dynamic_sidebar('footer')): ?>
            <span>Добавьте сюда свое меню</span>
        <?php endif; ?>
    </div>
</div>
<div class="footer-copy">
    <p class="copy">Copyright © 2010 All Rights Reserved</p>
    <p class="by-st">Designed by <a href="#">GraphicsFuel.com</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Powered by <a href="#">Wordpress</a></p>
</div>
<?php wp_footer(); ?>
<script>
    $(document).ready( function(){
        $('#slideshowHolder').jqFancyTransitions({ navigation: true, width: 594, height: 279 });
    });
</script>
</body>
</html>