<section id="contact" class="inverted">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 contact-intro">
                <h2><?php echo $data->title()->html() ?></h2>
                <?php echo $data->text()->kirbytext() ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-sm-offset-2">
                <div class="card text-center">
                    <div class="card__title">
                        <h3>Email</h3>
                    </div>
                    <div class="card__content">
                        <p><?php echo $data->email() ?></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card text-center">
                    <div class="card__title">
                        <h3>Telephone</h3>
                    </div>
                    <div class="card__content">
                        <p><?php echo $data->phone() ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="map-container">
            <div class="map-contact">
                <div class="card text-center">
                    <div class="card__title">
                        <h3>Contact details</h3>
                    </div>
                    <div class="card__content">
                        <p><?php echo $data->details()->kirbytext() ?></p>
                    </div>
                </div>
            </div>
            <div id="map"></div>
        </div>


    </div>

</section>