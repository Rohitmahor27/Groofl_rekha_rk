<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->

    <title>Driver Registration Form</title>
  </head>
  <body>

    <div class="container vh-100">
      <div class="row justify-content-center h-100">
        <div class="card w-50 my-auto shadow">
          <div class="card-header text-center bg-primary text-white">
            <h2>Driver Registration Form</h2>
          </div>

          <div class="card-body">
            <form method="POST" action="{{url('/driver-register')}}">
                        @csrf
              <div class="form-group">
                <label for="name">Name:</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
              </div>
              <div class="form-group">
                <label for="email">Email:</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
              </div>
              <div class="form-group">
                <label for="password">Password:</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
              </div>
              <!-- <div class="form-group">
                <label for="password">Confirm Password:</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
              </div> -->
              <div class="form-group">
                <label for="password">Age:</label>
                <input id="age" type="text" class="form-control" name="age" required autocomplete="new-password">
              </div>
              <div class="form-group">
                <label for="password">Mobile Number:</label>
                <input id="mobile_no" type="text" class="form-control" name="mobile_no" required autocomplete="new-password">
              </div>
              <div class="form-group">
                <label for="password">License:</label>
                <input id="license" type="text" class="form-control" name="license" required autocomplete="new-password">
              </div>
              <div class="form-group">
                <label for="password">Address:</label>
                <input id="address" type="text" class="form-control" name="address" required autocomplete="new-password">
              </div>
              <input type="submit" class="btn btn-primary w-100" value="Save" name="">
          </form>
          </div>
          
          <div class="card-footer text-right">
            <a href="{{url('/driver-login')}}">Login</a>
           
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script> -->
  </body>
</html>