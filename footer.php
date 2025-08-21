<footer class="blackBG pt-5 pb-0">
  <div class="container text-center text-md-start">
    <div class="row">

      <!-- Logo and About -->
      <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-4">
        <h5 class="fw-bold text-uppercase mb-4">
          <img src="assets/images/DSI_logo_white.svg" alt="Digital Sovereignty Index logo white" class="me-2" style="height: 60px;">
        </h5>
        <p>
           The Digital Sovereignty Index (DSI) aims to provide a comparative snapshot of visible, self-hosted infrastructure across borders. It doesn’t measure intent or regulation – it shows which tools are actually in use. 
        </p>
      </div>

      <!-- Quick Links -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-4">
        <h5 class="fw-bold mb-4">Links</h5>
        <ul class="list-unstyled footer-menu">
          <li><a href="index.php" class="text-reset">Home</a></li>
          <li><a href="report.php" class="text-reset">Report</a></li>
          <li><a href="index.php#how-it-works" class="text-reset">How It Works</a></li>
          <li><a href="#cta" class="text-reset">Contribute</a></li>

        </ul>
      </div>

      <!-- Social Media -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-4">
        <h5 class="fw-bold mb-4">Useful links</h5>

        <ul class="list-unstyled footer-menu">
          <li><a href="impressum.php" class="text-reset">Impressum</a></li>
          <li><a href="#" class="text-reset" id="cookie_preferences_btn">Cookie preferences</a></li>
        </ul>

      </div>
    </div>
  </div>

  <div class="text-center p-3 mt-4 bottom_section" style="">
    © <?php echo date('Y'); ?> Digital Sovereignty Index - All rights reserved.
  </div>
</footer>


<!-- Cookie Banner -->
  <div id="cookie-banner" class="cookie-banner hidden">
    <h4>This website uses cookies</h4>
    <p>
      We use essential cookies to ensure the proper functioning of this website. Additionally, we embed a map from OpenStreetMap. While it operates by default without establishing external connections, accepting all cookies enhances its appearance and user experience.
    </p>

    <div class="button-group">
      <button id="accept-all">Accept all</button>
      <button id="save-cookies">Reject non essentials</button>
      <button href="#" id="customize-toggle">Customize</button>     
    </div>

    <!-- Customize Toggle -->
  

  <!-- Hidden Details -->
  <div id="cookie-details" class="hidden">
    <h5>Cookie details</h5>


    <h5 class="mt-4">Essential cookies </h5>
    <!-- Cookie Table Headers -->
    <div class="cookie-row cookie-header">
      <div>Cookie Name</div>
      <div>Purpose</div>
      <div>Type</div>
      <div>Duration</div>
      <div>Provider</div>
    </div>

    <div class="cookie-row">
      <div>cookie_banner_accepted</div>
      <div>Saves your cookie preference</div>
      <div>Essential</div>
      <div>1 year</div>
      <div>nextcloud.com</div>
    </div>

    <h5 class="mt-4">Third-Party services</h5>
    <p>
      This site embeds maps from <strong>OpenStreetMap</strong>. Accepting all cookies may result in cookies or browser data being used by their service.
      See their <a href="https://wiki.osmfoundation.org/wiki/Privacy_Policy" target="_blank" rel="noopener noreferrer">privacy policy</a>.
    </p>

    <h5 class="mt-4">Tracking services</h5>
    <p>
      Statistics cookies collect information anonymously and help us understand how our visitors use our website. We use cloud-hosted <a href="https://matomo.org/matomo-cloud/" target="_blank">Matomo</a>
    </p>

    <div class="cookie-row cookie-header">
      <div>Cookies</div>
      <div>Type</div>
      <div>Duration</div>
    </div>

    <!-- Cookie Rows -->
    <div class="cookie-row">
      <div>_pk_ses*: Counts the first visit of the user<br>
_pk_id*: Helps not to double count the visits.<br>
mtm_cookie_consent: Remembers that consent for storing and using cookies was given by the user. </div>
      <div>Tracking</div>
      <div>_pk_ses*: 30 minutes<br>
_pk_id*: 28 days<br>
mtm_cookie_consent: 30 days<br></div>
    </div>


  </div>

  </div>

<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>