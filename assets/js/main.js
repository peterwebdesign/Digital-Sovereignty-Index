document.getElementById('contactForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const form = e.target;
    const formData = new FormData(form);
    const status = document.getElementById('formStatus');
    const btn = document.getElementById('send_button');
    btn.textContent = 'Sending...';

    fetch('inc/send-email.php', {
      method: 'POST',
      body: formData
    })
    .then(res => res.text())
    .then(response => {
      status.textContent = response;
      btn.style.display = 'none';
      form.reset();
    })
    .catch(error => {
      status.textContent = 'An error occurred. Please try again later.';
      console.error(error);
    });
});


$(document).ready(function() {
  $('.info-icon').on('click', function() {
    const note = $(this).closest('label').nextAll('.note').first();

    // If hidden, slide down and set to block
    if (note.is(':hidden')) {
      note.stop(true, true).slideDown(200).css('display', 'block');
    } else {
      note.stop(true, true).slideUp(200);
    }
  });
});





// Helper to get a cookie by name
function getCookie(name) {
  const value = `; ${document.cookie}`;
  const parts = value.split(`; ${name}=`);
  if (parts.length === 2) return parts.pop().split(';').shift();
}

// Helper to set a cookie
function setCookie(name, value, days = 365) {
  const expires = new Date(Date.now() + days * 864e5).toUTCString();
  document.cookie = `${name}=${value}; expires=${expires}; path=/; SameSite=Lax`;
}

// Show cookie banner if not already accepted
document.addEventListener('DOMContentLoaded', () => {

  const cookieChoice = getCookie('cookie_banner_accepted');
  if (!cookieChoice) {
    document.getElementById('cookie-banner').classList.remove('hidden');
  }

  document.getElementById('save-cookies').addEventListener('click', () => {
    setCookie('cookie_banner_accepted', 'essential');
    document.getElementById('cookie-banner').classList.add('hidden');

    //essentials accepted, disable matomo
    //console.log("Stats consent NOT given, do NOT load rememberCookieConsentGiven");
    //_paq.push(['forgetCookieConsentGiven']); // Ensure Matomo forgets the consent
    //_paq.push(['deleteCookies']); // Delete all Matomo cookies

  });

  document.getElementById('accept-all').addEventListener('click', () => {
    setCookie('cookie_banner_accepted', 'all');
    document.getElementById('cookie-banner').classList.add('hidden');


    /*
    var _paq = window._paq = window._paq || [];
    _paq.push(['setCookieConsentGiven']);
    //set matomo
    if(!getCookie('mtm_cookie_consent')){
      // set cookie only if not recently set
      _paq.push(['rememberConsentGiven']); // Grant consent
    }
    */


  });


});

document.getElementById('cookie_preferences_btn').addEventListener('click', (e) => {
  e.preventDefault();
  document.getElementById('cookie-banner').classList.remove('hidden');
});

// Toggle customize section
  document.getElementById('customize-toggle').addEventListener('click', (e) => {
    e.preventDefault();
    const details = document.getElementById('cookie-details');
    details.classList.toggle('hidden');
  });