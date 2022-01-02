<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Registration</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/registration.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ URL::asset('assets/favicon.ico') }}">
</head>
<body>
    <div class="container">
        <div class="left">
            <h1>Register
                Hackathon
                5.0</h1>
        </div>
        <div class="right">
            <form method="POST" action="{{ route('register') }}" name="inputForm" enctype="multipart/form-data">
                @csrf

                <!-- STEP 1 -->
                <div id="form1">
                    <div class="info">
                        Step 1 of 3<br>
                        Group's Information <br>
                        <div class="nav">
                            <div class="nav1"></div>
                            <div class="nav2"></div>
                            <div class="nav3"></div>
                        </div>
                    </div>
                        <label for="groupInput">Group Name</label>
                        <div class="groupInput" id="groupInputGroup">
                            <i class="fas fa-users"></i>
                            <input type="text" id="groupName" name="groupName" required value="{{ old('groupName') }}" placeholder="please enter your group name" oninput="validateGroup()" required>
                        </div>
                        <label for="password">Password</label>
                        <div class="groupInput" id="groupInputPass">
                            <i class="fas fa-key"></i>
                            <input type="password" id="password" name="password" placeholder=" please enter your password" oninput="validatePass(); confirmPass()" required>
                        </div>
                        <div class="validation" id="validationPass">Your password must be at least 8 characters long, consisting of uppercase letters, lowercase letter, number, and symbol</div>
                        <label for="confirmPassword">Confirm Password</label>
                        <div class="groupInput" id="groupInputConfirm">
                            <i class="fas fa-key"></i>
                            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="please confirm your password" oninput="confirmPass()" required>
                        </div>
                        <div class="validation" id="confirmationPass">Your password confirmation does not match with your password</div>
                        <label for="status" >Status</label>
                        <div class="statusForm" id="groupInputStatus">
                            <input type="radio" id="binusian" name="status" value="1" onclick="validateStatus()" required>
                            <label for="binusian">BINUSIAN</label>
                            <input type="radio" id="nonBinusian" name="status" value="2" onclick="validateStatus()" required>
                            <label for="binusian">Non-BINUSIAN</label>
                        </div>

                        <div class="buttons">
                            <button onclick="validateForm1()" type="button">Next</button>
                        </div>

                </div>

                <!-- STEP 2 -->
                <div id="form2">
                    <div class="info">
                        Step 2 of 3<br>
                        Leader's Information <br>
                        <div class="nav">
                            <div class="nav1"></div>
                            <div class="nav2"></div>
                            <div class="nav3"></div>
                        </div>
                    </div>
                        <label for="name">Full Name</label>
                        <div class="groupInput" id="groupInputName">
                            <i class="fas fa-user"></i>
                            <input type="text" id="name" name="fullname" required value="{{ old('fullname') }}" placeholder="please enter your full name" oninput="validateName()" required>
                        </div>
                        <label for="email">Email</label>
                        <div class="groupInput" id="groupInputEmail">
                            <i class="fas fa-envelope"></i>
                            <input type="email" id="email" name="email" required value="{{ old('email') }}" placeholder=" please enter your email" oninput="validateEmail()" required>
                        </div>
                        <div class="validation" id="validationEmail">Invalid email address</div>
                        <label for="whatsapp">Whatsapp Number</label>
                        <div class="groupInput" id="groupInputWhatsapp">
                            <i class="fab fa-whatsapp"></i>
                            <input type="text" id="whatsapp" name="WA" required value="{{ old('WA') }}" placeholder="please enter your whatsapp number" oninput="validateWhatsapp()" required>
                        </div>
                        <div class="validation" id="validationWhatsapp">Your whatsapp number must only contain numbers and must be 9 digits long</div>
                        <label for="line">LINE ID</label>
                        <div class="groupInput" id="groupInputLine">
                            <i class="fab fa-line"></i>
                            <input type="text" id="line" name="lineId" required value="{{ old('lineId') }}" placeholder="please enter your LINE ID" oninput="validateLine()" required>
                        </div>
                        <label for="github">Github/Gitlab ID</label>
                        <div class="groupInput" id="groupInputGithub">
                            <i class="fab fa-github"></i>
                            <input type="text" id="github" name="github" required value="{{ old('github') }}" placeholder="please enter your github/gitlab ID" oninput="validateGithub()" required>
                        </div>

                        <div class="buttons">
                            <button onclick="back(-1)" type="button">Back</button>
                            <button onclick="validateForm2()" type="button">Next</button>
                        </div>
                </div>

                <!-- STEP 3 -->
                <div id="form3">
                    <div class="info">
                        Step 3 of 3<br>
                        Leader's Information <br>
                        <div class="nav">
                            <div class="nav1"></div>
                            <div class="nav2"></div>
                            <div class="nav3"></div>
                        </div>
                    </div>
                    <label for="place">Birth Place</label>
                    <div class="groupInput" id="groupInputPlace">
                        <i class="fas fa-map-marker-alt"></i>
                        <select id="place" oninput="validatePlace()" required>
                                <option name="birthPlace" value=""></option>
                                <option name="birthPlace" value="Afganistan">Afghanistan</option>
                                <option name="birthPlace" value="Albania">Albania</option>
                                <option name="birthPlace" value="Algeria">Algeria</option>
                                <option name="birthPlace" value="American Samoa">American Samoa</option>
                                <option name="birthPlace" value="Andorra">Andorra</option>
                                <option name="birthPlace" value="Angola">Angola</option>
                                <option name="birthPlace" value="Anguilla">Anguilla</option>
                                <option name="birthPlace" value="Antigua & Barbuda">Antigua & Barbuda</option>
                                <option name="birthPlace" value="Argentina">Argentina</option>
                                <option name="birthPlace" value="Armenia">Armenia</option>
                                <option name="birthPlace" value="Aruba">Aruba</option>
                                <option name="birthPlace" value="Australia">Australia</option>
                                <option name="birthPlace" value="Austria">Austria</option>
                                <option name="birthPlace" value="Azerbaijan">Azerbaijan</option>
                                <option name="birthPlace" value="Bahamas">Bahamas</option>
                                <option name="birthPlace" value="Bahrain">Bahrain</option>
                                <option name="birthPlace" value="Bangladesh">Bangladesh</option>
                                <option name="birthPlace" value="Barbados">Barbados</option>
                                <option name="birthPlace" value="Belarus">Belarus</option>
                                <option name="birthPlace" value="Belgium">Belgium</option>
                                <option name="birthPlace" value="Belize">Belize</option>
                                <option name="birthPlace" value="Benin">Benin</option>
                                <option name="birthPlace" value="Bermuda">Bermuda</option>
                                <option name="birthPlace" value="Bhutan">Bhutan</option>
                                <option name="birthPlace" value="Bolivia">Bolivia</option>
                                <option name="birthPlace" value="Bonaire">Bonaire</option>
                                <option name="birthPlace" value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                <option name="birthPlace" value="Botswana">Botswana</option>
                                <option name="birthPlace"value="Brazil">Brazil</option>
                                <option name="birthPlace" value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                <option name="birthPlace" value="Brunei">Brunei</option>
                                <option name="birthPlace" value="Bulgaria">Bulgaria</option>
                                <option name="birthPlace" value="Burkina Faso">Burkina Faso</option>
                                <option name="birthPlace" value="Burundi">Burundi</option>
                                <option name="birthPlace" value="Cambodia">Cambodia</option>
                                <option name="birthPlace" value="Cameroon">Cameroon</option>
                                <option name="birthPlace" value="Canada">Canada</option>
                                <option name="birthPlace" value="Canary Islands">Canary Islands</option>
                                <option name="birthPlace" value="Cape Verde">Cape Verde</option>
                                <option name="birthPlace" value="Cayman Islands">Cayman Islands</option>
                                <option name="birthPlace" value="Central African Republic">Central African Republic</option>
                                <option name="birthPlace" value="Chad">Chad</option>
                                <option name="birthPlace" value="Channel Islands">Channel Islands</option>
                                <option name="birthPlace" value="Chile">Chile</option>
                                <option name="birthPlace" value="China">China</option>
                                <option name="birthPlace" value="Christmas Island">Christmas Island</option>
                                <option name="birthPlace" value="Cocos Island">Cocos Island</option>
                                <option name="birthPlace" value="Colombia">Colombia</option>
                                <option name="birthPlace" value="Comoros">Comoros</option>
                                <option name="birthPlace" value="Congo">Congo</option>
                                <option name="birthPlace" value="Cook Islands">Cook Islands</option>
                                <option name="birthPlace" value="Costa Rica">Costa Rica</option>
                                <option name="birthPlace" value="Cote DIvoire">Cote DIvoire</option>
                                <option name="birthPlace" value="Croatia">Croatia</option>
                                <option name="birthPlace" value="Cuba">Cuba</option>
                                <option name="birthPlace" value="Curaco">Curacao</option>
                                <option name="birthPlace" value="Cyprus">Cyprus</option>
                                <option name="birthPlace" value="Czech Republic">Czech Republic</option>
                                <option name="birthPlace" value="Denmark">Denmark</option>
                                <option name="birthPlace" value="Djibouti">Djibouti</option>
                                <option name="birthPlace" value="Dominica">Dominica</option>
                                <option name="birthPlace" value="Dominican Republic">Dominican Republic</option>
                                <option name="birthPlace" value="East Timor">East Timor</option>
                                <option name="birthPlace" value="Ecuador">Ecuador</option>
                                <option name="birthPlace" value="Egypt">Egypt</option>
                                <option name="birthPlace" value="El Salvador">El Salvador</option>
                                <option name="birthPlace" value="Equatorial Guinea">Equatorial Guinea</option>
                                <option name="birthPlace" value="Eritrea">Eritrea</option>
                                <option name="birthPlace" value="Estonia">Estonia</option>
                                <option name="birthPlace" value="Ethiopia">Ethiopia</option>
                                <option name="birthPlace" value="Falkland Islands">Falkland Islands</option>
                                <option name="birthPlace" value="Faroe Islands">Faroe Islands</option>
                                <option name="birthPlace"value="Fiji">Fiji</option>
                                <option name="birthPlace"value="Finland">Finland</option>
                                <option name="birthPlace"value="France">France</option>
                                <option name="birthPlace"value="French Guiana">French Guiana</option>
                                <option name="birthPlace"value="French Polynesia">French Polynesia</option>
                                <option name="birthPlace"value="French Southern Ter">French Southern Ter</option>
                                <option name="birthPlace"value="Gabon">Gabon</option>
                                <option name="birthPlace"value="Gambia">Gambia</option>
                                <option name="birthPlace"value="Georgia">Georgia</option>
                                <option name="birthPlace"value="Germany">Germany</option>
                                <option name="birthPlace"value="Ghana">Ghana</option>
                                <option name="birthPlace"value="Gibraltar">Gibraltar</option>
                                <option name="birthPlace"value="Great Britain">Great Britain</option>
                                <option name="birthPlace"value="Greece">Greece</option>
                                <option name="birthPlace"value="Greenland">Greenland</option>
                                <option name="birthPlace"value="Grenada">Grenada</option>
                                <option name="birthPlace"value="Guadeloupe">Guadeloupe</option>
                                <option name="birthPlace"value="Guam">Guam</option>
                                <option name="birthPlace"value="Guatemala">Guatemala</option>
                                <option name="birthPlace"value="Guinea">Guinea</option>
                                <option name="birthPlace"value="Guyana">Guyana</option>
                                <option name="birthPlace"value="Haiti">Haiti</option>
                                <option name="birthPlace"value="Hawaii">Hawaii</option>
                                <option name="birthPlace"value="Honduras">Honduras</option>
                                <option name="birthPlace"value="Hong Kong">Hong Kong</option>
                                <option name="birthPlace"value="Hungary">Hungary</option>
                                <option name="birthPlace"value="Iceland">Iceland</option>
                                <option name="birthPlace"value="Indonesia">Indonesia</option>
                                <option name="birthPlace"value="India">India</option>
                                <option name="birthPlace"value="Iran">Iran</option>
                                <option name="birthPlace"value="Iraq">Iraq</option>
                                <option name="birthPlace"value="Ireland">Ireland</option>
                                <option name="birthPlace"value="Isle of Man">Isle of Man</option>
                                <option name="birthPlace"value="Israel">Israel</option>
                                <option name="birthPlace"value="Italy">Italy</option>
                                <option name="birthPlace"value="Jamaica">Jamaica</option>
                                <option name="birthPlace"value="Japan">Japan</option>
                                <option name="birthPlace"value="Jordan">Jordan</option>
                                <option name="birthPlace"value="Kazakhstan">Kazakhstan</option>
                                <option name="birthPlace"value="Kenya">Kenya</option>
                                <option name="birthPlace"value="Kiribati">Kiribati</option>
                                <option name="birthPlace"value="Korea North">Korea North</option>
                                <option name="birthPlace"value="Korea Sout">Korea South</option>
                                <option name="birthPlace"value="Kuwait">Kuwait</option>
                                <option name="birthPlace"value="Kyrgyzstan">Kyrgyzstan</option>
                                <option name="birthPlace"value="Laos">Laos</option>
                                <option name="birthPlace"value="Latvia">Latvia</option>
                                <option name="birthPlace"value="Lebanon">Lebanon</option>
                                <option name="birthPlace"value="Lesotho">Lesotho</option>
                                <option name="birthPlace"value="Liberia">Liberia</option>
                                <option name="birthPlace"value="Libya">Libya</option>
                                <option name="birthPlace"value="Liechtenstein">Liechtenstein</option>
                                <option name="birthPlace"value="Lithuania">Lithuania</option>
                                <option name="birthPlace"value="Luxembourg">Luxembourg</option>
                                <option name="birthPlace"value="Macau">Macau</option>
                                <option name="birthPlace"value="Macedonia">Macedonia</option>
                                <option name="birthPlace"value="Madagascar">Madagascar</option>
                                <option name="birthPlace"value="Malaysia">Malaysia</option>
                                <option name="birthPlace"value="Malawi">Malawi</option>
                                <option name="birthPlace"value="Maldives">Maldives</option>
                                <option name="birthPlace"value="Mali">Mali</option>
                                <option name="birthPlace"value="Malta">Malta</option>
                                <option name="birthPlace"value="Marshall Islands">Marshall Islands</option>
                                <option name="birthPlace"value="Martinique">Martinique</option>
                                <option name="birthPlace"value="Mauritania">Mauritania</option>
                                <option name="birthPlace"value="Mauritius">Mauritius</option>
                                <option name="birthPlace"value="Mayotte">Mayotte</option>
                                <option name="birthPlace"value="Mexico">Mexico</option>
                                <option name="birthPlace"value="Midway Islands">Midway Islands</option>
                                <option name="birthPlace"value="Moldova">Moldova</option>
                                <option name="birthPlace"value="Monaco">Monaco</option>
                                <option name="birthPlace"value="Mongolia">Mongolia</option>
                                <option name="birthPlace"value="Montserrat">Montserrat</option>
                                <option name="birthPlace"value="Morocco">Morocco</option>
                                <option name="birthPlace"value="Mozambique">Mozambique</option>
                                <option name="birthPlace"value="Myanmar">Myanmar</option>
                                <option name="birthPlace"value="Nambia">Nambia</option>
                                <option name="birthPlace"value="Nauru">Nauru</option>
                                <option name="birthPlace"value="Nepal">Nepal</option>
                                <option name="birthPlace"value="Netherland Antilles">Netherland Antilles</option>
                                <option name="birthPlace"value="Netherlands">Netherlands (Holland, Europe)</option>
                                <option name="birthPlace"value="Nevis">Nevis</option>
                                <option name="birthPlace"value="New Caledonia">New Caledonia</option>
                                <option name="birthPlace"value="New Zealand">New Zealand</option>
                                <option name="birthPlace"value="Nicaragua">Nicaragua</option>
                                <option name="birthPlace"value="Niger">Niger</option>
                                <option name="birthPlace"value="Nigeria">Nigeria</option>
                                <option name="birthPlace"value="Niue">Niue</option>
                                <option name="birthPlace"value="Norfolk Island">Norfolk Island</option>
                                <option name="birthPlace"value="Norway">Norway</option>
                                <option name="birthPlace"value="Oman">Oman</option>
                                <option name="birthPlace"value="Pakistan">Pakistan</option>
                                <option name="birthPlace"value="Palau Island">Palau Island</option>
                                <option name="birthPlace"value="Palestine">Palestine</option>
                                <option name="birthPlace"value="Panama">Panama</option>
                                <option name="birthPlace"value="Papua New Guinea">Papua New Guinea</option>
                                <option name="birthPlace"value="Paraguay">Paraguay</option>
                                <option name="birthPlace"value="Peru">Peru</option>
                                <option name="birthPlace"value="Phillipines">Philippines</option>
                                <option name="birthPlace"value="Pitcairn Island">Pitcairn Island</option>
                                <option name="birthPlace"value="Poland">Poland</option>
                                <option name="birthPlace"value="Portugal">Portugal</option>
                                <option name="birthPlace"value="Puerto Rico">Puerto Rico</option>
                                <option name="birthPlace"value="Qatar">Qatar</option>
                                <option name="birthPlace"value="Republic of Montenegro">Republic of Montenegro</option>
                                <option name="birthPlace"value="Republic of Serbia">Republic of Serbia</option>
                                <option name="birthPlace"value="Reunion">Reunion</option>
                                <option name="birthPlace"value="Romania">Romania</option>
                                <option name="birthPlace"value="Russia">Russia</option>
                                <option name="birthPlace"value="Rwanda">Rwanda</option>
                                <option name="birthPlace"value="St Barthelemy">St Barthelemy</option>
                                <option name="birthPlace"value="St Eustatius">St Eustatius</option>
                                <option name="birthPlace"value="St Helena">St Helena</option>
                                <option name="birthPlace"value="St Kitts-Nevis">St Kitts-Nevis</option>
                                <option name="birthPlace"value="St Lucia">St Lucia</option>
                                <option name="birthPlace"value="St Maarten">St Maarten</option>
                                <option name="birthPlace"value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                <option name="birthPlace"value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                <option name="birthPlace"value="Saipan">Saipan</option>
                                <option name="birthPlace"value="Samoa">Samoa</option>
                                <option name="birthPlace"value="Samoa American">Samoa American</option>
                                <option name="birthPlace"value="San Marino">San Marino</option>
                                <option name="birthPlace"value="Sao Tome & Principe">Sao Tome & Principe</option>
                                <option name="birthPlace"value="Saudi Arabia">Saudi Arabia</option>
                                <option name="birthPlace"value="Senegal">Senegal</option>
                                <option name="birthPlace"value="Seychelles">Seychelles</option>
                                <option name="birthPlace"value="Sierra Leone">Sierra Leone</option>
                                <option name="birthPlace"value="Singapore">Singapore</option>
                                <option name="birthPlace"value="Slovakia">Slovakia</option>
                                <option name="birthPlace"value="Slovenia">Slovenia</option>
                                <option name="birthPlace"value="Solomon Islands">Solomon Islands</option>
                                <option name="birthPlace"value="Somalia">Somalia</option>
                                <option name="birthPlace"value="South Africa">South Africa</option>
                                <option name="birthPlace"value="Spain">Spain</option>
                                <option name="birthPlace"value="Sri Lanka">Sri Lanka</option>
                                <option name="birthPlace"value="Sudan">Sudan</option>
                                <option name="birthPlace"value="Suriname">Suriname</option>
                                <option name="birthPlace"value="Swaziland">Swaziland</option>
                                <option name="birthPlace"value="Sweden">Sweden</option>
                                <option name="birthPlace"value="Switzerland">Switzerland</option>
                                <option name="birthPlace"value="Syria">Syria</option>
                                <option name="birthPlace"value="Tahiti">Tahiti</option>
                                <option name="birthPlace"value="Taiwan">Taiwan</option>
                                <option name="birthPlace"value="Tajikistan">Tajikistan</option>
                                <option name="birthPlace"value="Tanzania">Tanzania</option>
                                <option name="birthPlace"value="Thailand">Thailand</option>
                                <option name="birthPlace"value="Togo">Togo</option>
                                <option name="birthPlace"value="Tokelau">Tokelau</option>
                                <option name="birthPlace"value="Tonga">Tonga</option>
                                <option name="birthPlace"value="Trinidad & Tobago">Trinidad & Tobago</option>
                                <option name="birthPlace"value="Tunisia">Tunisia</option>
                                <option name="birthPlace"value="Turkey">Turkey</option>
                                <option name="birthPlace"value="Turkmenistan">Turkmenistan</option>
                                <option name="birthPlace"value="Turks & Caicos Is">Turks & Caicos Is</option>
                                <option name="birthPlace"value="Tuvalu">Tuvalu</option>
                                <option name="birthPlace"value="Uganda">Uganda</option>
                                <option name="birthPlace"value="United Kingdom">United Kingdom</option>
                                <option name="birthPlace"value="Ukraine">Ukraine</option>
                                <option name="birthPlace"value="United Arab Erimates">United Arab Emirates</option>
                                <option name="birthPlace"value="United States of America">United States of America</option>
                                <option name="birthPlace"value="Uraguay">Uruguay</option>
                                <option name="birthPlace"value="Uzbekistan">Uzbekistan</option>
                                <option name="birthPlace"value="Vanuatu">Vanuatu</option>
                                <option name="birthPlace"value="Vatican City State">Vatican City State</option>
                                <option name="birthPlace"value="Venezuela">Venezuela</option>
                                <option name="birthPlace"value="Vietnam">Vietnam</option>
                                <option name="birthPlace"value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                <option name="birthPlace"value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                <option name="birthPlace"value="Wake Island">Wake Island</option>
                                <option name="birthPlace"value="Wallis & Futana Is">Wallis & Futana Is</option>
                                <option name="birthPlace"value="Yemen">Yemen</option>
                                <option name="birthPlace"value="Zaire">Zaire</option>
                                <option name="birthPlace"value="Zambia">Zambia</option>
                                <option name="birthPlace"value="Zimbabwe">Zimbabwe</option>
                        </select>
                    </div>
                    <label for="date">Date of Birth</label>
                    <div class="groupInput" id="groupInputDate">
                        <i class="fas fa-calendar-alt"></i>
                        <input type="date" id="date" name="birthDate" required value="{{ old('birthDate') }}" placeholder="please enter your date of birth" oninput="validateDate()" placeholder="dd-mm-yyyy" max required>
                    </div>
                    <div class="validation" id="validationDate">You must be at least 17 years old</div>
                    <label for="cv">CV</label>
                    <div class="groupInput" id="groupInputCv">
                        <i class="fas fa-file-image"></i>
                        <input type="file" name="CV" required value="{{ old('CV') }}" id="cv" accept=".png, .jpeg, .jpg, .pdf" onchange="validateCv()" required>
                    </div>
                    <label for="id">Flazz / ID Card</label>
                    <div class="groupInput" id="groupInputId">
                        <i class="fas fa-id-badge"></i>
                        <input type="file" name="IdCard" required value="{{ old('IdCard') }}" id="id" accept=".png, .jpeg, .jpg, .pdf" onchange="validateId()" required>
                    </div>

                    <div class="buttons">
                        <button onclick="back(-1)" type="button">Back</button>
                        <button type="submit" onclick="validateAllForm()"><b>Submit</b></button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7c925acf6e.js" crossorigin="anonymous"></script>
    <script src="{{ URL::asset('js/registration.js') }}"defer></script>
</body>
</html>
