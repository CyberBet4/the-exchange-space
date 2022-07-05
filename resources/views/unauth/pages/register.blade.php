@extends('unauth.app')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Sign Up</h2>
          <ol>
            <li><a href={{url('/')}}>Home</a></li>
            <li>Sign Up</li>
          </ol>
        </div>

        

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page contact">
      <div class="container">
        <div class="row">
          <div class="col-12 d-flex" style="justify-content: center;">
            <div style="max-width: 1000px;">
              <h2 class="text-center">Create an Account</h2>
              <p class="mb-5 text-center"> It's free and only takes a minute.</p>
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">

                  <div class=" form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validate"></div>
                  </div>
                  
                  <div class="form-group mt-3">
                    <!-- input for contact address -->
                    <input type="text" class="form-control" name="address" placeholder="Contact Address" data-rule="email" data-msg="Please enter a valid email" />
                  </div>

                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="email" placeholder="Email Address" required>
                </div>

                <div class="form-group mt-3">
                  <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>

                <div class="my-3">
                  <!-- <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div> -->
                </div>
                <div class="text-center"><button type="submit" style="width: 100%;" class="btn btn-primary">Sign Up</button></div>
                <div>
                  <p class="text-center mt-3">Already have an account? <a href={{url('/login')}}>Login</a></p>
                </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

@endsection