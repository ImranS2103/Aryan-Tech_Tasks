const numberForm = document.getElementById('number-form');
const resultDiv = document.getElementById('result');

numberForm.addEventListener('submit', (event) => {
  event.preventDefault();

  const number = document.getElementById('number').value;

  const square = number * number;
  const cube = number * number * number;

  resultDiv.textContent = `The square of ${number} is ${square}.   The cube of ${number} is ${cube}.`;
});
