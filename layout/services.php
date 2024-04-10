<?php
// Include the services data
include('./data/services.php');
?>

<!-- ======= Services ======= -->
<section id="services" class="services">
    <div class="container">
        <div class="section-title">
            <h2>Services</h2>
            <p>My Services</p>
        </div>

        <div class="row">
            <?php foreach ($servicesData as $service): ?>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="icon-box">
                    <div class="icon"><i class="<?php echo $service['icon']; ?>"></i></div>
                    <h4><a href=""><?php echo $service['title']; ?></a></h4>
                    <p><?php echo $service['description']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section><!-- End Services -->
