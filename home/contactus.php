<section class="p-5 bg-yellow py-5">
    <div class="container">
        <div id="form-message"></div>
        <form id="contact-form" action="./shared/processRequest.php" method="post">
            <div class="row justify-content-center my-5">
                <div class="col-md-5">
                    <h6>
                        Quick Contact
                    </h6>
                    <h2 class="display-3">
                        Leave a Message
                    </h2>
                    <p>
                        Please fill out the form below for inquiries related to support, feedback, or general questions.
                        We will get back to you as soon as possible.
                    </p>
                    <p><strong>We look forward to hearing from you!</strong></p>
                </div>
                <div class="col-md-5">
                    <div class="mb-3">
                        <input type="text" class="form-control p-3 rounded-4" name="name" id="name"
                            aria-describedby="nameHelpId" placeholder="Your Name" required />
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control p-3 rounded-4" name="subject" id="subject"
                            aria-describedby="nameHelpId" placeholder="Subject" required />
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control p-3 rounded-4" name="email" id="email"
                            aria-describedby="emailHelpId" placeholder="Your Email" required />
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control p-3 rounded-4" name="message" placeholder="Your Message"
                            id="message" rows="3" required></textarea>
                    </div>
                    <div class="d-grid">
                        <button type="submit" id="form-submit" class="btn btn-dark btn-lg text-uppercase rounded-4">
                            Submit
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>