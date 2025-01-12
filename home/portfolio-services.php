<style>
  .service-item {
        text-align: center;
        padding: 30px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        background-color: #f8f9fa;
        margin-bottom: 30px;
        transition: box-shadow 0.3s ease;
        min-height: 300px;
        display: flex;
        flex-direction: column;
        justify-content: space-between; 
    }

  .service-item:hover {
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
  }

  .service-icon {
        font-size: 40px;
        color: #f66640;
        margin-bottom: 20px;
    }

  .service-item:hover {
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
  }
</style>

<section class="portfolio py-5">
    <div class="container">
      <div class="justify-content-center">
        <div class="row justify-content-center">
          <div class="col-lg-col-10" data-aos="fade-up">
            <div class="section-header text-center">
              <h4 class="fw-bold fs-2 txt-fx slide-up">
                Hello! I’m Palchhin Sharma, a passionate and dedicated mental health professional with a strong grounding in psychological theories and a drive to translate knowledge into impactful practice and research. With a special focus on Child Psychology and Research, I bring expertise in mental health diagnostics, including proficiency in various assessment tools and techniques.
              </h4>
            </div><!--section-header-->
          </div>

          <?php include 'home/references.php'; ?>

          <div class="col-lg-col-10" data-aos="fade-up">
            <div class="section-header text-center">
              <h4 class="fw-bold fs-2 txt-fx slide-up">
                I have a deep understanding of the physiological, emotional, and social factors shaping human behavior, coupled with a solid foundation in Clinical Psychology and Research Methodology. My journey is fueled by a genuine commitment to advancing mental health awareness and therapeutic approaches through innovation and empathy.
                Let’s connect and explore the ever-evolving world of psychology together, turning insights into meaningful change!
              </h4>
            </div><!--section-header-->
          </div>


          <div style="margin: 50px;">
            <?php include 'home/qualifications.php'; ?>
          </div>

        <section>
            <div class="text-center">
                <h2 class="display-3 mb-5">
                Services
                </h2>
            </div>
            <div class="container" style="margin-50px">
                <div class="row" style="margin-20px">
                    <!-- Service 1 -->
                    <div class="col-md-4">
                        <div class="service-item">
                            <i class="fas fa-user service-icon"></i>
                            <h3>Individual Counseling</h3>
                            <p>Personalized support to help you navigate life's challenges and build resilience.</p>
                        </div>
                    </div>
                    <!-- Service 2 -->
                    <div class="col-md-4">
                        <div class="service-item">
                            <i class="fas fa-home service-icon"></i>
                            <h3>Family Counseling</h3>
                            <p>Strengthening family bonds through open communication and understanding.</p>
                        </div>
                    </div>
                    <!-- Service 3 -->
                    <div class="col-md-4">
                        <div class="service-item">
                            <i class="fas fa-heart service-icon"></i>
                            <h3>Relationship Counseling</h3>
                            <p>Helping couples foster trust, connection, and mutual growth.</p>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-20px">
                    <!-- Service 4 -->
                    <div class="col-md-4">
                        <div class="service-item">
                            <i class="fas fa-child service-icon"></i>
                            <h3>Child & Adolescent Counseling</h3>
                            <p>Guiding young minds through emotional and developmental hurdles.</p>
                        </div>
                    </div>
                    <!-- Service 5 -->
                    <div class="col-md-4">
                        <div class="service-item">
                            <i class="fas fa-brain service-icon"></i>
                            <h3>Cognitive Behavioral Therapy (CBT)</h3>
                            <p>Transforming negative thought patterns for a healthier mindset.</p>
                        </div>
                    </div>
                    <!-- Service 6 -->
                    <div class="col-md-4">
                        <div class="service-item">
                            <i class="fas fa-pen-fancy service-icon"></i>
                            <h3>Handwriting Analysis</h3>
                            <p>Unlocking insights into personality through the art of handwriting.</p>
                        </div>
                    </div>
                    <!-- Service 7 -->
                    <div class="col-md-4">
                        <div class="service-item">
                            <i class="fas fa-palette service-icon"></i>
                            <h3>Expressive Art Therapy</h3>
                            <p>Healing through creative expression and self-discovery.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        </div>
    </div> 
</section>