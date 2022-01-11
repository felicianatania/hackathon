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
    <link rel="stylesheet" href="home.css" />
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>Admin Panel</title>
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
              <a class="nav-link active" aria-current="page" href="#">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"
                >DASHBOARD</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">PARTICIPANT</a>
            </li>
          </ul>
        </div>
        <!-- <button type="button" class="logout"></button> -->
        <a class="button logout" href="../login.html" role="button"
          ><span><i class="fas fa-sign-in-alt"></i></span> LOGOUT</a
        >
      </div>
    </nav>

    <!-- navabr-end -->

    <!-- dashboard-start -->
    <!-- welcome -->
    <div class="container d-flex justify-content-center align-items-center">
      <div class="dashboard">
        <div class="fitur d-flex justify-content-center">
          <div class="search">
            <form class="d-flex">
              <input
                class="form-control me-2"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
            </form>
          </div>
          <div class="filter">
            <div class="dropdown">
              <button
                class="btn btn-secondary dropdown-toggle"
                type="button"
                id="dropdownMenuButton1"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Filters
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">All</a></li>
                <li><a class="dropdown-item" href="#">Verified</a></li>
                <li><a class="dropdown-item" href="#">Unverified</a></li>
              </ul>
            </div>
          </div>
          <div class="sort">
            <div class="dropdown">
              <button
                class="btn btn-secondary dropdown-toggle"
                type="button"
                id="dropdownMenuButton1"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Sort
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">by name</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- content -->
    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Team List</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($groups as $group)
                <tr>
                <td>{{ $group->groupName }}</td>
                <td>
                    @if ($group->verification===1)
                        Verified
                    @else
                        Unverified
                    @endif
                </td>
                <td>
                    @if ($group->verification===0)
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Verify
                        </button>
                    @endif


                    <!-- Modal -->
                    <div
                      class="modal fade"
                      id="exampleModal"
                      tabindex="-1"
                      aria-labelledby="exampleModalLabel"
                      aria-hidden="true"
                    >
                      <div class="modal-dialog  modal-sm modal-dialog-centered ">
                        <div class="modal-content">
                          <div class="modal-body text-center fs-5">Verify This Group</div>

                          <div class="d-flex justify-content-around mb-3">
                            {{-- <a href="{{route('verifyGroup', ['id'=>$group->id, 'value' => 1])}}"><button type="submit" class="btn btn-primary">Verify</button></a> --}}
                            <form action="{{route('verifyGroup', ['id'=>$group->id])}}" method="post">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-primary">Verify</button>
                            </form>
                            {{-- <button type="button" class="btn btn-primary"> Verify </button> --}}
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                              Close
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <a href="{{route('getGroupByIdView', ['id'=>$group->id])}}" class="btn btn-secondary btn-lg " tabindex="-1" role="button" aria-disabled="true">View</a>
                  </td>
            </tr>
            @endforeach


          {{-- <tr>
            <td>Team b</td>
            <td>Unverified</td>
            <td>
              <button
                type="button"
                class="btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#exampleModal"
              >
                Verify
              </button>

              <!-- Modal -->
              <div
                class="modal fade"
                id="exampleModal"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
              >
                <div class="modal-dialog  modal-sm modal-dialog-centered ">
                  <div class="modal-content">
                    <div class="modal-body text-center fs-5">verify this Group</div>

                    <div class="d-flex justify-content-around mb-3">

                      <button type="button" class="btn btn-primary">
                       verify
                      </button>
                      <button
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal"
                      >
                        Close
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <a href="../forgot.html" class="btn btn-secondary btn-lg " tabindex="-1" role="button" aria-disabled="true">view</a>
            </td>
          </tr> --}}

        </tbody>
      </table>
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