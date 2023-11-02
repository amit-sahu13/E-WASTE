var input = document.getElementById("user-input");
input.addEventListener("keypress", function(event) {
  if (event.key === "Enter") {
    sendMessage();
  }
});