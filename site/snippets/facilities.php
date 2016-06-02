<section id="facilities" class="inverted">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 facilities-intro">
                <h2><?php echo $data->title()->html() ?></h2>
                <?php echo $data->text()->kirbytext() ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="row">
                    <?php $i=0; foreach($data->children()->visible() as $facility): ?>
                        <div class="col-xs-12 col-sm-6">
                            <div class="facility">
                                <div class="facility__bg" style="background-image: url('<?php echo $facility->facImage()->toFile()->url() ?>')"></div>
                                <div class="facility__icon">
                                    <img src="<?php echo $facility->icon()->toFile()->url() ?>" alt="">
                                </div>
                                <div class="facility__content">
                                    <h3><?php echo $facility->title()->html() ?></h3>
                                    <?php echo $facility->text()->kirbytext() ?>
                                </div>
                            </div>
                        </div>
                    <?php $i++; endforeach ?>
                </div>
            </div>
        </div>
    </div>
</section>