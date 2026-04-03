<?php /* Pricing Block Template */ ?>

<section id="pricing" class="pricing-section">
    <div class="container">
    <div class="row">
            <div class="col-12">
                <h2>Proven <u>results</u> in complex care</h2>
            </div>
        </div>
        <div class="row g-4">

            <?php 
            // Defining an array to make it easy to change text for different cards later
            $locations = ['London', 'Dorset', 'Dublin', 'Spain'];
            foreach ($locations as $city) : 
            ?>
            <div class="col-xl-3 col-md-6">
                <div class="pricing-card">
                    <div class="pricing-header">
                        <p class="treatment-title">Osteopathic treatment, <?php echo $city; ?></p>
                        <h3 class="price">£155.00+</h3>
                    </div>
                    
                    <hr class="pricing-divider">
                    
                    <ul class="pricing-features">
                        <li><span class="tick">&#10003;</span> Personalised Recovery Integration</li>
                        <li><span class="tick">&#10003;</span> Personalised Recovery Integration</li>
                        <li><span class="tick">&#10003;</span> Personalised Recovery Integration</li>
                        <li><span class="tick">&#10003;</span> Personalised Recovery Integration</li>
                    </ul>
                    
                    <div class="pricing-footer">
                        <a href="#" class="btn btn-outline-neutral">
                            &rarr; BOOK SESSION
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="row mt-5">
            <div class="col-lg-9">
                <p class="pricing-footer-text">
                    Every patient’s journey is unique. My pricing is designed to be transparent, ensuring you receive the dedicated time, advanced diagnostic protocols, and tailored treatment sessions necessary for long-term health improvements.
                </p>
            </div>
        </div>
    </div>
</section>