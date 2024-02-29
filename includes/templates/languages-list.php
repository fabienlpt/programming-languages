<?php 

$elements = new WP_Query([
    'post_type' => 'languages',
    'post_status' => 'publish',
    'posts_per_page' => -1
]);

if(!$elements->have_posts()) {
    return;
}
    
?>
<!-- Container composant -->
<div class="programming_language-container">

    <!-- Composant -->
    <?php foreach ($elements->posts as $element){ ?>
    <div class="programming_language">
        <a href="<?= get_the_permalink($element->ID) ?>">
            <img class="programming_language-image" src="<?= get_the_post_thumbnail_url($element->ID) ?>" alt="Image <?= $element->post_title ?>" />
        </a>
        <div class="programming_language-wrapper">
            <p class="programming_language-title">
                <?= $element->post_title ?>
            </p>
            <p class="programming_language-description">
                <?= $element->post_excerpt ?>
            </p>
        </div>
        <a class="programming_language-link" href="<?= get_field('link', $element->ID) ?>">
        <svg aria-hidden='true'  class="programming_language-link-image" version="1.0" xmlns="http://www.w3.org/2000/svg"
            width="30" height="30" viewBox="0 0 512.000000 512.000000"
            preserveAspectRatio="xMidYMid meet">

            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
            fill="#000000" stroke="none">
            <path d="M3117 4465 c-82 -28 -126 -100 -127 -201 0 -82 30 -139 95 -179 l48
            -30 310 -3 310 -3 -585 -587 c-472 -473 -588 -595 -598 -626 -38 -119 52 -258
            177 -273 101 -11 78 -31 715 605 l587 585 3 -310 3 -310 30 -48 c40 -65 97
            -95 179 -95 104 1 182 53 206 138 15 56 14 1163 -2 1216 -16 52 -72 108 -124
            124 -63 18 -1174 16 -1227 -3z"/>
            <path d="M1207 4260 c-174 -30 -318 -178 -347 -356 -13 -79 -13 -2609 0 -2688
            30 -183 173 -326 356 -356 79 -13 2609 -13 2688 0 185 30 328 175 357 362 6
            38 9 250 7 519 -3 421 -4 457 -22 489 -26 49 -46 69 -86 90 -123 62 -276 5
            -309 -117 -7 -24 -11 -199 -11 -480 l0 -443 -1280 0 -1280 0 0 1280 0 1280
            443 0 c293 0 455 4 482 11 61 17 120 82 134 148 23 107 -15 197 -104 245 -39
            21 -50 21 -510 23 -259 0 -492 -3 -518 -7z"/>
            </g>
        </svg>
        </a>
    </div>
    <?php } ?>
    <!-- End composant -->
</div>
<!-- End container -->