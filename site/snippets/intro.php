<section id="intro">
    <img src="assets/build/images/logo.png" alt="logo" class="logo">
    <img src="<?php echo $data->images()->first()->url(); ?>" alt="" class="img-responsive aircraft">
    <div class="row tagline">
        <div class="col-lg-6 col-lg-offset-3 text-center">
            <!--<h1><?php /*echo $data->tagline()->html() */?></h1>-->
        </div>
    </div>

    <?php
    $i = 1;
    foreach($data->children()->visible() as $spot) {
        $style = '';
        $placement = '';
        switch ($i) {
            case 1:
            $style = 'top: 40%; left: 20%;';
            $placement = 'right';
        break;
            case 2:
            $style = 'top: 39%; left: 35%;';
            $placement = 'right';
        break;
            case 3:
            $style = 'top: 52%; left: 44%;';
            $placement = 'right';
        break;
            case 4:
            $style = 'top: 47%; left: 54%;';
            $placement = 'right';
        break;
            case 5:
            $style = 'top: 50%; left: 70%;';
            $placement = 'left';
        break;
            case 6:
            $style = 'top: 61%; left: 89%;';
            $placement = 'left';
        break;
        }
    ?>
    <button type="button" style="<?php echo $style; ?>" class="spot" data-placement="<?php echo $placement; ?>" data-trigger="focus" data-toggle="popover" title="<?php echo $spot->title()->html() ?>" data-content="<?php echo $spot->text()->kirbytext() ?>">
        <div class="spot__outer-circle"></div>
        <div class="spot__inner-circle"></div>
    </button>
    <?php
    $i++;
    }
    ?>

    <a href="#about" class="scroll-down">
        <img src="/assets/images/arrow-down.svg" alt="">
    </a>
</section>