const numberForm = document.getElementById('number-form');
const resultDiv = document.getElementById('result');

numberForm.addEventListener('submit', (event) => {
  event.preventDefault(); // Prevent default form submission

  const number = document.getElementById('number').value;

  // Calculate square and cube
  const square = number * number;
  const cube = number * number * number;

  // Display results
  resultDiv.textContent = `The square of ${number} is ${square}.   The cube of ${number} is ${cube}.`;
});
