<?php snippet('header') ?>

  <main class="main" role="main">
    
    <header class="wrap">
      <h2><?= $page->title()->html() ?></h2>
      <div class="intro text">
        <?= $page->intro()->kirbytext() ?>
      </div>
      <hr />
    </header>

    <section class="testimonials-section">

        <div class="wrap wide">
        <h2>Don't just take it from me!</h2>
        <?php snippet('testimonialshowcase') ?>
        </div>
    </section>

    <section class="projects-section">
      
      <div class="wrap wide">
        <h2>Latest Projects</h2>
        <?php snippet('showcase', ['limit' => 3]) ?>
        <p class="projects-section-more"><a href="<?= page('projects')->url() ?>" class="btn">show all projects &hellip;</a></p>
      </div>
      
    </section>

  </main>

<?php snippet('footer') ?>