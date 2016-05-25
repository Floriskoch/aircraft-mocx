<section id="about">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4 text-center">
                <h2><?php echo $data->tagline()->html() ?></h2>
                <?php echo $data->text()->kirbytext() ?>
            </div>
        </div>
    </div>
</section>