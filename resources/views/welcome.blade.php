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
    <link rel="icon" type="image/x-icon" href="{{ URL::asset('assets/favicon.ico') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>
<body>
    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="navigationBar">
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
                <a class="nav-link active" aria-current="page" href="#home">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">ABOUT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#prize">CHAMPION PRIZES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#timelineSection">TIMELINE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#mentorAndJury">MENTOR & JURY</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#faqSec">FAQ</a>
              </li>
            </ul>
          </div>
          @guest
          @csrf
            @if (Route::has('login'))

                <form method="get" action="/login">
                    <button class="login">
                        <span><i class="fas fa-sign-in-alt"></i></span> Login
                    </button>
                </form>
            @endif
          @else
            <form method="get" action="\dashboard">
                <button class="login">
                    DASHBOARD
                </button>
            </form>
        @endguest
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
                    <div class="buttons">
                    <form method="get" action="\register">
                        <button>Register</button>
                    </form>
                       <a href="https://drive.google.com/file/d/15e9f_CZXtfw1x2ntNwXqm8qsympX6nis/view?usp=sharing" target="_blank" download><button>Download Guidebook</button></a>
                    </div>
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


    <!-- Champion Prizes -->
    <section class="prize" id="prize">
        <div class="container">
            <h1>Champion Prizes</h1>
            <div class="cardGroup">
                <div class="card" id="firstPlace">
                    <img src="assets/trophy1.png" alt="trophy">
                    <h1>First Rank</h1>
                    <div class="rewards">
                        <i class="fas fa-money-bill-wave"></i> IDR 4.000.000 <br>
                        <i class="fas fa-gift"></i>  Merchandise <br>
                        <i class="fas fa-certificate"></i> E-Certificate

                    </div>
                </div>
                <div class="card" id="secondPlace">
                    <img src="assets/trophy2.png" alt="trophy">
                    <h1>Second Rank</h1>
                    <div class="rewards">
                        <i class="fas fa-money-bill-wave"></i> IDR 2.000.000 <br>
                        <i class="fas fa-gift"></i>  Merchandise <br>
                        <i class="fas fa-certificate"></i> E-Certificate
                    </div>
                </div>
                <div class="card" id="thirdPlace">
                    <img src="assets/trophy3.png" alt="trophy">
                    <h1>Third Rank</h1>
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
        <!-- Mentor -->
        <div class="mentor">
            <h1>Our Mentors</h1>
            <input type="radio" name="Mentorposition" checked />
            <input type="radio" name="Mentorposition" />
            <input type="radio" name="Mentorposition" />
            <input type="radio" name="Mentorposition" />
            <input type="radio" name="Mentorposition" />
            <input type="radio" name="Mentorposition" />
            <input type="radio" name="Mentorposition" />
            <input type="radio" name="Mentorposition" />
            <input type="radio" name="Mentorposition" />
            <div id="carousel">
              <div class="item">
                  <h1>Design</h1>
                  <img src="assets/mentor1.jpg" alt="" class="mentorImg">
                  <h2>John Doe</h2>
                  <p>UI/UX Designer <br>
                    Ticket.com</p>
              </div>
              <div class="item">
                  <h1>Design</h1>
                  <img src="assets/mentor1.jpg" alt="" class="mentorImg">
                  <h2>John Doe</h2>
                  <p>Product Design Lead I <br>
                    Ticket.com</p>
              </div>
              <div class="item">
                  <h1>Design</h1>
                  <img src="assets/mentor1.jpg" alt="" class="mentorImg">
                  <h2>John Doe</h2>
                  <p>Product Design Lead I <br>
                    Ticket.com</p>
              </div>
              <div class="item">
                  <h1>Technology</h1>
                  <img src="assets/mentor2.jpg" alt="" class="mentorImg">
                  <h2>Jane Doe</h2>
                  <p>Product Design Lead I <br>
                    Ticket.com</p>
              </div>
              <div class="item">
                  <h1>Technology</h1>
                  <img src="assets/mentor2.jpg" alt="" class="mentorImg">
                  <h2>Jane Doe</h2>
                  <p>Product Design Lead I <br>
                    Ticket.com</p>
              </div>
              <div class="item">
                  <h1>Technology</h1>
                  <img src="assets/mentor2.jpg" alt="" class="mentorImg">
                  <h2>Jane Doe</h2>
                  <p>Product Design Lead I <br>
                    Ticket.com</p>
              </div>
              <div class="item">
                  <h1>Business</h1>
                  <img src="assets/mentor3.jpg" alt="" class="mentorImg">
                  <h2>John Doe</h2>
                  <p>Product Design Lead I <br>
                    Ticket.com</p>
              </div>
              <div class="item">
                  <h1>Business</h1>
                  <img src="assets/mentor3.jpg" alt="" class="mentorImg">
                  <h2>John Doe</h2>
                  <p>Product Design Lead I <br>
                    Ticket.com</p>
              </div>
              <div class="item">
                  <h1>Business</h1>
                  <img src="assets/mentor3.jpg" alt="" class="mentorImg">
                  <h2>John Doe</h2>
                  <p>Product Design Lead I <br>
                    Ticket.com</p>
              </div>
            </div>
        </div>

        <!-- Jury -->
        <div class="jury">
            <h1>Our Jury</h1>
            <input type="radio" name="Juryposition" checked />
            <input type="radio" name="Juryposition" />
            <input type="radio" name="Juryposition" />
            <div id="Jurycarousel">
                <div class="item">
                    <img src="assets/jury1.jpg" alt="" class="juryImg">
                    <h2>Jane Doe</h2>
                    <p>UI/UX Designer <br>
                      Ticket.com</p>
                </div>
                <div class="item">
                    <img src="assets/jury2.jpg" alt="" class="juryImg">
                    <h2>Susan Doe</h2>
                    <p>Product Design Lead I <br>
                      Ticket.com</p>
                </div>
                <div class="item">
                    <img src="assets/jury3.jpg" alt="" class="juryImg">
                    <h2>John Doe</h2>
                    <p>Product Design Lead I <br>
                      Ticket.com</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="faq" id="faqSec">
        <h1>Frequently Asked Questions</h1>
        <div class="faqContainer">
            <div class="faqImg"></div>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            What are the requirements for participation?
                        </button>
                      </h2>
                      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque ad delectus eveniet placeat debitis facere autem soluta provident in similique consequuntur officia reprehenderit tempora, reiciendis aliquid, mollitia eligendi molestiae iusto!</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Is Hackathon 5.0 free of charge?
                        </button>
                      </h2>
                      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque et quis quam sint a, iusto placeat dignissimos nobis nulla fugit perferendis numquam, reiciendis non dolorum laborum quae id ullam voluptates.</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            When is the registration deadline?
                        </button>
                      </h2>
                      <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ratione temporibus voluptatibus, cupiditate quo consequatur suscipit non repellat id enim recusandae aliquam placeat? Repudiandae blanditiis temporibus iure nihil veniam eos!</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                            Can I join more than one team?
                        </button>
                      </h2>
                      <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi excepturi, cumque placeat sapiente modi culpa, perferendis, quis fugiat architecto reprehenderit magni asperiores maiores. Harum nulla velit reprehenderit maxime voluptatibus eligendi!</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                            If I don’t have either basic coding or design, may I participate?
                        </button>
                      </h2>
                      <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos optio placeat sed officiis suscipit distinctio, aliquam obcaecati cumque at eveniet mollitia, esse possimus molestiae doloribus cupiditate. Adipisci odit delectus cumque!</div>
                      </div>
                    </div>
                  </div>
                </div>
        </div>
    </section>


   <!-- Sponsors -->
   <section class="sponsor">
    <h1>Our Sponsors</h1>
    <div class="platinum">
        <h2>Platinum Sponsors</h2>
        <div class="sponsorLogo">
                <img src="assets/platinum1.svg" alt="logo">
        </div>
    </div>
    <div class="gold">
        <h2>Gold Sponsors</h2>
        <div class="sponsorLogo">
            <img src="assets/gold1.svg" alt="logo">
            <img src="assets/gold2.svg" alt="logo">
            <img src="assets/gold3.svg" alt="logo">
         </div>
    </div>
    <div class="silver">
        <h2>Silver Sponsors</h2>
        <div class="sponsorLogo">
            <img src="assets/silver1.svg" alt="logo">
            <img src="assets/silver2.svg" alt="logo">
        </div>
    </div>
