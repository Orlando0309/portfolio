<?php
// Include the skills data
include('./data/skills.php');
?>

<!-- ======= Skills ======= -->
<div class="skills container">
    <div class="section-title">
        <h2>Skills</h2>
    </div>

    <div class="row skills-content">
        <?php foreach ($skillsData as $skill): ?>
        <div class="col-lg-6">
            <div class="progress">
                <span class="skill"><?php echo $skill['skill']; ?> <i class="val"><?php echo $skill['percentage']; ?>%</i></span>
                <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $skill['percentage']; ?>"
                        aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $skill['percentage']; ?>%;">
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div><!-- End Skills -->
