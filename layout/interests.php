<?php
// Include the interests data
include('./data/interests.php');
?>

<!-- ======= Interests ======= -->
<div class="interests container">
    <div class="section-title">
        <h2>Interests</h2>
    </div>

    <div class="row">
        <?php foreach ($interestsData as $interest): ?>
        <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
                <i class="<?php echo $interest['icon']; ?>" style="color: <?php echo $interest['color']; ?>;"></i>
                <h3><?php echo $interest['title']; ?></h3>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div><!-- End Interests -->
