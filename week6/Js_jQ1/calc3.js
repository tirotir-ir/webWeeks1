// Combining Concepts - Simple Calculator:
function add(a, b) {
    return a + b;
}

function subtract(a, b) {
    return a - b;
}

function multiply(a, b) {
    return a * b;
}

function divide(a, b) {
    return a / b;
}

// Get input elements and calculate button
let num1Input = document.getElementById("num1");
let num2Input = document.getElementById("num2");
let calculateButton = document.getElementById("calculateButton");

// Function to perform calculations and display results
function calculate() {
    let num1 = parseFloat(num1Input.value);
    let num2 = parseFloat(num2Input.value);

    let sum = add(num1, num2);
    document.getElementById("sumResult").textContent = "Sum: " + sum;

    let difference = subtract(num1, num2);
    document.getElementById("differenceResult").textContent = "Difference: " + difference;

    let product = multiply(num1, num2);
    document.getElementById("productResult").textContent = "Product: " + product;

    let quotient = divide(num1, num2);
    document.getElementById("quotientResult").textContent = "Quotient: " + quotient;
}

// Add click event listener to the calculate button
calculateButton.addEventListener("click", calculate);
