<?php
// Include the counts data
include('./data/counts.php');
?>

<!-- ======= Counts ======= -->
<div class="counts container">
    <div class="row">
        <?php foreach ($countsData as $countItem): ?>
        <div class="col-lg-3 col-md-6">
            <div class="count-box">
                <i class="<?php echo $countItem['icon']; ?>"></i>
                <span data-purecounter-start="0" data-purecounter-end="<?php echo $countItem['count']; ?>"
                    data-purecounter-duration="1" class="purecounter"></span>
                <p><?php echo $countItem['label']; ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div><!-- End Counts -->
