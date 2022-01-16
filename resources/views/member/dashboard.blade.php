<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <link rel="stylesheet" href="{{ URL::asset('css/dashboardmember.css') }}" />

    <link rel="icon" type="image/x-icon" href="{{ URL::asset('assets/favicon.ico') }}" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <title>dashboard</title>
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
              <a class="nav-link active" aria-current="page" href="/">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"
                >DASHBOARD</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('getGroupByIdPayment')}}">PAYMENT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('timeline')}}">TIMELINE</a>
            </li>
          </ul>
        </div>
        <form action="{{route('logout')}}" method="POST">
            @csrf
            <button class="button logout">
                <span><i class="fas fa-sign-in-alt"></i></span> LOGOUT
            </button>
        </form>
      </div>
    </nav>

    <!-- navabr-end -->

    <!-- dashboard-start -->
    <!-- welcome -->
    <div class="container">
      <div class="dashboard">
        <div class="greetings">
          <h1 class="fw-bolder">Hello {{$group->groupName}},</h1>
          <h2>Welcome Back!</h2>
        </div>

        <div class="container d-flex flex-column justify-content-center">
          <!-- leader -->
          <div class="leader d-flex flex-column align-items-center mb-5">
            <div class="title mb-5">
              <h2>Leader's Information</h2>
            </div>
            <div class="card">
              <div class="card-body">
                <form action="">
                  <div class="row mb-3">
                    <label for="name" class="col-sm-3 col-form-label"
                      >Full Name</label
                    >
                    <div class="col-sm-8">
                      <input
                        type="text"
                        class="form-control"
                        value="{{$group->fullname}}"
                        id="name"
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
                        value="{{$group->email}}"
                        id="Email"
                        placeholder="Email"
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
                        value="{{$group->WA}}"
                        id="number"
                        placeholder="Whatsapp Number"
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
                        value="{{$group->lineId}}"
                        id="line"
                        placeholder="LINE ID"
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
                        value="{{$group->github}}"
                        id="github"
                        placeholder="Github/Gitlab ID"
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
                        value="{{$group->birthPlace}}"
                        id="birthplace"
                        placeholder="Birth Place"
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
                        value="{{$group->birthDate}}"
                        id="birthdate"
                        placeholder="Birth date"
                        onfocus="(this.type='date')"
                        onblur="if(this.value == '') this.type='text';"
                      />
                    </div>
                  </div>
                </form>
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
                        class="modal-dialog modal-lg d-flex justify-content-center"
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
                          <img src="{{ asset('storage/'.$group->CV) }}" alt="No data yet" />
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
                    data-bs-target="#viewidcard"
                  >
                    View flazz / ID card
                  </button>

                  <div
                    class="modal fade"
                    id="viewidcard"
                    tabindex="-1"
                    aria-labelledby="viewflazz"
                    aria-hidden="true"
                  >
                    <div
                      class="modal-dialog modal-lg d-flex justify-content-center"
                    >
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5
                            class="modal-title fw-bolder"
                            id="viewflazz"
                            style="font-size: 25px"
                          >
                          Flazz / ID Card
                          </h5>
                        </div>
                        <div class="modal-body d-flex justify-content-center">
                        <img src="{{ asset('storage/'.$group->IdCard) }}" alt="No data yet" />
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
        </div>
      </div>
      <!-- member 1-->
      @if(!empty($member1))
        <div
        class="member after-add-more d-flex flex-column align-items-center mt-5 mb-5"
        id="member1"
        >
        <div class="title mb-5">
            <h2>Member 1</h2>
        </div>
        <div class="card">
            <div class="card-body">
            <form action="">
                <div class="row mb-3">
                <label for="name" class="col-sm-3 col-form-label"
                    >Full Name</label
                >
                <div class="col-sm-8">
                    <input
                    type="text"
                    class="form-control"
                    value="{{$member1[0]->fullname}}"
                    id="name"
                    placeholder="Full Name"
                    />
                </div>
                </div>

                <div class="row mb-3">
                <label for="Email" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-8">
                    <input
                    type="email"
                    class="form-control"
                    value="{{$member1[0]->email}}"
                    id="Email"
                    placeholder="Email"
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
                    value="{{$member1[0]->WA}}"
                    id="number"
                    placeholder="Whatsapp Number"
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
                    value="{{$member1[0]->lineId}}"
                    id="line"
                    placeholder="LINE ID"
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
                    value="{{$member1[0]->github}}"
                    id="github"
                    placeholder="Github/Gitlab ID"
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
                    value="{{$member1[0]->birthPlace}}"
                    id="birthplace"
                    placeholder="Birth Place"
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
                    value="{{$member1[0]->birthDate}}"
                    id="birthdate"
                    placeholder="Birth date"
                    onfocus="(this.type='date')"
                    onblur="if(this.value == '') this.type='text';"
                    />
                </div>
                </div>
                {{-- <div class="view d-flex justify-content-around pt-3"> --}}
                {{-- <div class="box">
                    <input type="file" name="file-1[]" id="file-1" class="inputfile inputfile-1 addcv" data-multiple-caption="{count} files selected" multiple />
                    <label for="file-1"><span>Add CV</span></label>
                </div> --}}
                {{-- <div class="box">
                    <input type="file" name="file-2[]" id="file-2" class="inputfile inputfile-2 addflazz" data-multiple-caption="{count} files selected" multiple />
                    <label for="file-2"><span>Add Flazz</span></label>
                </div>
                </div>
                <div class="submit d-flex justify-content-center mt-3">
                <button type="submit" class="btn">Submit</button>
                </div> --}}
                <div class="view d-flex justify-content-around pt-3">
                    <div class="cv">
                      <button
                        type="button"
                        class="btn"
                        data-bs-toggle="modal"
                        data-bs-target="#viewCV1"
                      >
                        View CV
                      </button>

                      <div
                        class="modal fade"
                        id="viewCV1"
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
                            <img src="{{ asset('storage/'.$member1[0]->CV) }}"  title="CV Image" alt="No data yet">
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
                      data-bs-target="#viewidcard1"
                    >
                      View flazz / ID card
                    </button>

                    <div
                      class="modal fade"
                      id="viewidcard1"
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
                          <img src="{{ asset('storage/'.$member1[0]->IdCard) }}"  title="IdCard Image" alt="No data yet">
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
            </form>
            </div>
        </div>
        </div>

        @if(empty($member2))
            <div
                class="member after-add-more d-flex flex-column align-items-center mt-5 mb-5"
                id="member1"
            >
                <div class="title mb-5">
                <h2>Member 2</h2>
                </div>
                <div class="card">
                <div class="card-body">
                    <form action="{{route('createMember', ['id'=>$group->id, 'memberNo'=>2])}}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="row mb-3">
                        <label for="name" class="col-sm-3 col-form-label"
                        >Full Name</label
                        >
                        <div class="col-sm-8">
                        <input
                            type="text"
                            class="form-control"
                            name="fullname"
                            id="name"
                            placeholder="Full Name"
                        />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="Email" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-8">
                        <input
                            type="email"
                            class="form-control"
                            name="email"
                            id="Email"
                            placeholder="Email"
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
                            name="WA"
                            id="number"
                            placeholder="Whatsapp Number"
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
                            name="lineId"
                            id="line"
                            placeholder="LINE ID"
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
                            name="github"
                            id="github"
                            placeholder="Github/Gitlab ID"
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
                            name="birthPlace"
                            id="birthplace"
                            placeholder="Birth Place"
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
                            name="birthDate"
                            id="birthdate"
                            placeholder="Birth date"
                            onfocus="(this.type='date')"
                            onblur="if(this.value == '') this.type='text';"
                        />
                        </div>
                    </div>
                    <div class="view d-flex justify-content-around pt-3">
                        <div class="box">
                        <input type="file" name="CV" id="file-1" class="inputfile inputfile-1 addcv" data-multiple-caption="{count} files selected" multiple />
                        <label for="file-1"><span>Add CV</span></label>
                        </div>

                        <div class="box">
                        <input type="file" name="IdCard" id="file-2" class="inputfile inputfile-2 addflazz" data-multiple-caption="{count} files selected" multiple />
                        <label for="file-2"><span>Add Flazz</span></label>
                        </div>
                    </div>
                    <div class="submit d-flex justify-content-center mt-3">
                        <button type="submit" class="btn">Submit</button>
                    </div>
                    </form>
                </div>
                </div>
            </div>
        @endif
      @else
        <div
            class="member after-add-more d-flex flex-column align-items-center mt-5 mb-5"
            id="member1"
        >
        <div class="title mb-5">
          <h2>Member 1</h2>
        </div>
        <div class="card">
          <div class="card-body">
            <form action="{{route('createMember', ['id'=>$group->id, 'memberNo'=>1])}}" method="post" enctype="multipart/form-data">
                @csrf
              <div class="row mb-3">
                <label for="name" class="col-sm-3 col-form-label"
                  >Full Name</label
                >
                <div class="col-sm-8">
                  <input
                    type="text"
                    class="form-control"
                    name="fullname"
                    id="name"
                    placeholder="Full Name"
                  />
                </div>
              </div>

              <div class="row mb-3">
                <label for="Email" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-8">
                  <input
                    type="email"
                    class="form-control"
                    name="email"
                    id="Email"
                    placeholder="Email"
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
                    name="WA"
                    id="number"
                    placeholder="Whatsapp Number"
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
                    name="lineId"
                    id="line"
                    placeholder="LINE ID"
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
                    name="github"
                    id="github"
                    placeholder="Github/Gitlab ID"
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
                    name="birthPlace"
                    id="birthplace"
                    placeholder="Birth Place"
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
                    name="birthDate"
                    id="birthdate"
                    placeholder="Birth date"
                    onfocus="(this.type='date')"
                    onblur="if(this.value == '') this.type='text';"
                  />
                </div>
              </div>
              <div class="view d-flex justify-content-around pt-3">
                <div class="box">
                  <input type="file" name="CV" id="file-1" class="inputfile inputfile-1 addcv" data-multiple-caption="{count} files selected" multiple />
                  <label for="file-1"><span>Add CV</span></label>
                </div>

                <div class="box">
                  <input type="file" name="IdCard" id="file-2" class="inputfile inputfile-2 addflazz" data-multiple-caption="{count} files selected" multiple />
                  <label for="file-2"><span>Add Flazz</span></label>
                </div>
              </div>
              <div class="submit d-flex justify-content-center mt-3">
                <button type="submit" class="btn">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      @endif
      {{-- end member 1 --}}

      {{-- member 2 --}}
      @if(!empty($member2))
        <div
        class="member after-add-more d-flex flex-column align-items-center mt-5 mb-5"
        id="member1"
        >
        <div class="title mb-5">
            <h2>Member 2</h2>
        </div>
        <div class="card">
            <div class="card-body">
            <form action="">
                <div class="row mb-3">
                <label for="name" class="col-sm-3 col-form-label"
                    >Full Name</label
                >
                <div class="col-sm-8">
                    <input
                    type="text"
                    class="form-control"
                    value="{{$member2[0]->fullname}}"
                    id="name"
                    placeholder="Full Name"
                    />
                </div>
                </div>

                <div class="row mb-3">
                <label for="Email" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-8">
                    <input
                    type="email"
                    class="form-control"
                    value="{{$member2[0]->email}}"
                    id="Email"
                    placeholder="Email"
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
                    value="{{$member2[0]->WA}}"
                    id="number"
                    placeholder="Whatsapp Number"
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
                    value="{{$member2[0]->lineId}}"
                    id="line"
                    placeholder="LINE ID"
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
                    value="{{$member2[0]->github}}"
                    id="github"
                    placeholder="Github/Gitlab ID"
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
                    value="{{$member2[0]->birthPlace}}"
                    id="birthplace"
                    placeholder="Birth Place"
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
                    value="{{$member2[0]->birthDate}}"
                    id="birthdate"
                    placeholder="Birth date"
                    onfocus="(this.type='date')"
                    onblur="if(this.value == '') this.type='text';"
                    />
                </div>
                </div>
                {{-- <div class="view d-flex justify-content-around pt-3"> --}}
                {{-- <div class="box">
                    <input type="file" name="file-1[]" id="file-1" class="inputfile inputfile-1 addcv" data-multiple-caption="{count} files selected" multiple />
                    <label for="file-1"><span>Add CV</span></label>
                </div> --}}
                {{-- <div class="box">
                    <input type="file" name="file-2[]" id="file-2" class="inputfile inputfile-2 addflazz" data-multiple-caption="{count} files selected" multiple />
                    <label for="file-2"><span>Add Flazz</span></label>
                </div>
                </div>
                <div class="submit d-flex justify-content-center mt-3">
                <button type="submit" class="btn">Submit</button>
                </div> --}}
                <div class="view d-flex justify-content-around pt-3">
                    <div class="cv">
                      <button
                        type="button"
                        class="btn"
                        data-bs-toggle="modal"
                        data-bs-target="#view2CV"
                      >
                        View CV
                      </button>

                      <div
                        class="modal fade"
                        id="view2CV"
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
                            <img src="{{ asset('storage/'.$member2[0]->CV) }}"  title="CV Image" alt="No data yet">
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
                      data-bs-target="#viewidcard2"
                    >
                      View flazz / ID card
                    </button>

                    <div
                      class="modal fade"
                      id="viewidcard2"
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
                          <img src="{{ asset('storage/'.$member2[0]->IdCard) }}"  title="IdCard Image" alt="No data yet">
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
            </form>
            </div>
        </div>
        </div>

        @if(empty($member3))
            <div
            class="member after-add-more d-flex flex-column align-items-center mt-5 mb-5"
            id="member1"
            >
                <div class="title mb-5">
                <h2>Member 3</h2>
                </div>
                <div class="card">
                <div class="card-body">
                    <form action="{{route('createMember', ['id'=>$group->id, 'memberNo'=>3])}}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="row mb-3">
                        <label for="name" class="col-sm-3 col-form-label"
                        >Full Name</label
                        >
                        <div class="col-sm-8">
                        <input
                            type="text"
                            class="form-control"
                            name="fullname"
                            id="name"
                            placeholder="Full Name"
                        />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="Email" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-8">
                        <input
                            type="email"
                            class="form-control"
                            name="email"
                            id="Email"
                            placeholder="Email"
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
                            name="WA"
                            id="number"
                            placeholder="Whatsapp Number"
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
                            name="lineId"
                            id="line"
                            placeholder="LINE ID"
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
                            name="github"
                            id="github"
                            placeholder="Github/Gitlab ID"
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
                            name="birthPlace"
                            id="birthplace"
                            placeholder="Birth Place"
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
                            name="birthDate"
                            id="birthdate"
                            placeholder="Birth date"
                            onfocus="(this.type='date')"
                            onblur="if(this.value == '') this.type='text';"
                        />
                        </div>
                    </div>
                    <div class="view d-flex justify-content-around pt-3">
                        <div class="box">
                        <input type="file" name="CV" id="file-1" class="inputfile inputfile-1 addcv" data-multiple-caption="{count} files selected" multiple />
                        <label for="file-1"><span>Add CV</span></label>
                        </div>

                        <div class="box">
                        <input type="file" name="IdCard" id="file-2" class="inputfile inputfile-2 addflazz" data-multiple-caption="{count} files selected" multiple />
                        <label for="file-2"><span>Add Flazz</span></label>
                        </div>
                    </div>
                    <div class="submit d-flex justify-content-center mt-3">
                        <button type="submit" class="btn">Submit</button>
                    </div>
                    </form>
                </div>
                </div>
            </div>
        @endif
      @endif
      {{-- end member 2 --}}

      {{-- member 3 --}}
      @if(!empty($member3))
        <div
        class="member after-add-more d-flex flex-column align-items-center mt-5 mb-5"
        id="member1"
        >
        <div class="title mb-5">
            <h2>Member 3</h2>
        </div>
        <div class="card">
            <div class="card-body">
            <form action="">
                <div class="row mb-3">
                <label for="name" class="col-sm-3 col-form-label"
                    >Full Name</label
                >
                <div class="col-sm-8">
                    <input
                    type="text"
                    class="form-control"
                    value="{{$member3[0]->fullname}}"
                    id="name"
                    placeholder="Full Name"
                    />
                </div>
                </div>

                <div class="row mb-3">
                <label for="Email" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-8">
                    <input
                    type="email"
                    class="form-control"
                    value="{{$member3[0]->email}}"
                    id="Email"
                    placeholder="Email"
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
                    value="{{$member3[0]->WA}}"
                    id="number"
                    placeholder="Whatsapp Number"
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
                    value="{{$member3[0]->lineId}}"
                    id="line"
                    placeholder="LINE ID"
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
                    value="{{$member3[0]->github}}"
                    id="github"
                    placeholder="Github/Gitlab ID"
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
                    value="{{$member3[0]->birthPlace}}"
                    id="birthplace"
                    placeholder="Birth Place"
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
                    value="{{$member3[0]->birthDate}}"
                    id="birthdate"
                    placeholder="Birth date"
                    onfocus="(this.type='date')"
                    onblur="if(this.value == '') this.type='text';"
                    />
                </div>
                </div>
                {{-- <div class="view d-flex justify-content-around pt-3"> --}}
                {{-- <div class="box">
                    <input type="file" name="file-1[]" id="file-1" class="inputfile inputfile-1 addcv" data-multiple-caption="{count} files selected" multiple />
                    <label for="file-1"><span>Add CV</span></label>
                </div> --}}
                {{-- <div class="box">
                    <input type="file" name="file-2[]" id="file-2" class="inputfile inputfile-2 addflazz" data-multiple-caption="{count} files selected" multiple />
                    <label for="file-2"><span>Add Flazz</span></label>
                </div>
                </div>
                <div class="submit d-flex justify-content-center mt-3">
                <button type="submit" class="btn">Submit</button>
                </div> --}}
                <div class="view d-flex justify-content-around pt-3">
                    <div class="cv">
                      <button
                        type="button"
                        class="btn"
                        data-bs-toggle="modal"
                        data-bs-target="#viewCV3"
                      >
                        View CV
                      </button>

                      <div
                        class="modal fade"
                        id="viewCV3"
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
                            <img src="{{ asset('storage/'.$member3[0]->CV) }}"  title="CV Image" alt="No data yet">
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
                      data-bs-target="#viewidcard3"
                    >
                      View flazz / ID card
                    </button>

                    <div
                      class="modal fade"
                      id="viewidcard3"
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
                          <img src="{{ asset('storage/'.$member3[0]->IdCard) }}"  title="IdCard Image" alt="No data yet">
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
            </form>
            </div>
        </div>
        </div>
      @endif

      {{-- end member 3 --}}
    </div>
  </form>
