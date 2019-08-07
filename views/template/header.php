<div class="row">
    <div class="col-lg">
        <?php if ($view === 'home' || $view === 'error') { ?>
            <h1 class="display-3 mt-3">
                <a href="<?php echo url('home') ?>" class="text-decoration-none text-light">home</a>
            </h1>
        <?php } else { ?>
            <h1 class="display-4 mt-3">
                <a href="<?php echo url('home') ?>" class="text-decoration-none text-light">home</a>
                -
                <span class="display-3 mt-3">
                    <a href="<?php echo url($view) ?>" class="text-decoration-none text-light"><?php echo $view ?></a>
            </h1>
        <?php } ?>
    </div>
</div>