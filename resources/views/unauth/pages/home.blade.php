@extends('unauth.app')
@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h3>It's time to Take Control of Your Cryptocurrency Transactions<span>!</span></h3>
          <h2 class="mt-2"> Exchangespace is the Worlds most secure Cross Exchangespace DeFi platform allowing users to deploy crypto-based OTC service smart contracts with no coding required.</h2>
          <a class="btn btn-primary btn-lg mt-2" href={{url('/register')}}>Get Started</a>
        </div>
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>How it Works</p>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Step 1</a></h4>
              <p>
                The buyer selects the product or service from a Exchangespace-enabled merchant website.
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Step 2</a></h4>
              <p>
                Buyer secures funds by selecting "Exchangespace" on the payment options available, both parties are notified instantly.
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Step 3</a></h4>
              <p>
                The seller delivers the product or service to customer.
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4><a href="">Step 4</a></h4>
              <p>
                Exchangespace disburses the fund to the seller upon delivery verification.
              </p>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Services Section -->

     <!-- ======= Counts Section ======= -->
     <section id="counts" class="counts p-3">
      <div class="container" data-aos="fade-up">

        <div class="section-title" style="margin-top: 100px; margin-bottom: 40px;">
          <h2>See how Exchangespace works for you</h2>
          <p>We protect buyers and sellers' interest</p>
        </div>

        <div class="row no-gutters">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right" data-aos-delay="100"></div>
          <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch" data-aos="fade-left" data-aos-delay="100">
            <div class="content d-flex flex-column justify-content-center">
              <h3>All-In-One Bitcoin and Cryptocurrency OTC service Payment Solution</h3>
              <p>
                Exchangespace understands what people are looking for in a OTC service payment system, first-rate security, ease of use, dispute resolution and quick disbursement of funds all while being fully compliant. We also included Private Chat, User Ratings and Instant Alerts, just to spice things up a bit.
              </p>
              <div>
                <a href={{url('/register')}} class="btn btn-primary btn-lg mt-2 w-max-content">
                  Get Started
                </a>
              </div>
              
             
            </div><!-- End .content-->
          </div>
        </div>

        <div class="row no-gutters p-5" style="border-radius: 50px; margin-top: 200px; background-color: #f1f1f1;">
          
          <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch" data-aos="fade-left" data-aos-delay="100">
            <div class="content d-flex flex-column justify-content-center mr-3">
              <h3>Stay in total control with our Keyless OTC service Transaction System</h3>
              <p>
                Exchangespace understands what people are looking for in a OTC service payment system, first-rate security, ease of use, dispute resolution and quick disbursement of funds all while being fully compliant. We also included Private Chat, User Ratings and Instant Alerts, just to spice things up a bit.
              </p>
              <div>
                <a href={{url('/register')}} class="btn btn-primary btn-lg mt-2 w-max-content">
                  Create an Account
                </a>
              </div>
              
             
            </div><!-- End .content-->
          </div>
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right" data-aos-delay="100"></div>
        </div>

      </div>
    </section><!-- End Counts Section -->


    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta" style="margin-top: 100px;">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Why Cryptocurrency OTC service?</h3>
          <p> 
            Buyers can rest knowing Xchange's proprietary Keyless OTC service system secures funds until you receive the item or service and are happy to release funds to the seller.

Sellers never need to worry about shipping goods or providing a service when using Exchangespace. Once buyer funds have been received, seller is authorized to ship goods or provide service knowing funds are secure.
          </p>
          <a class="cta-btn" href={{url('/register')}}>Click here to send an Invite</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

   

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients" style="margin-top: 100px;">
      <div class="container" data-aos="zoom-in">

        <div class="section-title text-center">
          <!-- <h2>Team</h2> -->
          <p>Protected by </p> 
        </div>

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/logos/block.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos/gate.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos/geko.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logos/wechian-logo.png" class="img-fluid" alt=""></div>
            
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Clients Section -->


    
    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients" style="margin-top: 100px;">
      <div class="container" data-aos="zoom-in">

        <div class="section-title text-center">
          <!-- <h2>Team</h2> -->
          <p>Partners </p> 
        </div>

        <div class="d-flex">
          <div class="swiper-wrapper align-items-center" style="justify-content: center;">
            <div class=""><img src="assets/img/logos/certik.png" class="img-fluid" style="max-width: 200px;" alt=""></div>
            <div class=""><img src="assets/img/logos/hacken.png" class="img-fluid" style="max-width: 200px;" alt=""></div>
          </div>
        </div>

      </div>
    </section><!-- End Clients Section -->



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info p-3" style="background-color: #f1f1f1; height: 100%;">
              
              Give us a call or stop by our door anytime, we try to answer all enquiries within 24 hours on business days.
              <br/><br/>
              We are happy to hear from you



            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><a type="submit">Send Message</a></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
@endsection