<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="{{ asset('css/login.css') }}">

  
</head>

<body>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#login">Log In</a></li>
        <li class="tab"><a href="#signup">Sign Up</a></li>
      </ul>
      
      <div class="tab-content">

        <div id="login">   
          
          
          <form method="POST" action="{{ route('login') }}">
          
            <div class="field-wrap">
            <label>
              Username<span class="req">*</span>
            </label>
            <input id="username" type="text" name="username" value="{{ old('username') }}" required autofocus>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input id="password" type="password" name="password" required>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>

        <div id="signup">   
          
          
          <form method="POST" action="{{ route('register') }}">
          
          <div class="top-row">

            <div class="field-wrap">
              <label>
                Username<span class="req">*</span>
              </label>
              <input id="username" type="text" name="username" value="{{ old('username') }}" required autofocus>
            </div>

            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input id="first_name" type="text" name="first_name" value="{{ old('first_name') }}" required autofocus>
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input id="last_name" type="text" name="last_name" value="{{ old('last_name') }}" required autofocus>

            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required>

          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input id="password" type="password" name="password" required>

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif


          </div>


          <div class="field-wrap">
            <label>
              Confirm Password<span class="req">*</span>
            </label>
            <input id="password-confirm" type="password" name="password_confirmation" require>



          </div>



          
          <button type="submit" class="button button-block"/>Register</button>
          
          </form>

        </div>
        
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script type="text/javascript" src="{{ asset('js/index.js') }}"></script> 


</body>
</html>
