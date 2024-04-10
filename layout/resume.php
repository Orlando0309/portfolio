<?php
// Include the resume data
include('./data/resume.php');
?>

<!-- ======= Resume ======= -->
<section id="resume" class="resume">
    <div class="container">
        <div class="section-title">
            <h2>Resume</h2>
            <p>Check My Resume</p>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <h3 class="resume-title">Summary</h3>
                <div class="resume-item pb-0">
                    <h4><?php echo $resumeData['summary']['name']; ?></h4>
                    <p><em><?php echo $resumeData['summary']['description']; ?></em></p>
                    <ul>
                        <li><?php echo $resumeData['summary']['address']; ?></li>
                        <li><?php echo $resumeData['summary']['phone']; ?></li>
                        <li><?php echo $resumeData['summary']['email']; ?></li>
                    </ul>
                </div>

                <h3 class="resume-title">Education</h3>
                <?php foreach ($resumeData['education'] as $education): ?>
                <div class="resume-item">
                    <h4><?php echo $education['degree']; ?></h4>
                    <h5><?php echo $education['year']; ?></h5>
                    <p><em><?php echo $education['institution']; ?></em></p>
                    <p><?php echo isset($education['description']) ? $education['description'] : ''; ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="col-lg-6">
                <h3 class="resume-title">Professional Experience</h3>
                <?php foreach ($resumeData['experience'] as $experience): ?>
                <div class="resume-item">
                    <h4><?php echo $experience['position']; ?></h4>
                    <h5><?php echo $experience['duration']; ?></h5>
                    <p><em><?php echo $experience['company']; ?></em></p>
                    <ul>
                        <?php foreach ($experience['responsibilities'] as $responsibility): ?>
                        <li><?php echo $responsibility; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section><!-- End Resume -->
