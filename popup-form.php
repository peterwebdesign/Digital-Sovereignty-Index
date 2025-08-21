<!-- Modal Structure -->
<div class="modal fade" id="contact" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Contact us</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="contactForm" class="p-4 rounded">

        <div class="row mb-3">
          <div class="col-md-6">
            <div class="form-group">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
            <input type="text" name="website" style="display:none;">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
            <label for="email" class="form-label">Email
            <i class="fas fa-question-circle info-icon" tabindex="0" role="button" aria-label="Show help" title="Show help"></i>
            </label>
            <input type="email" class="form-control" id="email" name="email" required>
            <span class="note" style="">We won't share or spam this, we just want to be able to communicate with you to discuss your contribution if needed. See our <a href="https://nextcloud.com/privacy/" target="_blank">privacy policy</a></span>
          </div>
          </div>
        </div>

      
          <div class="mb-3">
            <div class="form-group">
            <label for="feedback-type" class="form-label">Choose feedback type:</label>
            <select name="feedback-type" class="form-select" id="feedback-type">
              <option value="new-product">New product to track</option>
              <option value="improved-search-term">Improved Shodan search term for existing product</option>
              <option value="other-feedback">Other feedback & thoughts</option>
            </select>
            </div>
          </div>

          <div class="mb-3">
            <div class="form-group">
            <label for="message" class="form-label">Product, Shodan search query or comments.
            <i class="fas fa-question-circle info-icon" tabindex="0" role="button" aria-label="Show help" title="Show help"></i>
            </label>
            <textarea class="form-control" id="message" name="message" rows="4"></textarea>
            <span class="note">
              <b>Note:</b> please make sure, when submitting a product to track, to include a Shodan.io search query that returns at least a few hundred, ideally over 1000 results! Here is an example query for Big Blue Button.
            </span>
            </div>
          </div>

        <div class="mb-3">
            <div class="consent">
                <p>
                    <span class="note visible">
                    Your privacy is important to us! Nextcloud uses your information to provide relevant content, products, and services, and it may be shared with members of Nextcloud's partner network to provide you with a locally supported offer. You can unsubscribe from these monthly updates at any time. For additional details, take a look at our <a href="https://nextcloud.com/privacy/" target="_blank">privacy policy</a>
                    </span>
                </p>
            </div>
        </div>

          <button type="submit" id="send_button" class="btn btn-primary">Send</button>
          <div id="formStatus" class="mt-3 text-muted small"></div>
        </form>
      </div>
    </div>
  </div>
</div>