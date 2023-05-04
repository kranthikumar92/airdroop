<footer id="footer-area">
    <!-- Footer Widegt Start -->
    <div class="footer-widget-area section-padding">
        <div class="container">
            <div class="footer-widget-content">
                <div class="row">
                    <!-- Single Widget Start -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-widget-wrap">
                            <a href="index-2.php">
                                <img src="assets/img/logo.png" alt="Logo" />
                            </a>
                            <div class="about-widget">
                                <p>Other chains became popular since then. We list hard forks for mostly informative purposes put.</p>
                                <div class="footer-social-icons">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Widget End -->

                    <!-- Single Widget Start -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-widget-wrap">
                            <h2 class="h5 widget-title">Info Links</h2>

                            <div class="widget-body">
                                <ul class="double-list">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Advertising</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Single Widget End -->

                    <!-- Single Widget Start -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-widget-wrap">
                            <h2 class="h5 widget-title">Donate Us</h2>
                            <div class="widget-body">
                                <p>We need to massive amount money to running this company</p>
                                <div class="donate-method">
                                    <a href="#"><i class="fa fa-yen"></i></a>
                                    <a href="#"><i class="fa fa-euro"></i></a>
                                    <a href="#"><i class="fa fa-dollar"></i></a>
                                    <a href="#"><i class="fa fa-bitcoin"></i></a>
                                </div>
                                <a href="#" class="btn btn-gradiant">Donate</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Widget End -->

                    <!-- Single Widget Start -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-widget-wrap">
                            <h2 class="h5 widget-title">Subscribe</h2>
                            <div class="widget-body">
                                <p>Subscribe to get latest updates on airdrops!</p>
                                <div class="subscribe-form">
                                    <form id="subscribe-form">
                                        <input id="email-input" type="email" placeholder="Enter your email" required />
                                        <button id="subscribe-btn" type="submit" class="btn-subscribe"><i class="fa fa-send"></i></button>
                                    </form>
                                    <div id="subscribe-msg"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <script>
                        // Add an event listener to the subscribe form
                        document.getElementById("subscribe-form").addEventListener("submit", (event) => {
                            event.preventDefault(); // Prevent the form from submitting and the page from reloading

                            // Get the email address from the input field
                            const email = document.getElementById("email-input").value;

                            // Validate the email address format
                            const emailRegex = /^\S+@\S+\.\S+$/;
                            if (!emailRegex.test(email)) {
                                // Display an error message if the email address is invalid
                                document.getElementById("subscribe-msg").innerHTML = "Please enter a valid email address.";
                                return;
                            }

                            // Create a new AJAX request to insert the email into the database
                            const xhr = new XMLHttpRequest();
                            xhr.open("POST", "subscribe", true);
                            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                            xhr.onload = () => {
                                if (xhr.readyState === 4 && xhr.status === 200) {
                                    // Display a success message
                                    document.getElementById("subscribe-msg").innerHTML = "Thank you for subscribing!";
                                } else {
                                    // Display an error message
                                    document.getElementById("subscribe-msg").innerHTML = "Sorry, there was an error subscribing. Please try again later.";
                                }
                            };
                            xhr.send(`email=${email}`); // Send the email address to the PHP script
                        });
                    </script>

                    <!-- Single Widget End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Widegt End -->

    <!-- Footer Bottom Area -->
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="copyright">
                        <p>© 2023 Demo Content .  All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom Area -->
</footer>