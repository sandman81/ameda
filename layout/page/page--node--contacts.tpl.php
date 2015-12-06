<?php include ($directory."/layout/inc/medium-menu.php"); ?>
<div id="wrapper">
    <?php include ($directory."/layout/inc/header.php"); ?>
    <section id="content">
        <div class="site-container">
            <div class="content-center">
                <div class="sections-menu page-section">
                    <?php $block = module_invoke('menu', 'block_view', 'menu-sections-menu'); print render($block['content']); ?>
                </div>
                <?php if ($title): ?><h1 class="page-title"><?php print $title; ?></h1><?php endif; ?>
                <?php $block = module_invoke('system', 'block_view', 'main'); print render($block['content']); ?>
            </div>
        </div>
        <div class="bottom-map">
            <div class="bottom-map_full-map">
                 <div class="bottom-map_full-map-content location-all-map active">
                    <?php $block = module_invoke('views', 'block_view', 'map-block'); print render($block['content']); ?>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include ($directory."/layout/inc/footer.php"); ?>