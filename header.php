<!DOCTYPE html>
<html lang="en">
<head>
	<base target="_top">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Digital Sovereignty Index</title>
  <meta name="description" content="Discover the Digital Sovereignty Index (DSI): a global snapshot of visible, self-hosted infrastructure. Is your country digitally autonomous." />
  <meta property="og:title" content="Digital Sovereignty Index"/>
	<meta property="og:description" content="Discover the Digital Sovereignty Index (DSI): a global snapshot of visible, self-hosted infrastructure. Is your country digitally autonomous." />
	<meta property="og:image" content="https://dsi.nextcloud.com/assets/images/DSI_featured_image.svg" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:image" content="https://dsi.nextcloud.com/assets/images/DSI_featured_image.svg" />

	<link rel="shortcut icon" type="image/x-icon" href="assets/images/DSI_favicon.svg" />

  <!-- TO BE REMOVED  -->
  <meta name="robots" content="noindex, nofollow" />

  <!-- jQuery CDN (minified) -->
  <script src="assets/js/jquery-3.6.0.min.js"></script>

  <!-- Load Leaflet assets -->
  <link rel="stylesheet" href="assets/css/leaflet.css" crossorigin=""/>
  <script src="assets/js/leaflet.js" crossorigin=""></script>
	
	<!-- Bootstrap 5 CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- Load FontAwesome -->
	<link rel="stylesheet" href="assets/css/all.min.css"/>
  <!-- Load DSI main CSS style -->
	<link rel="stylesheet" href="assets/css/style.css">

  <!-- Matomo Tag Manager -->
  <script>
    var _mtm = window._mtm = window._mtm || [];
    var _paq = window._paq = window._paq || [];
    console.log("requireConsent pushed.");
    _paq.push(['requireConsent']); // Blocks all tracking until consent is explicitly given


    //by document loading 
    setTimeout(() => {
      if(getCookie('cookie_banner_accepted') ) {
          const cookieBanner = getCookie('cookie_banner_accepted');
          console.log("cookieBanner: "+cookieBanner);

          if (cookieBanner == "all") {

              if(!getCookie('mtm_cookie_consent')){
                  // set cookie only if not recently set
                  console.log("rememberConsentGiven pushed.");
                  _paq.push(['rememberConsentGiven']); // Grant consent
              }

          } else {
              console.log("Stats consent NOT given, do NOT load rememberCookieConsentGiven");
              _paq.push(['forgetCookieConsentGiven']); // Ensure Matomo forgets the consent
              _paq.push(['deleteCookies']); // Delete all Matomo cookies
          }
      } else {
          
      }

    }, 500);


    // Show cookie banner if not already accepted
    document.addEventListener('DOMContentLoaded', () => {

      document.getElementById('save-cookies').addEventListener('click', () => {
        //essentials accepted, disable matomo
        console.log("Stats consent NOT given, do NOT load rememberCookieConsentGiven");
        _paq.push(['forgetCookieConsentGiven']); // Ensure Matomo forgets the consent
        _paq.push(['deleteCookies']); // Delete all Matomo cookies
        //delete the cookie mtm_consent
        document.cookie = "mtm_consent=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";

      });

      document.getElementById('accept-all').addEventListener('click', () => {
              setTimeout(() => {
                console.log("setCookieConsentGiven!!");
                _paq.push(['setCookieConsentGiven']);
                _paq.push(['rememberConsentGiven']); // Grant consent

                
                  //set matomo
                  if(!getCookie('mtm_cookie_consent')){
                    // set cookie only if not recently set
                    console.log("rememberConsentGiven called.");
                    _paq.push(['rememberConsentGiven']); // Grant consent
                  }
              }, 500);

      });
    });



      _mtm.push({'mtm.startTime': (new Date().getTime()), 'event': 'mtm.Start'});
      (function() {
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.async=true;
        g.id='matomo_js';
        g.src='https://cdn.matomo.cloud/nextcloud.matomo.cloud/container_RE5iGgaO.js';
        s.parentNode.insertBefore(g,s);
      })();


    
  </script>
  <!-- End Matomo Tag Manager -->

</head>
<body>

	<!-- Bootstrap 5 Responsive Header -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm sticky-top">
  <div class="container-fluid px-4">
    <!-- Logo -->

    <a class="navbar-brand fw-bold logo" href="index.php">
      <img src="assets/images/DSI_logo_color.svg" alt="Digital Sovereignty Index logo color" class="me-2" style="">
    </a>

    <!-- Hamburger icon -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
      aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu items -->
    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="report.php">Report</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#how-it-works">How it works</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-primary ms-lg-3" href="index.php#cta">Contribute</a>
        </li>
      </ul>
    </div>
  </div>
</nav>