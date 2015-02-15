<div class="sidebar-main">

    <div class="sidebar-widget">
        <div class="search-main">
            <form action="" id="search-form" method="get">

                <input class="search-txt" type="text" name="s" placeholder="Поиск по сайту" />
                <input type="image" src="<?php echo bloginfo('template_url') ?>/images/search-btn.jpg" />

            </form>
        </div>
    </div>


    <?php if(!dynamic_sidebar('sidebar')): ?>
        <span>Добавьте сюда свое меню</span>
    <?php endif; ?>
    
    <div class="sidebar-widget">
        <div class="facebook">
            <img src="<?php echo bloginfo('template_url') ?>/images/facebook.jpg" alt="" />
        </div>
    </div>

</div>