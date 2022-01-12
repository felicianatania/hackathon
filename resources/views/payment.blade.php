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
    <link rel="stylesheet" href="{{ URL::asset('css/payment.css') }}">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
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
                        <a class="nav-link" aria-current="page" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">DASHBOARD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">PAYMENT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">TIMELINE</a>
                    </li>
                </ul>
            </div>
            <!-- <button type="button" class="logout"></button> -->
            <a class="button logout" href="../login.html" role="button"><span><i class="fas fa-sign-in-alt"></i></span>
                LOGOUT</a>
        </div>
    </nav>

    <div class="container">
        <div class="steps">
            <img src="assets/payment/steps.png" alt="steps">
        </div>
        <div class="desc">
            <div class="regisPeriod" id="step">
                <h1>Registration Period</h1>
                <img src="assets/payment/regisPeriod.png" alt="registrationPeriod">
                <div class="earlyBird">
                    <h1 id="headline">Early Bird Offer Ends In</h1>
                    <div id="countdown">
                        <ul>
                            <li><span id="days"></span>days</li>
                            <li><span id="hours"></span>Hours</li>
                            <li><span id="minutes"></span>Minutes</li>
                            <li><span id="seconds"></span>Seconds</li>
                        </ul>
                    </div>
                    <h1 id="headlineEnd">Early Bird Offer Has Ended</h1>
                </div>
            </div>
            <div class="paymentAcc" id="step">
                <h1>Payment of Registration Fee</h1>
                <img src="assets/payment/account.png" alt="payment account">
            </div>
            <div class="upload" id="step">
                <h1>Upload Payment Proof</h1>
                <form action="{{route('createPayment', ['id'=>$groupId])}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="drag-area">
                        <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                        <header>Drag & Drop to Upload File</header>
                        <span class="fileDesc">File should be in .PNG or .JPG or .JPEG format</span>
                        <span>OR</span>
                        <button>Browse File</button>
                        <input type="file" id="payment" name='payment' hidden required>
                    </div>

                    <button type="submit">SUBMIT</button>
                </form>

            </div>
            <div class="verification" id="step">
                <h1>Payment Verification Conditions</h1>
                <div class="verify1" id="verifyCondition">
                    <div class="left">
                        1
                    </div>
                    <div class="right">
                        Make sure the amount paid is in accordance with the price stated at the time of payment.
                        <br><br>
                        Early Bird (May 31 - June 10, 2022) <br>
                        Binusian : IDR 85.000 <br>
                        Non-Binusian : IDR 105.000
                        <br><br>
                        Regular (June 11 - June 25, 2022) <br>
                        Binusian : IDR 100.000 <br>
                        Non-Binusian : IDR 120.000
                    </div>
                </div>
                <div class="verify2" id="verifyCondition">
                    <div class="left">
                        2
                    </div>
                    <div class="right">
                        Make sure the nominal and the destination account number are in accordance with what is stated
                        in the payment
                        information (2nd point).
                    </div>
                </div>
                <div class="verify3" id="verifyCondition">
                    <div class="left">
                        3
                    </div>
                    <div class="right">
                        Proof of payment will be verified within 2x24 hours after proof of payment is uploaded.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ URL::asset('js/payment.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7c925acf6e.js" crossorigin="anonymous"></script>
</body>

</html>
