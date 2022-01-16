<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hackathon 5.0</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/timeline.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ URL::asset('assets/favicon.ico') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-md">
            <div>
                <a class="navbar-brand" href="#"><span><i class="fab fa-hackerrank"></i></span></a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{url('/')}}">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/dashboard">DASHBOARD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('getGroupByIdPayment')}}">PAYMENT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{url('timeline')}}">TIMELINE</a>
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

    <section class="timeline">
        <div class="container">
            <div class="timelineItem">
                <div class="timelineImg">
                    <img src="assets/timeline/timeline1.png" alt="timeline1">
                </div>
                <div class="timelineDesc">
                    <h1>Open Registration</h1>
                    <p>May 31, 2022</p>
                </div>
                <div class="timelineLink">
                </div>
            </div>
            <div class="timelineItem">
                <div class="timelineImg">
                    <img src="assets/timeline/timeline2.png" alt="timeline2">
                </div>
                <div class="timelineDesc">
                    <h1>Close Registration</h1>
                    <p>June 25, 2022</p>
                </div>
                <div class="timelineLink">
                </div>
            </div>
            <div class="timelineItem">
                <div class="timelineImg">
                    <img src="assets/timeline/timeline3.png" alt="timeline3">
                </div>
                <div class="timelineDesc">
                    <h1>Technical Meeting</h1>
                    <p>June 29, 2022<br>09.20 - 11.00 </p>
                </div>
                <div class="timelineLink">
                    <a href="#"><button class="link">Link</button></a>
                </div>
            </div>
            <div class="timelineItem">
                <div class="timelineImg">
                    <img src="assets/timeline/timeline4.png" alt="timeline4">
                </div>
                <div class="timelineDesc">
                    <h1>Competition Day</h1>
                    <p>July 3 - 5, 2022<br>09.20 - 11.00</p>
                </div>
                <div class="timelineLink">
                    <a href="#"><button class="link">Link</button></a>
                </div>
            </div>

        </div>
    </section>

    <script src="{{ URL::asset('js/timeline.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7c925acf6e.js" crossorigin="anonymous"></script>
</body>

</html>
