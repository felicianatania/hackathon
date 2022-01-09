<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
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

    <title>Login</title>
    <style>
      * {
        padding: 0px;
        margin: 0px;
        box-sizing: border-box;
        font-family: poppins;
        color: white;
      }

      body {
        height: 100vh;
        background-image: linear-gradient(95deg, #070f2d, #7b87b0);
        background-repeat: no-repeat;
      }
      .login {
        display: flex;
        justify-content: center;
        align-items: center;
        background-image: url(./asset/bg.png);
        background-position: 0%;
        background-repeat: no-repeat;
        background-size: 50%;
      }

      .judul {
        height: 100vh;
        width: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        letter-spacing: 0.7rem;
      }

      .judul > h1 {
        margin-left: -50px;
        width: 50%;
        font-size: 70px;
        text-align: center;
        text-shadow: 1px 2px black;
      }

      .pwd {
        background:transparent;
        border-radius: 0px;
        box-shadow: rgba(100, 100, 111, 0.5) 0px 7px 20px 0px;
        position: relative;
        border-bottom: 2px solid white;
      }

      .pwd input {
        background: transparent;
        border: none;

        font-size: 1.2em;

      }
      .pwd input:focus {
        outline: none;
      }

      .pwd i {
        font-size: 1.4em;
        padding: 1em;

        transition: 0.3s;
      }

      .pwd .fa-eye,
      .pwd .fa-eye-slash {
        cursor: pointer;

        width: 1.2em;
      }

      .pwd > div:nth-child(2) {
        position: relative;
      }

      .form-control {
        background-color: transparent;
        border: none;
        border-bottom: 2px solid white;
        width: 100%;
        color: white;
        border-radius: 0px;
        /* height: 50px; */
      }

      .form-control:focus {
        color: white;
        box-shadow: transparent;
        transform: all 12s ease-out;
        box-shadow: none;
        border: none;
        border-bottom: 2px solid white;
      }

      .input-group-text {
        background-color: transparent;
        border: none;
        border-bottom: 2px solid white;
        border-radius: 0px;
      }

      input::placeholder {
        color: #ffffffb7 !important;
      }

      .forgot {
        float: right;
        text-decoration: none;
      }

      .signup {
        display: flex;
        justify-content: center;
        letter-spacing: 3px;
      }

      a:hover {
        color: white;
        text-decoration: underline;
      }

      .btn {
        color: #ffffff;
        border-radius: 15px;
        height: 45px;
        font-size: 20px;
      }
      .btn:hover {
        background: white;
        border: 2px solid white;
        color: #334257;
        transition: 0.6s;
      }
    </style>
  </head>
  <body>
    <section class="login">
    <form method="POST" action="{{ route('login') }}">
         @csrf
      <div class="judul col-4">
        <h1 class="fw-bolder">LOGIN HACKATHON 5.0</h1>
      </div>

      <div class="container col-4 p-4">
        <div class="judulform mb-5">
          <h1 class="fw-bolder">Welcome Back!</h1>
          <h4 style="color: #ffffffb7">Please enter your details.</h4>
        </div>
        <div class="contentform" style="font-size: 20px">
          <div class="username mb-3">
            <div class="labelj">
              <label for="usename" class="form-label">Group Name</label>
            </div>
            <div class="input-group flex-nowrap">
              <span class="input-group-text" id="addon-wrapping"
                ><img src="./asset/name.png" alt="user"
              /></span>
              <input
                name="groupName"
                value="{{ old('groupName') }}"
                type="text"
                class="form-control form-control-lg"
                placeholder="Enter your group name"
                aria-label="Username"
                aria-describedby="addon-wrapping"
                style="background-color: transparent"
              />
            </div>
          </div>

          <div class="pw mb-3">
            <div class="pwd">
              <div class="overlay"></div>
              <div>
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="*********" />
                <i class="fas fa-eye-slash"></i>
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
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
              <a href="forgot.html" class="forgot text-white">Forgot password</a>
            </div>
          </div>
          <button type="submit" class="btn border w-100 mb-5">Login</button>

          <div class="signup">
            <p style="color: #ffffffb7">Not yet registered ?</p>
            <a href="#" class="text-white">Sign up!</a>
          </div>
        </div>
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
