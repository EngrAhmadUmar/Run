<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/login.css" />
    <title>Run - Login/Sign Up</title>
  </head>
  <body>
    <div class="container">
      @if($message = Session::get('success'))

      <div class="alert alert-info">
      {{ $message }}
      </div>
      
      @endif
      <div class="forms-container">
        <div class="signin-signup">
          <form action="{{ route('registration.validate_login') }}" method="POST" class="sign-in-form">
            @csrf
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-email"></i>
              <input type="text" name="email" required placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" required placeholder="Password" />
            </div>
            <input type="submit" value="Login" class="btn solid" />
            <p class="social-text">Forgot password?</p>
            {{-- <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div> --}}
          </form>
          <form action="{{ route('registration.validate_registration')}}" method="POST" class="sign-up-form">
            @csrf
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="first_name" placeholder="First Name" required/>
              
            </div>
            <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" name="last_name" placeholder="Last Name" required />
               
              </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" placeholder="Email" required />
             
            </div>
            <div class="input-field">
                <i class="fas fa-phone"></i>
                <input type="tel" name="phone_number" placeholder="Phone" required />
               
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" required/>
            
            </div>
            <input type="submit" class="btn" value="Sign up" />
            <p class="social-text">I accept Run's <a href="#">Terms & Conditions</a></p>
            {{-- <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div> --}}
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          {{-- <img src="img/login.webp" class="image" alt="" /> --}}
        </div>
        <div class="panel right-panel">
          <div class="content" style="background-image: url('/static/images/backgrounds/login.png');">
            <h3>One of us ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          
        </div>
      </div>
    </div>

    <script src="js/login.js"></script>
  </body>
</html>
