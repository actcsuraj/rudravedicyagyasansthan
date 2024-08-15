<!-- Footer Section -->
<footer id="footer" class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="row footer_matter">
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="footer_logo_wrapper">
                        <img src="assets/image/logo/footer_logo.png" alt="footer_logo"
                            class="img-responsive wow fadeInDown animated">
                        <h3 class="wow fadeInDown animated"> +91-7652041630</h3>
                        <p class="wow fadeInDown animated">Rudra Vedic Yagya Sansthan is a trusted and renowned
                            foundation of a globally prosperous family. </p>
                        <ul>
                            <li class="wow fadeInDown animated"><a
                                    href="https://www.facebook.com/people/Rudra-Vedic-Yagya-Sansthan/61564435944180/"><i
                                        class="fa fa-facebook"></i></a></li>
                            <li class="wow fadeInDown animated"><a
                                    href="https://www.instagram.com/rudravedicyagyasansthan/?utm_source=qr&igsh=d2VndjM3YjJoNzZ5"><i
                                        class="fa fa-instagram"></i></a></li>
                            <li class="wow fadeInDown animated"><a
                                    href="https://www.youtube.com/@user-rudravedic"><i
                                        class="fa fa-youtube-play"></i></a></li>
                            <!-- <li class="wow fadeInDown animated"><a
                                    href="javascript:void(0)"><i
                                        class="fa fa-linkedin"></i></a></li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-6">
                    <div class="footer_list_wrapper">
                        <h2>Payment methods</h2>

                        <!--<p style="color:#fff;"> We have several safe ways of payment possibilities for your comfort:</p>-->
                        <ul class="footer_list">
                            <li> <img src="images/qr.jpg" style="height: 111px;"></li>
                            <li class="wow fadeInDown animated"><a href="javascript:void(0)"><i
                                        class="fa fa-angle-right" aria-hidden="true"></i> Credit cards (Visa,
                                    MasterCard, Amex, Discover)</a>
                            </li>
                            <li class="wow fadeInDown animated"><a href="javascript:void(0)"><i
                                        class="fa fa-angle-right" aria-hidden="true"></i> PayPal</a>
                            </li>
                            <li class="wow fadeInDown animated"><a href="javascript:void(0)"><i
                                        class="fa fa-angle-right" aria-hidden="true"></i> Bank transfer</a>
                            </li>
                            <li class="wow fadeInDown animated"><a href="javascript:void(0)"><i
                                        class="fa fa-angle-right" aria-hidden="true"></i> Western Union </a>
                            </li>


                            <p style="color:#000;"><i class="fa fa-cc-visa fa-2x">&nbsp;</i><i
                                    class="fa fa-cc-mastercard fa-2x">&nbsp;</i><i
                                    class="fa fa-cc-amex fa-2x">&nbsp;</i><i
                                    class="fa fa-cc-discover fa-2x">&nbsp;</i><i
                                    class="fa fa-cc-paypal fa-2x">&nbsp;</i></p>

                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-6">
                    <div class="footer_list_wrapper">
                        <h2 class="wow fadeInDown animated">Quick links</h2>
                        <ul class="footer_list">
                            <li class="wow fadeInDown animated"><a href="./"><i class="fa fa-angle-right"
                                        aria-hidden="true"></i> Home</a>
                            </li>
                            <li class="wow fadeInDown animated"><a href="about.php"><i class="fa fa-angle-right"
                                        aria-hidden="true"></i> About Us</a>
                            </li>
                            <li class="wow fadeInDown animated"><a href="about-yagya.php"><i class="fa fa-angle-right"
                                        aria-hidden="true"></i> About Yagya</a>
                            </li>
                            <li class="wow fadeInDown animated"><a href="astrology-services.php"><i
                                        class="fa fa-angle-right" aria-hidden="true"></i> Astrology Services</a>
                            </li>
                            <li class="wow fadeInDown animated"><a href="yagya-services.php"><i
                                        class="fa fa-angle-right" aria-hidden="true"></i> Yagya Services</a>
                            </li>
                            <li class="wow fadeInDown animated"><a href="contact.php"><i class="fa fa-angle-right"
                                        aria-hidden="true"></i> Contact Us </a> </li><br />
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="footer_copyright">
    <div class="container-fluid">
        <p class="wow fadeInDown animated text-center">&copy;
            <script>
                document.write(new Date().getFullYear());
            </script>
            by Astrology. All right Reserved.
        </p>
    </div>
</div>
<!-- Footer Section End -->
<!-- back-to-top scrtion -->
<div class="top_button">
    <a class="back-to-top" style="cursor:pointer;" id="top-scrolltop"><i class="fa fa-angle-up"></i></a>
</div>
<!-- back-to-top scrtion End-->
<div class="whtsp">
    <!--- whatsapp icon start here -->
    <a href="https://api.whatsapp.com/send?phone=91-7652041630" target="_blank">
        <img src="assets/image/astrology-whatsapp.png">
    </a>
</div><!--- End Footer -->
<!-- script files -->
<!-- home silder -->
<script>
    $(document).ready(function () {
        $('#home-silder').owlCarousel({
            items: 1,
            itemsDesktop: [1199, 1],
            itemsDesktopSmall: [992, 1],
            itemsTablet: [768, 1],
            itemsMobile: [450, 1],
            autoPlay: 10000,
            pagination: true,
            navigation: true,
            navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']
        });
    });
    $(document).ready(function () {
        $('#testimonial').owlCarousel({
            items: 3,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [992, 3],
            itemsTablet: [768, 2],
            itemsMobile: [450, 1],
            autoPlay: 10000,
            pagination: true,
            navigation: true,
            navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']
        });
    });
    $(document).ready(function () {
        $('#blog').owlCarousel({
            items: 3,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [992, 3],
            itemsTablet: [768, 2],
            itemsMobile: [450, 1],
            autoPlay: 10000,
            pagination: false,
            navigation: true,
            navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']
        });
    });
    $(document).ready(function () {
        $('#product').owlCarousel({
            items: 4,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [992, 3],
            itemsTablet: [768, 2],
            itemsMobile: [450, 1],
            autoPlay: 10000,
            pagination: false,
            navigation: true,
            navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']
        });
    });
</script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/custom.js"></script>
<!-- script files -->
</body>

</html>
<script>
    function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");
        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
        }
    }
</script>