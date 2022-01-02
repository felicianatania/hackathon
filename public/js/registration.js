var page = 1;
showTab(page);
var condition1 = false;
var condition2 = false;
var condition3 = false;
var condition4 = false;
var condition5 = false;
var condition6 = false;
var condition7 = false;
var condition8 = false;
var condition9 = false;
var condition10 = false;
var condition11 = false;
var condition12 = false;
var condition13 = false;

function showTab(n) {
    if (n == 1) {
        document.getElementById("form2").style.display = "none";
        document.getElementById("form3").style.display = "none";
        document.getElementById("form1").style.display = "block";
      } else if (n == 2) {
        document.getElementById("form1").style.display = "none";
        document.getElementById("form3").style.display = "none";
        document.getElementById("form2").style.display = "block";
      } else if (n == 3) {
        document.getElementById("form1").style.display = "none";
        document.getElementById("form2").style.display = "none";
        document.getElementById("form3").style.display = "block";
      }
}

function next(x) {
    page = page + x;
    showTab(page);
}

function back(x) {
    page = page + x;
    showTab(page);
}

function validateGroup() {
    var inputGroup = document.getElementById("group").value;
    if (inputGroup != "") {
      document.getElementById("groupInputGroup").style.borderColor = "green";
      condition1 = true;
    } else {
      document.getElementById("groupInputGroup").style.borderColor = "red";
      condition1 = false;
    }
}

function validatePass() {
    var inputPass = document.getElementById("password").value;
    var passREGEX = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    if(inputPass.match(passREGEX)){
      document.getElementById("validationPass").style.display = "none";
      document.getElementById("groupInputPass").style.borderColor = "green";
      condition2 = true;
    } else {
      document.getElementById("validationPass").style.display = "block";
      document.getElementById("groupInputPass").style.borderColor = "red";
      condition2 = false;
    }
}

function confirmPass() {
    var inputPass = document.getElementById("password").value;
    var inputConfirmPass = document.getElementById("confirmPassword").value;
    if (inputConfirmPass == "") {
      document.getElementById("groupInputConfirm").style.borderColor = "red";
      condition3 = false;
    } else if (inputConfirmPass == inputPass) {
      document.getElementById("confirmationPass").style.display = "none";
      document.getElementById("groupInputConfirm").style.borderColor = "green";
      condition3 = true;
    } else {
      document.getElementById("confirmationPass").style.display = "block";
      document.getElementById("groupInputConfirm").style.borderColor = "red";
      condition3 = false;
    }
}

function validateStatus() {
  var status1 = document.getElementById("binusian");
  var status2 = document.getElementById("nonBinusian");
  if(status1.checked == true || status2.checked == true) {
    document.getElementById("groupInputStatus").style.borderColor = "green";
    condition4 = true;
  } else {
    document.getElementById("groupInputStatus").style.borderColor = "red";
    condition4 = false;
  } 
}

function validateName() {
  var inputName = document.getElementById("name").value;
    if (inputName != "") {
      document.getElementById("groupInputName").style.borderColor = "green";
      condition5 = true;
    } else {
      document.getElementById("groupInputName").style.borderColor = "red";
      condition5 = false;
    }
}

function validateEmail() {
  var inputEmail = document.getElementById("email").value;
  var emailREGEX = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if(inputEmail.match(emailREGEX)){
    document.getElementById("validationEmail").style.display = "none";
    document.getElementById("groupInputEmail").style.borderColor = "green";
    condition6 = true;
  } else {
    document.getElementById("validationEmail").style.display = "block";
    document.getElementById("groupInputEmail").style.borderColor = "red";
    condition6 = false;
  }
}

function validateWhatsapp() {
  var inputWhatsapp = document.getElementById("whatsapp").value;
  var whatsappREGEX = /^\d{9,}$/;
  if(inputWhatsapp.match(whatsappREGEX)){
    document.getElementById("validationWhatsapp").style.display = "none";
    document.getElementById("groupInputWhatsapp").style.borderColor = "green";
    condition7 = true;
  } else {
    document.getElementById("validationWhatsapp").style.display = "block";
    document.getElementById("groupInputWhatsapp").style.borderColor = "red";
    condition7 = false;
  }
}

function validateLine() {
  var inputLine = document.getElementById("line").value;
    if (inputLine != "") {
      document.getElementById("groupInputLine").style.borderColor = "green";
      condition8 = true;
    } else {
      document.getElementById("groupInputLine").style.borderColor = "red";
      condition8 = false;
    }
}

function validateGithub() {
  var inputGithub = document.getElementById("github").value;
    if (inputGithub != "") {
      document.getElementById("groupInputGithub").style.borderColor = "green";
      condition9 = true;
    } else {
      document.getElementById("groupInputGithub").style.borderColor = "red";
      condition9 = false;
    }
}

function validatePlace(){
  var inputPlace = document.getElementById("place").value;
  if (inputPlace != ""){
    document.getElementById("groupInputPlace").style.borderColor = "green";
    condition10 = true;
  } else{
    document.getElementById("groupInputPlace").style.borderColor = "red";
    condition10 = false;
  }
}

function validateDate(){
  var inputDate = document.getElementById("date").value;
  var today = Date.now();
  var birthDate = Date.parse(inputDate);
  var age = (today - birthDate)/(1000*60*60*24*365);

  if (inputDate == "") {
    document.getElementById("groupInputDate").style.borderColor = "red";
    condition11 = false;
  } else if(age>17) {
    document.getElementById("validationDate").style.display = "none";
    document.getElementById("groupInputDate").style.borderColor = "green";
    condition11 = true;
  } else {
    document.getElementById("validationDate").style.display = "block";
    document.getElementById("groupInputDate").style.borderColor = "red";
    condition11 = false;
  }
}

function validateCv(){
  var inputCv = document.getElementById("cv").value;
  if (inputCv != ""){
    document.getElementById("groupInputCv").style.borderColor = "green";
    condition12 = true;
  } else{
    document.getElementById("groupInputCv").style.borderColor = "red";
    condition12 = false;
  }
}

function validateId(){
  var inputId = document.getElementById("id").value;
  if (inputId != ""){
    document.getElementById("groupInputId").style.borderColor = "green";
    condition13 = true;
  } else{
    document.getElementById("groupInputId").style.borderColor = "red";
    condition13 = false;
  }
}

function validateForm1() {
  validateGroup();
  validatePass();
  confirmPass();
  validateStatus();
  if (condition1 == true && condition2 == true && condition3 == true && condition4 == true) {
    next(1);
  }
}

function validateForm2() {
  validateName();
  validateEmail();
  validateWhatsapp();
  validateLine();
  validateGithub();
  if (condition5 == true && condition6 == true && condition7 == true && condition8 == true && condition9 == true) {
    next(1);
  }
}

function validateAllForm() {
  validateGroup();
  validatePass();
  confirmPass();
  validateStatus();
  validateName();
  validateEmail();
  validateWhatsapp();
  validateLine();
  validateGithub();
  validatePlace();
  validateDate;
  validateCv();
  validateId();
  if (condition1 == true && condition2 == true && condition3 == true && condition4 == true && condition5 == true && condition6 == true && condition7 == true && condition8 == true && condition9 == true && condition10 == true && condition11 == true && condition12 == true && condition13 == true) {
    document.inputForm.submit();
  }
}