<?php
// Include the contact data
include('./data/contact-data.php');
?>

<section id="contact" class="contact">
    <div class="container">
        <div class="section-title">
            <h2>Contact</h2>
            <p>Contact Me</p>
        </div>

        <div class="row mt-2">
            <?php foreach ($contactData as $item): ?>
                <div class="col-md-6 mt-4 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="<?php echo $item['icon']; ?>"></i>
                        <h3><?php echo $item['title']; ?></h3>
                        <?php if (is_array($item['info'])): ?>
                            <div class="social-links">
                                <?php foreach ($item['info'] as $social): ?>
                                    <a href="<?php echo $social['link']; ?>" class="<?php echo $social['class']; ?>"><i class="<?php echo $social['icon']; ?>"></i></a>
                                <?php endforeach; ?>
                            </div>
                        <?php else: ?>
                            <p><?php echo $item['info']; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?php /*
        <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
          </div>
        </div>
        <div class="form-group mt-3">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
        </div>
        <div class="my-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Send Message</button></div>
      </form>
      */ 
      ?>
    </div>
</section>
