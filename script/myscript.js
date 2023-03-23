// Get email and password input elements
const emailInput = document.getElementById('email');
const passwordInput = document.getElementById('password');

// Get loading element
const loading = document.getElementById('loading')

// Add event listener to login button
const loginButton = document.getElementById('loginButton');
loginButton.addEventListener('click', () => {
  // Check if email and password are valid
  if (!isValidEmail(emailInput.value)) {
    alert('Please enter a valid email address.');
    return;
  }

  if (!isValidPassword(passwordInput.value)) {
    alert('Please enter a valid password (at least 6 characters).');
    return;
  }

  // Show loading sign
  loading.style.display = 'block';

  // Simulate logging in (replace with actual login code)
  setTimeout(() => {
    // Hide loading sign
    loading.style.display = 'none';

    // Redirect to dashboard
    window.location.href = '/dashboard';
  }, 2000);
});

// Helper function to validate email format
function isValidEmail(email) {
  const emailRegex = /^\S+@\S+\.\S+$/;
  return emailRegex.test(email);
}

// Helper function to validate password length
function isValidPassword(password) {
  return password.length >= 6;
}