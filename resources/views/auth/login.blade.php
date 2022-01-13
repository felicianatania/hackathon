<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{ URL::asset('css/login.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ URL::asset('assets/favicon.ico') }}">
    <title>Login</title>

  </head>
  <body>
    <section class="login">
      <div class="judul col-4">
        <h1 class="fw-bolder">LOGIN HACKATHON 5.0</h1>
      </div>
      <div class="container col-4 p-4">
        <div class="judulform mb-5">
          <h1 class="fw-bolder">Welcome Back!</h1>
          <h4 style="color: #ffffffb7">Please enter your details.</h4>
        </div>
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="contentform" style="font-size: 20px">
          <div class="username mb-3">
            <div class="labelj">
              <label for="usename" class="form-label">Group Name</label>
            </div>
            <div class="input-group flex-nowrap">
              <span class="input-group-text" id="addon-wrapping"
                ><img src="./assets/name.png" alt="user"
              /></span>
              <input
                type="text"
                class="form-control form-control-lg @error('groupName') is-invalid @enderror"
                name="groupName"
                value="{{ old('groupName') }}"
                placeholder="Enter your group name"
                aria-label="Username"
                aria-describedby="addon-wrapping"
                style="background-color: transparent"
              />
            </div>
            @error('groupName')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
          </div>

          <div class="pw mb-3">
            <div class="pwd">
              <div class="overlay"></div>
              <div>
                <i class="fas fa-lock @error('password') is-invalid @enderror"></i>
                <input type="password"  name="password" placeholder="*********" />
                <i class="fas fa-eye-slash"></i>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>
          </div>

          <div class="mb-3 form-check mb-5 mt-4">
            <input
              type="checkbox"
              class="form-check-input"
              id="Remember"
              placeholder="Password"
            />
            <div class="bawah">
              <label class="form-check-label" name="remember" id="remember" for="Remember" {{ old('remember') ? 'checked' : '' }}>Remember Me</label>
              @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="forgot text-white" >Forgot password</a>
              @endif
            </div>
          </div>
          <button type="submit" class="btn border w-100 mb-5">Login</button>

          <div class="signup">
            <p style="color: #ffffffb7">Not yet registered ?</p>
            <a href="{{ route('register') }}" class="text-white">Sign up!</a>
          </div>
        </div>
      </form>
      </div>
    </section>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://kit.fontawesome.com/43b827ccec.js"
      crossorigin="anonymous"
    ></script>
    <script>
      const input = document.querySelector(".pwd input");
      const eye = document.querySelector(".pwd .fa-eye-slash");
      const lock = document.querySelector(".pwd .fa-lock");
      const overlay = document.querySelector(".pwd .overlay");

      eye.addEventListener("click", () => {
        if (input.type == "password") {
          input.type = "text";

          eye.classList.remove("fa-eye-slash");
          eye.classList.add("fa-eye");

          setTimeout(() => {
            lock.getElementsByClassName.color = "#111625";
          }, 500);
        } else {
          input.type = "password";

          eye.classList.remove("fa-eye");
          eye.classList.add("fa-eye-slash");

          lock.style.toggle("overlay-cover");
        }
      });
    </script>
  </body>
</html>