</div>
</div>
</div>


    <!-- contact person -->
    <div class="CP" style="margin: 120px;">
      <div class="titlecp mb-5 d-flex justify-content-center">
        <h2>Contact Person</h2>
      </div>
     <div class="content d-flex justify-content-around">
      <div class="right col-4">
        <div class="namecp d-flex justify-content-center mb-3">
          <h4>Devina Kayla</h4>
        </div>
        <div class="linecp d-flex mb-3">
          <img src="/assets/Line.png" alt="line icon">
          <h4 class="ms-4">davinakayla13</h4>
        </div>
        <div class="wacp d-flex">
          <img src="/assets/waa.jpg" style="height: 35px;" alt="wa icon">
          <h4 class="ms-4">08977977740</h4>
        </div>
      </div>
      <div class="left col-4">
        <div class="namecp d-flex justify-content-center mb-3">
          <h4>Carina Prasetia</h4>
        </div>
        <div class="linecp d-flex mb-3">
          <img src="/assets/Line.png" alt="line icon">
          <h4 class="ms-4">carinaprasetia</h4>
        </div>
        <div class="wacp d-flex">
          <img src="/assets/waa.jpg" style="height: 35px;" alt="wa icon">
          <h4 class="ms-4">085891017100</h4>
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
    <script>
      var inputs = document.querySelectorAll(".addcv");
      Array.prototype.forEach.call(inputs, function (input) {
        var label = input.nextElementSibling,
          labelVal = label.innerHTML;

        input.addEventListener("change", function (e) {
          var fileName = "";
          if (this.files && this.files.length > 1)
            fileName = (
              this.getAttribute("data-multiple-caption") || ""
            ).replace("{count}", this.files.length);
          else fileName = e.target.value.split("\\").pop();

          if (fileName) label.querySelector("span").innerHTML = fileName;
          else label.innerHTML = labelVal;
        });
      });
      // aaaaa
      var inputs = document.querySelectorAll(".addflazz");
      Array.prototype.forEach.call(inputs, function (input) {
        var label = input.nextElementSibling,
          labelVal = label.innerHTML;

        input.addEventListener("change", function (e) {
          var fileName = "";
          if (this.files && this.files.length > 1)
            fileName = (
              this.getAttribute("data-multiple-caption") || ""
            ).replace("{count1}", this.files.length);
          else fileName = e.target.value.split("\\").pop();

          if (fileName) label.querySelector("span").innerHTML = fileName;
          else label.innerHTML = labelVal;
        });
      });
      // +++++
      $(document).ready(function () {
        $("body").on("click", ".add-more", function () {
          var html = $(".after-add-more").first().clone();

          $(".after-add-more").last().after(html);

          var num = $(".after-add.more").length;
          if (num > 3) {
            $("i").append($html);
          }
        });
      });
    </script>
    <script></script>
  </body>
</html>