</section>

<!-- Media Partner -->
<section class="medPart">
    <h1>Media Partner</h1>
    <div class="slider" id="topSlider">
        <div class="slide-track">
            <div class="slide">
                <img src="assets/medpart1.svg" height="100" width="250" alt="media partner" />
            </div>
            <div class="slide">
                <img src="assets/medpart2.svg" height="100" width="250" alt="media partner" />
            </div>
            <div class="slide">
                <img src="assets/medpart3.svg" height="100" width="250" alt="media partner" />
            </div>
            <div class="slide">
                <img src="assets/medpart4.svg" height="100" width="250" alt="media partner" />
            </div>
            <div class="slide">
                <img src="assets/medpart5.svg" height="100" width="250" alt="media partner" />
            </div>
            <div class="slide">
                <img src="assets/medpart1.svg" height="100" width="250" alt="media partner" />
            </div>
            <div class="slide">
                <img src="assets/medpart2.svg" height="100" width="250" alt="media partner" />
            </div>
            <div class="slide">
                <img src="assets/medpart3.svg" height="100" width="250" alt="media partner" />
            </div>
            <div class="slide">
                <img src="assets/medpart4.svg" height="100" width="250" alt="media partner" />
            </div>
            <div class="slide">
                <img src="assets/medpart5.svg" height="100" width="250" alt="media partner" />
            </div>
            <div class="slide">
                <img src="assets/medpart1.svg" height="100" width="250" alt="media partner" />
            </div>
            <div class="slide">
                <img src="assets/medpart2.svg" height="100" width="250" alt="media partner" />
            </div>
            <div class="slide">
                <img src="assets/medpart3.svg" height="100" width="250" alt="media partner" />
            </div>
            <div class="slide">
                <img src="assets/medpart4.svg" height="100" width="250" alt="media partner" />
            </div>
            <div class="slide">
                <img src="assets/medpart5.svg" height="100" width="250" alt="media partner" />
            </div>
        </div>
    </div>
    <div class="slider" id="botSlider">
        <div class="slide-track">
            <div class="slide">
                <img src="assets/medpart6.svg" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="assets/medpart7.svg" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="assets/medpart8.svg" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="assets/medpart9.svg" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="assets/medpart10.svg" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="assets/medpart6.svg" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="assets/medpart7.svg" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="assets/medpart8.svg" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="assets/medpart9.svg" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="assets/medpart10.svg" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="assets/medpart6.svg" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="assets/medpart7.svg" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="assets/medpart8.svg" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="assets/medpart9.svg" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="assets/medpart10.svg" height="100" width="250" alt="" />
            </div>
        </div>
    </div>
