<?php
 include './data/aboutme.php';
?> 
<!-- ======= About Me ======= -->
<div class="about-me container">
    <div class="section-title">
        <h2>About</h2>
        <p>Learn more about me</p>
    </div>

    <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/me.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3><?php echo $aboutMeData['occupation']; ?></h3>
            <p class="fst-italic">
                <?php echo $aboutMeData['description']; ?>
            </p>
            <div class="row">
                <div class="col-lg-6">
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span><?php echo $aboutMeData['birthday']; ?></span></li>
                        <li><i class="bi bi-chevron-right"></i> <strong>College:</strong> <span><?php echo $aboutMeData['college']; ?></span></li>
                        <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><?php echo $aboutMeData['phone']; ?></span></li>
                        <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span><?php echo $aboutMeData['city']; ?></span></li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?php echo $aboutMeData['age']; ?></span></li>
                        <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span><?php echo $aboutMeData['degree']; ?></span></li>
                        <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><?php echo $aboutMeData['email']; ?></span></li>
                        <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span><?php echo $aboutMeData['freelance']; ?></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><!-- End About Me -->

