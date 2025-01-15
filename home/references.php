<style>
/* Mobile First */
#banner {
    background-image: url('images/new-banner.jpeg');
    background-size: contain;
    /* Ensure the image is fully visible on mobile */
    background-position: center;
    background-repeat: no-repeat;
    height: 400px;
    /* Default height for mobile screens */
}

/* Dynamic height based on viewport height (vh) */
@media (min-width: 992px) {
    #banner {
        background-size: cover;
        height: 50vh;
        /* 50% of the viewport height for larger screens */
    }
}
</style>

<section class="py-5">
    <div class="container" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300"
        data-aos-offset="0">
        <div class="rounded-4 p-5"
            style="background-image: url('images/new-final-midsection.jpeg'); background-size: contain; background-repeat: no-repeat; background-position: center; height: 400px;"
            id="banner">
        </div>
    </div>
</section>