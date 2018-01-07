<?php snippet('header') ?>

    <main class="main" role="main">

        <div class="wrap">

            <header>
                <h2><?= $page->title()->html() ?></h2>
            </header>

            <div class="text">
                <?= $page->text()->kirbytext() ?>
            </div>

        </div>
    </main>

<?php snippet('footer') ?>