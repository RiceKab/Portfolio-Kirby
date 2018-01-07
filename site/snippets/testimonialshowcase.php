<?php

$testimonials = page('home')->children()->visible();

if(isset($limit)) $testimonials = $testimonials->limit($limit);

?>

<ul class="team-list grid gutter-1">
    <?php foreach($testimonials as $testimonial): ?>
        <li class="team-item column">

            <figure class="team-portrait">
                <img src="<?= $testimonial->image()->url() ?>" alt="Portrait of <?= $testimonial->title()->html() ?>" />
            </figure>

            <div class="team-info">
                <h3 class="team-name"><?= $testimonial->title()->html() ?></h3>
                <p class="team-position"><?= $testimonial->position()->html() ?></p>
                <div class="team-about text">
                    <?= $testimonial->quote()->kirbytext() ?>
                </div>
            </div>
        </li>
    <?php endforeach ?>
</ul>