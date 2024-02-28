<!-- Container composant -->
<div class="card-container">

    <!-- Composant -->
    <? foreach elements as element : ?>
    <div class="card">
        <img class="card-image" src="<?= $image ?>" alt="Js">
        <div class="card-wrapper">
            <p class="card-title">
                <?= $titre ?>
            </p>
            <p class="card-description">
                <?= $desc ?>
            </p>
        </div>
        <a class="card-link" href="#">
            <img class="card-link-image" src="<?= $link ?>" alt="link website">
        </a>
    </div>
    <? endforeach ?>
    <!-- End composant -->
</div>
<!-- End container -->