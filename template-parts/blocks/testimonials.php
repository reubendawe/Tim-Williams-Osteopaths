<?php

/* Testimonials block template */

?>

<section id="testimonials" class="testimonials-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Proven <u>results</u> in complex care</h2>
            </div>
        </div>

        <div class="row g-4 testimonial-row">
            <?php for ($i = 0; $i < 3; $i++): ?>
            <div class="col-12 col-lg-4">
                <div class="testimonial-card">
                    <div class="testimonial-icon mb-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="white"><path d="M14.017 21L14.017 18C14.017 16.8954 13.1216 16 12.017 16L9.01703 16C7.91246 16 7.01703 16.8954 7.01703 18L7.01703 21M17.017 7.66667C17.017 10.244 14.9277 12.3333 12.3504 12.3333C9.77303 12.3333 7.6837 10.244 7.6837 7.66667C7.6837 5.08934 9.77303 3 12.3504 3C14.9277 3 17.017 5.08934 17.017 7.66667Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </div>
                    
                    <div class="stars mb-3">★★★★★</div>
                    
                    <h5 class="client-name">Joe Leech, <span class="role">Client</span></h5>
                    
                    <p class="testimonial-text">
                        "I went in with a bad back and Tim diagnosed that actually it was residual damage from my appendix operation 30 years ago. Tim treats the cause not the symptoms. Back is so much better."
                    </p>
                </div>
            </div>
            <?php endfor; ?>
        </div>

        <div class="row pt-5">
            <div class="col-lg-10 text-white">
                <p>From my clinics in London and Dorset to patients across Europe, I provide specialised osteopathic care for long-term health challenges. These stories reflect the impact of personalized treatment for Lyme disease and chronic illness.</p>
            </div>
        </div>
    </div>
</section>