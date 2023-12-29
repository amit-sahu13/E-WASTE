let responses;

fetch("JSON/responses.json")
  .then((response) => response.json())
  .then((data) => {
    responses = data;
    displayBotMessage(responses.rules[0].output);
  });

function sendMessage() {
  const userInput = document.getElementById("user-input").value;
  displayUserMessage(userInput);
  const botResponse = getResponse(userInput);
  displayBotMessage(botResponse);

  document.getElementById("user-input").value = ""; 
}

function getResponse(userInput) {
  for (const rule of responses.rules) {
    if (userInput.toLowerCase().includes(rule.input)) {
      return rule.output;
    }
  }
  return "I'm sorry, I don't understand. Please ask another question.";
}

function displayUserMessage(message) {
  const chatBox = document.getElementById("chat-box");
  const userMessage = document.createElement("div");
  userMessage.classList.add("message", "user-message");
  userMessage.textContent = `You: ${message}`;
  chatBox.appendChild(userMessage);
  chatBox.scrollTop = chatBox.scrollHeight;
}

function displayBotMessage(message) {
  const chatBox = document.getElementById("chat-box");
  const botMessage = document.createElement("div");
  botMessage.classList.add("message", "bot-message");
  botMessage.textContent = `Chatbot: ${message}`;
  chatBox.appendChild(botMessage);
  chatBox.scrollTop = chatBox.scrollHeight;
}
