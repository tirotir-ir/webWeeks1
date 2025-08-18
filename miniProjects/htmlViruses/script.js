const messages = [
    "Hello, world!",
    "You're awesome!",
    "Keep coding!",
    "JavaScript is fun!",
    "Learn something new today!",
    "Smile :)",
    "You can do it!",
];

function createVirusMessage() {
    const message = document.createElement('div');
    message.classList.add('virus-message');
    message.textContent = messages[Math.floor(Math.random() * messages.length)];
    
    const xPos = Math.random() * window.innerWidth;
    const yPos = window.innerHeight + 50;
    
    message.style.left = `${xPos}px`;
    message.style.top = `${yPos}px`;
    
    document.getElementById('virus-container').appendChild(message);
    
    setTimeout(() => {
        message.remove();
    }, 10000); // Remove the message after 10 seconds
}

function startVirusEffect() {
    setInterval(createVirusMessage, 1000); // Create a new message every second
}

startVirusEffect();
