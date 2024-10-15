import './bootstrap';
import $ from 'jquery';

// togle password
document.addEventListener('DOMContentLoaded', function () {

  // password
  const passwordInput = document.getElementById('passwordInput');
  const toggleIcon = document.getElementById('toggleIcon');

  if (passwordInput && toggleIcon) {
    toggleIcon.addEventListener('click', function () {
      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        toggleIcon.src = 'https://img.icons8.com/fluency-systems-filled/19/visible.png';
      } else {
        passwordInput.type = 'password'; // Change back to password
        toggleIcon.src = 'https://img.icons8.com/fluency-systems-filled/19/invisible.png';
      }
    });
  }

  // confirm password
  const confirmPasswordInput = document.getElementById('confirmPasswordInput');
  const toggleIconConfirm = document.getElementById('toggleIconConfirm');

  if (confirmPasswordInput && toggleIconConfirm) {
    toggleIconConfirm.addEventListener('click', function () {
      if (confirmPasswordInput.type === 'password') {
        confirmPasswordInput.type = 'text';
        toggleIconConfirm.src = 'https://img.icons8.com/fluency-systems-filled/19/visible.png';
      } else {
        confirmPasswordInput.type = 'password'; // Change back to password
        toggleIconConfirm.src = 'https://img.icons8.com/fluency-systems-filled/19/invisible.png';
      }
    });
  }
});


// $(document).ready(function () {
//   // function sending register form
//   $('#registerForm').on('submit', function (e) {
//     e.preventDefault();
    
//     $.ajax({
//       url: $(this).attr('action'),
//       type: 'POST',
//       data: $(this).serialize(),
//       success: function (response) {
//         window.location.href = response.redirect;
//       },
//       error: function (xhr) {
//         let errors = xhr.responseJSON.errors;
        
//         $('.error-message').remove();

//         for (let key in errors) {
//           if (errors.hasOwnProperty(key)) {
//             $('input[name="' + key + '"]').after('<p class="error-message text-xs text-red-500 mt-1">' + errors[key][0] + '</p>');
//           }
//         }
//       }
//     });
//   });
// });