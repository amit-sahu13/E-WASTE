document.getElementById("formscontainer").style.display="none";
document.body.style.overflow = "scroll";
function closeForm() {
    var modal = document.getElementById("formscontainer");
    modal.style.display = "none";
    document.body.style.overflow = "scroll"; // Enable scrolling on the background
    document.getElementById("main").style.filter = "blur(0px)";
    document.getElementById("footer").style.filter = "blur(0px)";
  }
  document.element.style.filter = "null";