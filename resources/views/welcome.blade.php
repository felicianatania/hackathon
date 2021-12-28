<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hackathon 5.0</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>
<body>
    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <span>
                    <i class="fab fa-hackerrank"></i>
                </span>
              </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link {{ url('/#home') ? 'active' : '' }}" aria-current="page" href="#home">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ url('/#about') ? 'active' : '' }}" href="#about">ABOUT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ url('/#prize') ? 'active' : '' }}" href="#prize">CHAMPION PRIZES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " {{ url('/#timelineSection') ? 'active' : '' }} href="#timelineSection">TIMELINE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ url('/#mentorAndJury') ? 'active' : '' }}" href="#mentorAndJury">MENTOR & JURY</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ url('/#') ? 'active' : '' }}" href="#">FAQ</a>
              </li>
            </ul>
          </div>
          <form method="get" action="/login">
            <button class="login" type="submit">
                <span><i class="fas fa-sign-in-alt"></i></span> Login
              </button>
        </form>
        </div>
    </nav>

    <!-- Home -->
    <section class="home" id="home">
        <img src="assets/Sphere.png" alt="" class="sphere" id="sphere1">
        <img src="assets/Sphere.png" alt="" class="sphere" id="sphere2">
        <img src="assets/Sphere.png" alt="" class="sphere" id="sphere3">
        <img src="assets/Vector 1.png" alt="">
        <div class="container">

            <h1>HACKATHON</h1>
            <h2>5.0</h2>
            <h3>Fuse Your Ideas, Compact Into Code</h3>
        </div>

        <div class="videoRecap">
            <div class="recapContainer">
                <div class="text">
                    <h1>Video Recap</h1>
                    <p>Watch the biggest annual technology event held by Bina Nusantara Club (BNCC), <span>TechnoScape 2021</span>.</p>
                </div>
                <div class="vid">
                    <video controls>
                        <source src="assets/video.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section class="aboutUs" id="about">
        <!-- About Hackthon -->
        <div class="aboutHack">
            <h1>About Hackthon 5.0</h1>
            <div class="container">
                <div class="left">
                    <p><span>Hackathon 5.0</span> is a 48-hour online coding competition where each team competes to create innovative applications or websites that could solve problems. This year is the 5th time Binus Computer Club (BNCC) held a Hackathon event. Throughout the years, Hackathon has produced many innovative ideas and become the main event of TechnoScape.</p>
                    <form method="get" action="/register">
                    <div class="buttons">
                        <button>Register</button>
                       <a href="https://drive.google.com/file/d/15e9f_CZXtfw1x2ntNwXqm8qsympX6nis/view?usp=sharing" target="_blank" download><button>Download Guidebook</button></a>
                    </div>
                </form>
                </div>
                <div class="right">
                    <img src="assets/laptop.png" alt="laptop">
                </div>
            </div>
        </div>
        <!-- Join Us -->
        <div class="joinUs">
            <div class="header">
                <h1>Join us!</h1>
                <h2>You will get all of these benefits.</h2>
            </div>
            <!-- carousel -->
            <div class="container">
                <input type="radio" name="slider" id="item-1" checked>
                <input type="radio" name="slider" id="item-2">
                <input type="radio" name="slider" id="item-3">
              <div class="cards">
                  <label class="card" for="item-1" id="benefit-1">
                      <div class="cardImage" id="cardImage1">
                          <img src="assets/network.png" >
                      </div>
                      <div class="cardText">
                        <h1>Increase Networking</h1>
                        <p>Participants will have the opportunity to interact with other participants, mentors, and also judges of Hackathon 5.0.</p>
                      </div>
                  </label>
                  <label class="card" for="item-2" id="benefit-2">
                      <div class="cardImage" id="cardImage2">
                      </div>
                      <div class="cardText">
                        <h1>Mentoring With Experts</h1>
                        <p>Participants will be mentored by IT experts to discuss business, design, and technology topics. The mentors will give feedback on your product.</p>
                      </div>
                  </label>
                  <label class="card" for="item-3" id="benefit-3">
                      <div class="cardImage" id="cardImage3">
                      </div>
                      <div class="cardText">
                        <h1>Add Value to Your CV</h1>
                        <p>Hackathon 5.0 will increase your CV because there are lots of experiences that you can gain in this competitive place.</p>
                      </div>
                  </label>
              </div>
            </div>
        </div>
    </section>


    <!-- Champion Prized -->
    <section class="prize" id="prize">
        <div class="container">
            <h1>Champion Prizes</h1>
            <div class="cardGroup">
                <div class="card">
                    <i class="fas fa-trophy" id="firstPlace"></i>
                    <h1>First Rank</h1>
                    <span class="rank">1</span>
                    <div class="rewards">
                        <i class="fas fa-money-bill-wave"></i> IDR 4.000.000 <br>
                        <i class="fas fa-gift"></i>  Merchandise <br>
                        <i class="fas fa-certificate"></i> E-Certificate

                    </div>
                </div>
                <div class="card">
                    <i class="fas fa-trophy" id="secondPlace"></i>
                    <h1>Second Rank</h1>
                    <span class="rank">2</span>
                    <div class="rewards">
                        <i class="fas fa-money-bill-wave"></i> IDR 2.000.000 <br>
                        <i class="fas fa-gift"></i>  Merchandise <br>
                        <i class="fas fa-certificate"></i> E-Certificate
                    </div>
                </div>
                <div class="card">
                    <i class="fas fa-trophy" id="thirdPlace"></i>
                    <h1>Third Rank</h1>
                    <span class="rank">3</span>
                    <div class="rewards">
                        <i class="fas fa-money-bill-wave"></i> IDR 1.000.000 <br>
                        <i class="fas fa-gift"></i>  Merchandise <br>
                        <i class="fas fa-certificate"></i> E-Certificate
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline -->
    <section class="timeline" id="timelineSection">
        <div class="timeContainer">
            <h1>Our Timeline</h1>
            <div class="graphics">
                <div class="graphic" id="graphic1">
                    <img src="assets/platform1.png" alt="platform" class="timelineImg">
                    <div class="text">
                        <h1>Open Registration</h1>
                        <p>May, 31 2022</p>
                    </div>
                </div>
                <div class="graphic" id="graphic2">
                    <img src="assets/platform2.png" alt="platform" class="timelineImg">
                    <div class="text">
                        <h1>Close Registration</h1>
                        <p>June 25, 2022</p>
                    </div>
                </div>
                <div class="graphic" id="graphic3">
                    <img src="assets/platform3.png" alt="platform" class="timelineImg">
                    <div class="text">
                        <h1>Technical Meeting</h1>
                        <p>June 29, 2022
                            <br>
                            09.20 - 11.00
                        </p>
                    </div>
                </div>
                <div class="graphic" id="graphic4">
                    <img src="assets/platform4.png" alt="platform" class="timelineImg">
                    <div class="text">
                        <h1>Competition Days</h1>
                        <p>July 3 - 5, 2022</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- mentor and jury -->
    <section class="mentorJury" id="mentorAndJury">
        <div class="mentor">
            <h1>Our Mentors</h1>
        </div>
        <div class="jury">
            <h1>Our Jury</h1>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7c925acf6e.js" crossorigin="anonymous"></script>
</body>
</html>
