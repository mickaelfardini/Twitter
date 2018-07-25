$(document).ready(function () {
  // Register Button
  $("#submitRegister").click(function(e) {
    e.preventDefault();
    $.post("?page=register&action=register",
      $("#formRegister").serializeArray(),
      function(data) {
        let obj = JSON.parse(data);
        $.each(obj, function(key, value) {
          if (key == "error") {
            $("#error").html(value);
          }
          if (key == "Signup" && value == "Valid") {
            location.href = "/Twitter/signin";
          }
        });
      });
  });
  
  // Login Button
  $("#submitSignin").click(function(e) {
    e.preventDefault();
    $.post("?page=signin&action=signin",
      $("#formSignin").serializeArray(),
      function(data) {
        let obj = JSON.parse(data);
        $.each(obj, function(key, value) {
          if (key == "error") {
            $("#error").html(value);
          }
          if (key == "Signin" && value == "ok") {
            location.href = "/Twitter/";
          }
        });
      });
  });

    //Log out Button
  $("#logout").click(function() {
    $.get("?action=Logout")
    .done(() => {
      location.href = "/Twitter/signin";
    });
  });
});
  //Password avec caractères obligatoires
let myInput = document.getElementById("password");
let letter = document.getElementById("letter");
let capital = document.getElementById("capital");
let number = document.getElementById("number");
let length = document.getElementById("length");

myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

myInput.onkeyup = function() {

  let lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) { 
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}
  let upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) { 
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }
  let numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) { 
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}