<?php 

/* Hero Block Template */

?>

<section id="hero" style="background-color: #007bff; min-height: 930px; width: 100%; position: relative; overflow: visible;">
    <div class="container-fluid hero-section">
        <div class="row no-gutters h-100 align-items-center position-relative" style="min-height: 930px;">
            
            <div class="hero-main-img-wrapper">
                <?php echo wp_get_attachment_image( 6, 'large' ); ?>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-8 hero-header">
                        <h1 class="">
                            Tim Williams Osteopaths
                        </h1>
                        <div class="mt-4">
                            <a href="#" class="btn btn-light btn-lg px-5 py-3">
                                Book an appointment with me
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hero-overhang-img" style="position: absolute; left: 10%; bottom: -137px; width: 320px; height: 275px; z-index: 3;">
                <?php echo wp_get_attachment_image( 7, 'small' ); ?> 
            </div>

        </div>
    </div>
</section>
