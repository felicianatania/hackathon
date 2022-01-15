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
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <title>Dashboard Admin</title>
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
              <a class="nav-link active" aria-current="page" href="{{url('/')}}">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('getGroupsDashboard')}}"
                >DASHBOARD</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('getGroups')}}">PARTICIPANT</a>
            </li>
          </ul>
        </div>
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

    <!-- dashboard-start -->
    <!-- welcome -->
    <div class="container d-flex justify-content-center align-items-end mb-5">
      <div class="dashboard">
        <div class="fitur d-flex justify-content-center">
          <div class="search m-3" style="width: 54rem">
            <form class="d-flex" type="get" action="{{url('/search-dashboard')}}">
              <input
                class="form-control search me-2"
                type="search"
                name="query"
                placeholder="Search"
                aria-label="Search"
              />
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
          <div class="filter m-3">
            <div class="dropdown">
              <button
                class="btn btnfiltersort dropdown-toggle"
                type="button"
                id="dropdownMenuButton1"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Filters
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="{{url('/groups-dashboard')}}">All</a></li>
                <li><a class="dropdown-item" href="{{url('/verified-dashboard')}}">Verified</a></li>
                <li><a class="dropdown-item" href="{{url('/unverified-dashboard')}}">Unverified</a></li>
              </ul>
            </div>
          </div>
          <div class="sort m-3">
            <div class="dropdown">
              <button
                class="btn btnfiltersort dropdown-toggle"
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
      <table class="table shadow-lg ">
        <thead>
          <tr>
            <th scope="col" width="200" class="align-middle text-center text-white">
              Team List
            </th>
            <th scope="col" class="align-middle text-center text-white">Status</th>
            <th scope="col" width="100" class="align-middle text-center text-white">
              Action
            </th>
          </tr>
        </thead>
        <tbody class="mb-5">
        @foreach ($groups as $group)
          <tr>
            <td class="align-middle text-center">
              <div class="d-inline-flex">
                <img src="assets/participant/adminpaneldas.png" alt="" />
                <p class="align-middle">{{ $group->groupName }}</p>
              </div>
            </td>
                @if ($group->verification===0)
                    <td class="d-flex justify-content-center mt-3" style="border: none;"><b class="unverified">Unverified</b></td>
                @else
                    <td class="d-flex justify-content-center mt-3" style="border: none;"><b class="verified">Verified</b></td>
                @endif
            </td>
            <td class="justify-content-center align-items-end">
              <div class="d-flex">
                <div class="verify m-3">
                    {{-- @if ($group->verification===0)
                    <form action="{{route('verifyGroup', ['id'=>$group->id])}}" method="post">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-primary">Verify</button>
                    </form>
                    @endif --}}

                    @if ($group->verification===0)
                    <button
                    type="button"
                    class="btn"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal{{$group->id}}"
                  >
                    Verify
                  </button>
                  @endif

                  <!-- Modal -->
                  <div
                    class="modal fade"
                    id="exampleModal{{$group->id}}"
                    tabindex="-1"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true"
                  >
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-body text-center fs-5">
                          verify this Group
                        </div>

                        <div class="d-flex justify-content-around mb-3">
                            <form action="{{route('verifyGroup', ['id'=>$group->id])}}" method="post">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn">Verify</button>
                            </form>
                          {{-- <button type="button" class="btn">verify</button> --}}
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
                <div class="edit m-3">
                  <div class="edit">
                    <button
                      type="button"
                      class="btn"
                      data-bs-toggle="modal"
                      data-bs-target="#view"
                    >
                      View
                    </button>

                    <div
                      class="modal fade"
                      id="view"
                      tabindex="-1"
                      aria-labelledby="view"
                      aria-hidden="true"
                    >
                      <div
                        class="modal-dialog d-flex justify-content-center"
                      >
                        <div class="modal-content">
                          <div class="modal-header d-flex justify-content-center">
                            <h5
                              class="modal-title fw-bolder"
                              id="view"
                              style="font-size: 25px"
                            >
                            Payment Proof
                            </h5>
                          </div>
                          <div class="modal-body d-flex
                          justify-content-center">
                          <img src="{{ asset('storage/'.$group->imagepayment) }}" name="payment" alt="No data" />
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
                </div>
              </div>
            </td>
          </tr>
          @endforeach
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
