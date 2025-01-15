<style>
  .accordion-button:not(.collapsed) {
      background-color: transparent; 
      color: inherit; 
  }

  .accordion-button {
      background-color: transparent; 
      color: inherit; 
      border: none; 
  }

  .accordion-button:focus {
      box-shadow: none; 
  }

  
</style>

<section>
    <div class="container">
      <div class="text-center pt-5">
        <h2 class="display-3">
          FAQs
        </h2>
      </div>
      <div class="row mt-5">
        <div class="col-lg-6">
          <img src="images/illustration-6.png" class="img-fluid">
        </div>
        <div class="col-lg-6" style="margin-top:25px">
          <div class="accordion accordion-flush" id="accordion-flush">
            <div class="accordion-item border mb-3 rounded-3">
              <h5 class="accordion-header">
                <button class="accordion-button collapsed" style="font-weight:bold;" type="button"
                  data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                  aria-controls="collapseThree">
                  What is the mode of services?
                </button>
              </h5>
              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordion-flush">
                <div class="accordion-body">
                  <p>Convenient online video consultations for flexibility and comfort.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item border mb-3 rounded-3">
              <h5 class="accordion-header">
                <button class="accordion-button collapsed" style="font-weight:bold;" type="button"
                  data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                  aria-controls="collapseTwo">
                  What are the timings availabe of your services?
                </button>
              </h5>
              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordion-flush">
                <div class="accordion-body">
                  <p>Available from 11:00 AM to 8:00 PM.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item border mb-3 rounded-3">
                <h5 class="accordion-header">
                  <button class="accordion-button collapsed" style="font-weight:bold;" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                    aria-controls="collapseOne">
                    How can I pay for the services?
                  </button>
                </h5>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordion-flush" >
                                  <div class=" accordion-body">
                  <p>Netbanking or UPI.</p>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
    </div>
  </section>