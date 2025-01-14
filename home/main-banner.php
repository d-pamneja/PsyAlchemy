<style>
.text-red h1 {
    color: #d7746f;
}

/* Ensure the image container takes up full width and adjusts height responsively */
.image-container {
    width: 100%;
    min-height: 300px;
    /* Minimum height for the image container on smaller screens */
}

/* Make sure the image fills the container */
.image {
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    width: 50%;
    height: 90%;
}

@media (max-width: 991px) {
    .image-container {
        width: 100%;
        display: contents;
        /* Adjust image height for smaller screens if needed */
    }
}

/* On larger screens (laptops and desktops), adjust the image container's height */
@media (min-width: 992px) {
    .image-container {
        height: 700px;
        background-position: center;
        margin-top: 50px;
        /* Adjust this value as needed for larger screens */
    }
}

/* 3D text effect for the h1 element */
h1.heading {
    font-size: 4rem;
    /* Adjust size as needed */
    font-weight: bold;
    color: #333333;
    /* Dark gray for strong contrast on lavender background */
    text-transform: uppercase;
    letter-spacing: 2px;
    /* Adds spacing between the letters for a more dramatic effect */

    /* Apply multiple text shadows for the 3D effect */
    text-shadow:
        3px 3px 5px rgba(0, 0, 0, 0.3),
        /* First shadow (left-bottom) */
        6px 6px 10px rgba(0, 0, 0, 0.2),
        /* Second shadow (further for depth) */
        7px 7px 12px rgba(0, 0, 0, 0.1);
    /* Third shadow (further for more depth) */
}

/* Subtext styling - More elegant */
.subtext {
    font-size: 1.25rem;
    /* Subtext size */
    color: #5e3d8c;
    /* Muted dark purple for a soft but visible contrast */
    /* Off-white or light gray for a softer contrast */
    font-weight: 300;
    /* Lighter weight than the heading */
    margin-top: 10px;
    /* Space between the heading and the subtext */
    letter-spacing: 1px;
    /* Slight spacing for readability */
    opacity: 0.9;
    /* Slightly reduced opacity */
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
    /* Soft shadow for the subtext */
}

@keyframes fadeInSubtext {
    0% {
        opacity: 0;
        transform: translateY(10px);
    }

    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

.subtext {
    animation: fadeInSubtext 0.5s ease-out;
}


/* Optional: Add some animation to enhance the 3D effect */
@keyframes popIn {
    0% {
        transform: scale(0.5);
        opacity: 0;
    }

    100% {
        transform: scale(1);
        opacity: 1;
    }
}

h1.heading {
    animation: popIn 0.6s ease-out;
}
</style>

<section>
    <div class="container d-flex flex-column flex-lg-row align-items-center justify-content-between">
        <!-- Text Section -->
        <div class="banner rounded-4 p-5 position-relative mb-5 mb-lg-0 col-12 col-lg-6">
            <div class="text-content py-5">
                <div class="text-red">
                    <h1 class="display-1 heading">
                        <b>Palchhin Sharma</b>
                    </h1>
                </div>
                <p class="fs-4 subtext">
                    Counselling Psychologist
                </p>
            </div>
        </div>

        <!-- Image Section -->
        <div class="image-container col-12 col-lg-6 p-0" data-aos="zoom-out-left">
            <div class="image rounded-4 position-relative"
                style="background-image: url('images/personal-picture.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; min-height: 300px;">
                <!-- Image is set as a background image of the div -->
            </div>
        </div>
    </div>
</section>