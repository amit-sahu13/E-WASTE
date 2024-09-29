document.getElementById("logout").style.display="none";
function openIndex(){
  window.location.href="index.html";
}


function openForm(){
  document.getElementById("formscontainer").style.display="block";
}

document.addEventListener("DOMContentLoaded", function () {
  const signInButton = document.getElementById("signInButton");
  const signUpButton = document.getElementById("signUpButton");
  const signInForm = document.querySelector(".form-section.sign-in");
  const signUpForm = document.querySelector(".form-section.sign-up");

  signInButton.addEventListener("click", function (e) {
    e.preventDefault(); 
    signInForm.style.display = "block";
    signUpForm.style.display = "none";
  });

  signUpButton.addEventListener("click", function (e) {
    e.preventDefault(); 
    signUpForm.style.display = "block";
    signInForm.style.display = "none";
  });

});






