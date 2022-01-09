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
      .forgotPW {
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background-image: url(./asset/bgpw.png);
        background-position: center bottom;
        /* background-repeat: no-repeat; */
        background-size: 100%;
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

      .signup {
        display: flex;
        justify-content: center;
        letter-spacing: 3px;
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
    <section class="forgotPW">
      <div class="d-flex flex-column justify-content-around">
        <div class="title mb-5">
          <h1>Forgot Password?</h1>
        </div>
        <div class="form">
            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
            <form method="POST" action="{{ route('forgetpw') }}">
                @csrf
          <div class="label">
            <div class="email mb-3">
              <div class="labelj">
                <label for="email" class="form-label"
                  >Please enter your email address!</label
                >
              </div>
              <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping"
                  ><img src="/assets/email.png" alt="email"
                /></span>
                <input
                  class="form-control @error('email') is-invalid @enderror"
                  id="email"
                  type="email"
                  name="email"
                  value="{{ old('email') }}"
                  placeholder="Email"
                  aria-label="email"
                  aria-describedby="addon-wrapping"
                  style="background-color: transparent"
                />
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>
            <button type="submit" class="btn border w-100 mb-5">Next</button>
          </div>
            </form>
        </div>
      </div>
    </section>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
