<style>
    /* Reset link styles to prevent blue highlighting */
    a {
        text-decoration: none; /* Remove underline */
        color: inherit; /* Keep the color of the text */
    }

    a:hover, a:focus, a:active {
        text-decoration: none; /* Prevent underline on hover or focus */
        color: inherit; /* No color change on hover */
    }

    /* Remove focus styles from post-item */
    .post-item {
        background-color: white; /* Ensure white background stays intact */
        transition: background-color 0.3s ease; /* Optional: smooth hover effect */
    }

    .post-item:hover {
        background-color: #f9f9f9; /* Optional: subtle hover effect */
    }

    .post-item:focus {
        outline: none; /* Remove focus outline */
    }
</style>

<section class="py-5">
    <div class="container">
        <div class="text-center">
            <h2 class="display-3">
                Latest Blogs
            </h2>
            <p>
                Read our latest blogs to stay updated with our research and findings.
            </p>
        </div>
        <div class="row py-4">
            <div class="col-lg-6 p-3 mx-auto" data-aos="zoom-in">
                <a href="blogs/did.php">
                    <div class="post-item p-3 border rounded-5" style="background-color: white">
                        <div class="row g-md-5">
                            <div class="col-lg-5">
                                <img src="images/post-thumb-1.jpg" class="img-fluid rounded-4">

                            </div>
                            <div class="col-lg-7">
                                <p class="text-uppercase text-muted mt-3">
                                    Trauma / Jan 13, 2025
                                </p>
                                <h3>
                                    Dissociative Identity Disorder
                                </h3>
                            </div>

                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>