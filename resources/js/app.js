import './bootstrap';

// authentication - login
document.getElementById('toggle-password').addEventListener('click', function () {
  const passwordInput = document.getElementById('password-input');
  const toggleIcon = document.getElementById('toggle-password');

  if (passwordInput.type === 'password') {
      passwordInput.type = 'text';
      toggleIcon.src = 'https://img.icons8.com/ios-filled/24/invisible.png'; 
      toggleIcon.alt = 'visible';
  } else {
      passwordInput.type = 'password';
      toggleIcon.src = 'https://img.icons8.com/ios-glyphs/21/invisible.png';
      toggleIcon.alt = 'invisible';
  }
});