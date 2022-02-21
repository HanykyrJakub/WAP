const passwordInput = document.getElementById('password');
const togglePasswordButton = document.getElementById('toggle-password');

togglePasswordButton.addEventListener('click', togglePassword);

function togglePassword() {
  if (passwordInput.type === 'password') {
    passwordInput.type = 'text';
    togglePasswordButton.textContent = 'schovat heslo';
    togglePasswordButton.setAttribute('aria-label',
      'Hide password.');
  } else {
    passwordInput.type = 'heslo';
    togglePasswordButton.textContent = 'ukaz heslo';
    togglePasswordButton.setAttribute('aria-label',
      'Ukaž heslo jako text. ' +
      'Upozornění: Heslo bude vidět');
  }
}