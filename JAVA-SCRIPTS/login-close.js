/*function openForm() {
  var modal = document.getElementById("formscontainer");
  modal.style.display = "block";

  document.body.style.overflow =
    "hidden"; //isse use kr k blur krna yhn changes kr k Disable scrolling on the background

  //document.body.style.filter = "blur(5px)";//
  document.getElementById("head").style.filter = "blur(5px)";
  document.getElementById("main").style.filter = "blur(5px)";
  document.getElementById("footer").style.filter = "blur(5px)";
}*/

// Close the modal
function closeForm() {
  var modal = document.getElementById("formscontainer");
  modal.style.display = "none";
  document.body.style.overflow = "scroll"; // Enable scrolling on the background
  document.getElementById("main").style.filter = "blur(0px)";
  document.getElementById("footer").style.filter = "blur(0px)";
}
/*document.element.style.filter = "null";*/
