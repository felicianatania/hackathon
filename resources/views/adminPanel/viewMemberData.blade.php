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
    <link rel="stylesheet" href="{{ asset('css/view.css') }}" />
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <title>View Group Data</title>
  </head>
  <body>
    <!-- navbar-start -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <div class="container-md">
        <div>
          <a class="navbar-brand" href="#"
            ><span><i class="fab fa-hackerrank"></i></span
          ></a>
        </div>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-center"
          id="navbarNav"
        >
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">DASHBOARD</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">PARTICIPANT</a>
            </li>
          </ul>
        </div>
        <!-- <button type="button" class="logout"></button> -->
        <form action="{{route('logout')}}" method="POST">
            @csrf
            <button class="button logout">
                <span><i class="fas fa-sign-in-alt"></i></span> LOGOUT
                {{-- <button type="submit" class="button logout" role="button">Logout</button> --}}
            </button>
        </form>
      </div>
    </nav>

    <!-- navabr-end -->

    <!-- view-start -->
    <!-- welcome -->
    <div class="container d-flex justify-content-center align-items-center">
      <div class="view">
        <ul class="nav nav-pills nav-fill">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('getGroupByIdView', ['id'=>$member[0]->groupId])}}">leader</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('getMemberByIdView', ['id'=>$member[0]->groupId, 'memberNo'=>1])}}">Member 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Member 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link">Member 3</a>
          </li>
        </ul>

        <!-- ~~~ -->
        <div class="member"></div>
        <div class="data">
          <div
            class="member after-add-more d-flex flex-column align-items-center mt-5 mb-5"
            id="member1"
          >
            <div class="card">
              <div class="card-body">
                <div class="title mb-5 text-center">
                  <h2>Team A</h2>
                </div>
                <form action="">
                  <div class="row mb-3">
                    <label for="name" class="col-sm-3 col-form-label"
                      >Full Name</label
                    >
                    <div class="col-sm-8">
                      <input
                        type="text"
                        class="form-control"
                        id="name"
                        value="{{$member[0]->fullname}}"
                        placeholder="Full Name"
                      />
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="Email" class="col-sm-3 col-form-label"
                      >Email</label
                    >
                    <div class="col-sm-8">
                      <input
                        type="email"
                        class="form-control"
                        id="Email"
                        placeholder="Email"
                        value="{{$member[0]->email}}"
                      />
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="number" class="col-sm-3 col-form-label"
                      >Whatsapp Number</label
                    >
                    <div class="col-sm-8">
                      <input
                        type="tel"
                        class="form-control"
                        id="number"
                        placeholder="Whatsapp Number"
                        value="{{$member[0]->WA}}"
                      />
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="line" class="col-sm-3 col-form-label"
                      >LINE ID</label
                    >
                    <div class="col-sm-8">
                      <input
                        type="text"
                        class="form-control"
                        id="line"
                        placeholder="LINE ID"
                        value="{{$member[0]->lineId}}"
                      />
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="github" class="col-sm-3 col-form-label"
                      >Github/Gitlab ID</label
                    >
                    <div class="col-sm-8">
                      <input
                        type="text"
                        class="form-control"
                        id="github"
                        placeholder="Github/Gitlab ID"
                        value="{{$member[0]->github}}"
                      />
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="birthplace" class="col-sm-3 col-form-label"
                      >Birth Place</label
                    >
                    <div class="col-sm-8">
                      <input
                        type="text"
                        class="form-control"
                        id="birthplace"
                        placeholder="Birth Place"
                        value="{{$member[0]->birthPlace}}"
                      />
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="birthdate" class="col-sm-3 col-form-label"
                      >Birth Date</label
                    >
                    <div class="col-sm-8">
                      <input
                        type="date"
                        class="form-control"
                        id="birthdate"
                        placeholder="Birth date"
                        value="{{$member[0]->birthDate}}"
                        onfocus="(this.type='date')"
                        onblur="if(this.value == '') this.type='text';"
                      />
                    </div>
                  </div>
                  <div class="view d-flex justify-content-around pt-3">
                    <div class="cv">
                      <button
                        type="button"
                        class="btn"
                        data-bs-toggle="modal"
                        data-bs-target="#view"
                      >
                        View CV
                      </button>

                      <div
                        class="modal fade"
                        id="view"
                        tabindex="-1"
                        aria-labelledby="viewCV"
                        aria-hidden="true"
                      >
                        <div
                          class="modal-dialog modal-lg modal-dialog-centered d-flex justify-content-center"
                        >
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5
                                class="modal-title fw-bolder"
                                id="viewCV"
                                style="font-size: 25px"
                              >
                                CV
                              </h5>
                            </div>
                            <div class="modal-body d-flex
                            justify-content-center">
                            <img src="../asset/cv.jpg" alt="" />
                          </div>
                          <div class="modal-footer">
                            <button
                              type="button"
                              class="btn"
                              data-bs-dismiss="modal"
                            >
                              Close
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="flazz">
                    <button
                      type="button"
                      class="btn"
                      data-bs-toggle="modal"
                      data-bs-target="#view"
                    >
                      View flazz / ID card
                    </button>

                    <div
                      class="modal fade"
                      id="view"
                      tabindex="-1"
                      aria-labelledby="viewflazz"
                      aria-hidden="true"
                    >
                      <div
                        class="modal-dialog modal-lg modal-dialog-centered d-flex justify-content-center"
                      >
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5
                              class="modal-title fw-bolder"
                              id="viewCV"
                              style="font-size: 25px"
                            >
                              Flazz / ID Card
                            </h5>
                          </div>
                          <div class="modal-body d-flex
                          justify-content-center">
                          <img src="../asset/cv.jpg" alt="" />
                        </div>
                        <div class="modal-footer">
                          <button
                            type="button"
                            class="btn"
                            data-bs-dismiss="modal"
                          >
                            Close
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://kit.fontawesome.com/7c925acf6e.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  </body>
</html>
