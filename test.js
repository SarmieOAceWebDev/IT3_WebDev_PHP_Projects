// Create and add button to the page
const button = document.createElement('button');
button.textContent = 'Initialize System';
button.id = 'initButton';
document.body.appendChild(button);

// Add click event listener
document.getElementById('initButton').addEventListener('click', function() {
  alert('an error occured running a trigger');
});
