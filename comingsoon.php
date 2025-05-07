<?php
require_once("./layout/meta.php");
require_once("./layout/header.php");
?>;

<!-- Start Coming Soon Area -->
<div class="coming-soon-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="coming-soon-content">
                <a href="index.html" class="logo">
                    <img src="assets/img/logo.png" class="main-logo" alt="image">
                    <img src="assets/img/white-logo.png" class="white-logo" alt="image">
                </a>

                <h2>We are launching soon</h2>

                <div id="timer" class="flex-wrap d-flex justify-content-center">
                    <div id="days" class="align-items-center flex-column d-flex justify-content-center"></div>
                    <div id="hours" class="align-items-center flex-column d-flex justify-content-center"></div>
                    <div id="minutes" class="align-items-center flex-column d-flex justify-content-center"></div>
                    <div id="seconds" class="align-items-center flex-column d-flex justify-content-center"></div>
                </div>

                <form class="newsletter-form" data-bs-toggle="validator">
                    <div class="form-group">
                        <input type="email" class="input-newsletter" placeholder="Enter your email" name="EMAIL" required autocomplete="off">
                        <span class="label-title"><i class='bx bx-envelope'></i></span>
                    </div>

                    <button type="submit" class="default-btn">Subscribe</button>
                    <div id="validator-newsletter" class="form-result"></div>

                    <p>If you would like to be notified when your app is live, Please subscribe to our mailing list.</p>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Coming Soon Area -->

<?php
require_once("./layout/footer.php");
?>;