<?php
$year = date("Y");

?>

<footer class="footer-wrapper">
    <div class="footer-contact-section">
        <div class="socials row-container space-between full-width">
            <img src="assets/jonah-logo-white.svg" alt="logo">
            <div class="row-container gap-tiny">
                <a href="https://www.instagram.com/jonahdigital/" class="plain-link" target="_blank">
                    <img src="assets/ig.svg" alt="logo">
                </a>
                <a href="https://www.linkedin.com/company/jonahdigital/" class="plain-link" target="_blank">
                    <img src="assets/linkedin.svg" alt="logo">
                </a>
                <a href="https://www.facebook.com/jonahdigital/" class="plain-link" target="_blank">
                    <img src="assets/fb.svg" alt="logo">
                </a>
            </div>
        </div>
        <div class="contact-info gap-1">
            <div class="column-container gap-tiny">
                <a href="tel:+8662725086" class="plain-link">
                    <h5 class="white-text">866-272-5086</h5>
                </a>
                <a href="mailto:hello@jonahdigital.com" class="plain-link">
                    <p class="white-text body-1">hello@jonahdigital.com</p>
                </a>
            </div>
            <div class="row-container gap-tiny mt-tiny body-2">
                <a class="white-text plain-link" href="contact.php">Contact</a>
                <p class="white-text">|</p>
                <a href="https://jonahdigital.com/support/" class="plain-link">
                    <p class="white-text">Support</p>
                </a>
            </div>
        </div>
    </div>
    <div class="copyright row-container space-between align-end">
        <div class="copyright row-container gap-tiny white-text">
            <p>© <?php echo $year ?> All Rights Reserved.</p>
            <div class="row-container gap-tiny">
                <a href="https://jonahdigital.com/privacy-policy/" class="plain-link">
                    <p class="white-text">Privacy Policy</p>
                </a>
                <p class="white-text">|</p>
                <a href="https://jonahdigital.com/site-map/" class="plain-link">
                    <p class="white-text">Site Map</p>
                </a>
            </div>
        </div>
        <a class="order-online-card plain-link" href="https://orderjonah.com" target="_blank">
            <div class="phone-container">
                <img src="assets/phone.png" alt="phone" height="60px" class="phone">
            </div>
            <div class="column-container mt-tiny full-height">
                <h6>Order Online!</h6>
                <p class="body-2 mt-tiny">Visit orderjonah.com</p>
            </div>
            <img src="assets/arrow-right.svg" alt="arrow" width="24px" height="24px">
        </a>
    </div>
</footer>