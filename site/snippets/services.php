<section id="services" class="inverted">
    <div class="service-intro container-fluid">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4 text-center">
                <h2><?php echo $data->title()->html() ?></h2>
                <?php echo $data->text()->kirbytext() ?>
            </div>
        </div>
    </div>
    <?php
    $i = 1;
    foreach($data->children()->visible() as $project):
    ?>
    <section class="service <?php echo ($i % 2 == 0) ? '' : 'service--right'; ?>" style="background-image: url('<?php echo $project->images()->first()->url(); ?>')">
        <div class="card <?php echo ($project->wide()->bool()) ? 'card--wide' : '' ?>">
            <div class="card__title">
                <h3><?php echo $project->title()->html() ?></h3>
            </div>
            <div class="card__content">
                <?php echo $project->text()->kirbytext() ?>
            </div>
        </div>
    </section>
    <?php
    $i++;
    endforeach
    ?>
</section>