</section>

<!-- Other Events -->
<section class="otherEvents">
    <h1>Other Events</h1>
    <div class="virtualConference">
        <img src="assets/virtualConference.png" alt="Virtual Conference">
        <h2>Virtual Conference</h2>
        <p><span>Virtual Conference</span> is a webinar and talk show series to educate the participants about business, design, and technology for 3 days in a virtual space. There will be inspiring speakers who are experts in their fields so that participants can implement this knowledge in the future.</p>
        <button>Register Virtual Conference</button>
    </div>
    <img src="" alt="">
    <img src="assets/developerWorkshop.png" alt="Developer Workshop">
    <h2>Developer Workshop</h2>
    <p><span>Developer Workshop</span> is an online workshop series that discusses intermediate technology with experienced trainers for 4 days. This event will be the place for participants to learn and achieve their dream career as a developer. Participants will gain many insights and experiences regarding developer topics from trainers who are experts in IT fields. Thus, you will be one step closer to reach your remarkable career.</p>
    <button>Register Developer Workshop</button>
</section>

<!-- Footer -->
<footer >
    <div class="containerTop">
        <div class="topLeft">
            <h1>Contact Us  </h1>
            <img src="assets/contactUs.png" alt="">
            <h2>Our Social Media</h2>
            <div class="socialContainer">
                <a href="mailto:rnd@bncc.net">
                    <div class="email">
                        <span class="far fa-envelope"></span>
                    </div>
                </a>
                <a href="https://www.facebook.com">
                    <div class="facebook">
                        <span class="fab fa-facebook-f"></span>
                    </div>
                </a>
                <a href="https://www.twitter.com">
                    <div class="twitter">
                        <span class="fab fa-twitter"></span>
                    </div>
                </a>
                <a href="https://www.linkedin.com">
                    <div class="linkedin">
                        <span class="fab fa-linkedin-in"></span>
                    </div>
                </a>
                <a href="https://www.instagram.com">
                    <div class="instagram">
                        <span class="fab fa-instagram"></span>
                    </div>
                </a>
            </div>
        </div>
        <div class="topRight">
            <form method="POST" action="https://formspree.io/f/mzbozjjv">
                <label for="contactUsName">Name</label>
                <input type="text" name="name" id="contactUsName" required>

                <label for="contactUsEmail">Email</label>
                <input type="email" name="email" id="contactUsName" required>

                <label for="contactUsSubject">Subject</label>
                <input type="text" name="subject" id="contactUsSubject" required>
                
                <label for="contactUsMessage">Message</label>
                <textarea name="message" id="contactUsMessage" cols="30" rows="1" required></textarea>
                <button type="submit">Send</button>
            </form>
        </div>
    </div>
    <div class="containerBot">
        <div class="line"></div>
        <div class="text">
            <span>Powered and Organized by Kelompok 5 Final Project TPM</span>
            <span><a href="">Privacy Policy & Terms of Service</a></span>
        </div>
    </div>


</footer>

<script src="{{ URL::asset('js/landingPage.js') }}" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/7c925acf6e.js" crossorigin="anonymous"></script>
</body>
</html>
