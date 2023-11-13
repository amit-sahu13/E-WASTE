document.addEventListener("DOMContentLoaded", function () {
  const signInButton = document.getElementById("signInButton");
  const signUpButton = document.getElementById("signUpButton");
  const signInForm = document.querySelector(".form-section.sign-in");
  const signUpForm = document.querySelector(".form-section.sign-up");

  signInButton.addEventListener("click", function (e) {
    e.preventDefault(); //default behavior rokne k liye
    signInForm.style.display = "block";
    signUpForm.style.display = "none";
  });

  signUpButton.addEventListener("click", function (e) {
    e.preventDefault(); //default behavior rokne k liyess
    signUpForm.style.display = "block";
    signInForm.style.display = "none";
  });

});




