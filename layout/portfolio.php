<?php
// Include the portfolio data
include('./data/portfolio.php');
?>

<!-- ======= Portfolio ======= -->
<div class="row portfolio-container">
    <?php
    $index = 0; // Initialize index counter
    foreach ($portfolioData as $item):
    ?>
    <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo strtolower($item['category']); ?>">
        <div class="portfolio-wrap">
            <img src="<?php echo $item['image']; ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4><?php echo $item['title']; ?></h4>
                <p><?php echo $item['category']; ?></p>
                <div class="portfolio-links">
                    <a href="<?php echo $item['image']; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox"
                        title="<?php echo $item['title']; ?>"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.php?item=<?php echo $index; ?>" data-gallery="portfolioDetailsGallery"
                        data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i
                            class="bx bx-link"></i></a>
                </div>
            </div>
        </div>
    </div>
    <?php
    $index++; // Increment index counter
    endforeach;
    ?>
</div>
<!-- End Portfolio -->
