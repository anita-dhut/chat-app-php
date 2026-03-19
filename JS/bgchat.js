// Get the dropdown menu and chat container elements
const dropdown = document.getElementById("background-select");
const chatContainer = document.querySelector(".chat-container");

// Add an event listener to the dropdown menu
dropdown.addEventListener("change", () => {
    // Get the selected value
    const selectedValue = dropdown.value;
    
    // Set the chat container's background to the selected value
    chatContainer.style.backgroundColor = selectedValue;
});
