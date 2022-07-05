@extends('unauth.app')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Login</h2>
          <ol>
            <li><a href={{url('/')}}>Home</a></li>
            <li>Login</li>
          </ol>
        </div>

        

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page contact">
      <div class="container">
        <div class="row">
          <div class="col-12 d-flex" style="justify-content: center;">
            <div style="max-width: 1000px;">
              <h2 class="text-center mb-5">Login to you Account</h2>
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                
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
                <div class="text-center"><button type="submit" style="width: 100%;" class="btn btn-primary">Login</button></div>
                <div>
                  <p class="text-center mt-3">Don't have an account? <a href={{url('/register')}}>Sign up</a></p>
                </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->
@endsection