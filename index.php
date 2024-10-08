<?php include('header.php'); ?>
<!-- Owl Carousel CSS -->
<link rel="stylesheet" href="assets/index/owl.carousel.min.css">
<link rel="stylesheet" href="assets/index/owl.theme.default.min.css">

<!-- jQuery (necessary for Owl Carousel) -->
<script src="assets/index/jquery-3.6.0.min.js"></script>

<!-- Owl Carousel JS -->
<script src="assets/index/owl.carousel.min.js"></script>


<style>
	.owl-nav .owl-prev,
	.owl-nav .owl-next {
		position: absolute;
		top: 50%;
		transform: translateY(-50%);
		background-color: rgba(0, 0, 0, 0.5);
		padding: 10px;
		border-radius: 50%;
		color: white;
		cursor: pointer;
	}

	.owl-nav .owl-prev {
		left: 10px;
	}

	.owl-next>i {
		color: white;
		padding: 10px;
		background: #f2770a;
	}


	.owl-prev>i {
		color: white;
		padding: 10px;
		background: #f2770a;
	}

	.owl-nav .owl-next {
		right: 10px;
	}

	.owl-nav .owl-prev:hover,
	.owl-nav .owl-next:hover {
		background-color: rgba(0, 0, 0, 0.8);
	}

	.owl-dots {
		text-align: center;
		/* margin-top: 10px; */
		display: none;
	}

	.owl-dots .owl-dot {
		display: inline-block;
		width: 10px;
		height: 10px;
		margin: 5px;
		background-color: #ccc;
		border-radius: 50%;
	}

	.owl-dots .owl-dot.active {
		background-color: #333;
	}
</style>

<section id="silder" class="silder_wrapper">
	<div id="home-silder" class="owl-carousel owl-theme">
		<div class="item">
			<img src="images/slider/1.jpg" width="100%" alt="silder images">
			<!-- title="MAHARSHI VEDIC VedacharyaS"> -->
		</div>
		<div class="item">
			<img src="images/slider/2.jpg" width="100%" alt="silder images">
		</div>
		<div class="item">
			<img src="images/slider/3.jpg" width="100%" alt="silder images">
		</div>
	</div>
</section>

<script>
	$(document).ready(function () {
		$("#home-silder").owlCarousel({
			items: 1,              // Number of items to show
			loop: true,            // Loop the carousel
			autoplay: true,        // Automatically start the carousel
			autoplayTimeout: 3000, // Time between slides (in milliseconds)
			autoplayHoverPause: true, // Pause on hover
			nav: true,             // Show navigation buttons
			navText: [
				'<i class="fa fa-chevron-left"></i>',  // Left arrow
				'<i class="fa fa-chevron-right"></i>'  // Right arrow
			],
			dots: true             // Show pagination dots
		});
	});
</script>




<div id="about_us" class="about_section"><br />
	<div class="container-fluid">
		<div class="row ast_toppadder70">
			<div class="col-sm-12">
				<div class="about_text wow slideInLeft">
					<h2 class="text-center">Rudra Vedic Yagya Sansthan</h2>
					<p> We are one of the suppliers of Vedic Yagya, Vedic Astrology globally. America, Canada,
						Columbia, Australia, Lebanon, Israel, Malaysia, Philippines, Mauritius, Thailand, China,
						Singapore, Qatar, England, Ireland, Germany, Serbia, Ukraine, Portugal, Spain, Brazil,
						Belgium, Norway, France, Netherland, Zimbabwe, Vietnam, Turkey, Russia, Peru, New Zealand,
						Nepal, Mongolia, Japan, Dubai, Kuwait, Iceland, Denmark, Croatia, Chile, Libya,
						Iran,Hungary, grace, Mexico, Sri Lanka, Sweden, Switzerland, South Africa, Ontario.</p>
					<h3>Contact Us</h3>
					<h2 class="about_contact"> <a href="tel:+91-7652041630"> <i class="fa fa-volume-control-phone"></i>
							+91-7652041630 </a></h2>
					<a href="about.php" class="btn md">Read More</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Zodiac Sign -->
<div id="zodiac_Sign" class="rashi_wrapper">
	<div class="container-fluid">
		<div class="heading_wrapper wow fadeInDown animated">
			<h2 class="wow fadeInDown animated"> Astrology & <span> Horoscopes</span></h2>
		</div>
		<div class="row">
			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
				<div class="rashi_sign_box wow fadeInDown animated ">
					<div class="sign_box_img">
						<img src="assets/image/rashi/icon1.png" alt="icon1">
					</div>
					<div class="sign_box_cont">
						<a href="booking.php">
							<h4> Career </h4>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
				<div class="rashi_sign_box wow fadeInDown animated">
					<div class="sign_box_img">
						<img src="assets/image/rashi/icon2.png" alt="icon2">
					</div>
					<div class="sign_box_cont">
						<a href="booking.php">
							<h4>Marriage</h4>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
				<div class="rashi_sign_box wow fadeInDown animated">
					<div class="sign_box_img">
						<img src="assets/image/rashi/icon3.png" alt="icon3">
					</div>
					<div class="sign_box_cont">
						<a href="booking.php">
							<h4>Worship Lesson</h2>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
				<div class="rashi_sign_box wow fadeInDown animated">
					<div class="sign_box_img">
						<img src="assets/image/rashi/icon4.png" alt="icon4">
					</div>
					<div class="sign_box_cont">
						<a href="booking.php">
							<h4>Pregnancy</h4>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
				<div class="rashi_sign_box wow fadeInDown animated">
					<div class="sign_box_img">
						<img src="assets/image/rashi/icon5.png" alt="icon5">
					</div>
					<div class="sign_box_cont">
						<a href="booking.php">
							<h4>Mangal Dosha</h4>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
				<div class="rashi_sign_box wow fadeInDown animated">
					<div class="sign_box_img">
						<img src="assets/image/rashi/icon6.png" alt="icon6">
					</div>
					<div class="sign_box_cont">
						<a href="booking.php">
							<h4>Kundali Dosh</h4>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
				<div class="rashi_sign_box wow fadeInDown animated">
					<div class="sign_box_img">
						<img src="assets/image/rashi/icon7.png" alt="icon7">
					</div>
					<div class="sign_box_cont">
						<a href="booking.php">
							<h4>Festivals</h4>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
				<div class="rashi_sign_box wow fadeInDown animated">
					<div class="sign_box_img">
						<img src="assets/image/rashi/icon8.png" alt="icon8">
					</div>
					<div class="sign_box_cont">
						<a href="booking.php">
							<h4>Name Analysis</h4>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
				<div class="rashi_sign_box wow fadeInDown animated">
					<div class="sign_box_img">
						<img src="assets/image/rashi/icon9.png" alt="icon9">
					</div>
					<div class="sign_box_cont">
						<a href="booking.php">
							<h4>Kaalsarp Yog</h4>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
				<div class="rashi_sign_box wow fadeInDown animated">
					<div class="sign_box_img">
						<img src="assets/image/rashi/icon10.png" alt="icon10">
					</div>
					<div class="sign_box_cont">
						<a href="booking.php">
							<h4>Sade-Sati Report</h4>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
				<div class="rashi_sign_box wow fadeInDown animated">
					<div class="sign_box_img">
						<img src="assets/image/rashi/icon11.png" alt="icon11">
					</div>
					<div class="sign_box_cont">
						<a href="booking.php">
							<h4>Vastu Shastra</h4>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
				<div class="rashi_sign_box wow fadeInDown animated">
					<div class="sign_box_img">
						<img src="assets/image/rashi/icon12.png" alt="icon12">
					</div>
					<div class="sign_box_cont">
						<a href="booking.php">
							<h4>Free Kundli</h4>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="website_visitors" class="astrologers-work">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6">
				<div class="astrologers_title">
					<h2 class="wow fadeInDown animated"> Ask the free Vedic Rituals Yagya (puja) Recommendation
					</h2>
					<p class="wow fadeInDown animated">We ask you to order a free yagya suggestion. If you are
						participating in the yagya for the first time or you are not well acquainted with the yagya,
						then ask for the free yagna suggestion before ordering the yagya. Get the suggestion of free
						Yagya by our Vedacharya Saurabh Kumar Pandey , who is expert of Vedic Yagya, Vedic Astrology. In
						the
						suggestion of free Yagya, you can get information about the effects of the present planets
						in your current life time. You can get free yagya tips to balance negative effects and
						increase positive effects.</p>
				</div>
				<a href="contact.php" class="btn">Enquiry Now</a>
			</div>
			<div class="col-sm-6">
				<div class="astrologers_visitors">
					<div class="col-sm-6">
						<div class="astrologers_experience">
							<h3 class="wow fadeInDown animated number-counter" data-count-from="0" data-count-to="15"
								data-count-speed="30"></h3>
							<h5 class="wow fadeInDown animated">Years of experience</h5>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="astrologers_experience">
							<h3 class="wow fadeInDown animated number-counter" data-count-from="0" data-count-to="15"
								data-count-speed="30"></h3>
							<h5 class="wow fadeInDown animated">Types of horoscopes</h5>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="astrologers_experience">
							<h3 class="wow fadeInDown animated number-counter" data-count-from="0" data-count-to="5"
								data-count-speed="30"></h3>
							<h5 class="wow fadeInDown animated">Qualified astrologers</h5>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="astrologers_experience">
							<h3 class="wow fadeInDown animated number-counter" data-count-from="0" data-count-to="20"
								data-count-speed="30"></h3>
							<h5 class="wow fadeInDown animated">Hourly visitors</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Our Services -->
<div id="services" class="services_section">
	<div class="container-fluid">
		<div class="heading_wrapper wow fadeInDown animated">
			<h2 class="wow fadeInDown animated">Everydays Vedic Rituals Yagya (puja)</h2>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<div class="box-shadows">
					<div class="services_matter">
						<h4 class="wow fadeInDown animated"><a href="services.php">bhishekam Vedic Rituals
								yagya.</a></h4>
						<p class="wow fadeInDown animated">We do this every day, this yagya lord shiva
							Riludrabhishekam. 1-3 is done by trained and well experienced Vedic Vedacharyas who help in
							all aspects. You can also participate in this yagya according to your purpose. You can
							choose between 1-3-6-12 months in this yagya depending on your choice of mind.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="box-shadows">
					<div class="services_matter">
						<h4 class="wow fadeInDown animated"><a href="services.php">Daily group business vedic
								Rituals yagya (puja). </a></h4>
						<p class="wow fadeInDown animated"> This yagya is done to get good success in business. This
							is the group business yagya. It is done by trained Vedic Vedacharyas, you can participate in
							this yagya according to your purpose. You can choose between 1-3-6-12 months in this
							yagya depending on your choice. </p>
						<br />
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="box-shadows">
					<div class="services_matter">
						<h4 class="wow fadeInDown animated"><a href="services.php">Daily personal Business Vedic
								Rituals Yagya. </a></h4>
						<p class="wow fadeInDown animated">This yagya is done to get good success in business. This
							is the personal business yagya. It is done by trained Vedic Vedacharyas, you can participate
							in this yagya according to your purpose. You can choose between 1-3-6-12 months in this
							yagya depending on your choice.</p>
						<br />
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="box-shadows">
					<div class="services_matter">
						<h4 class="wow fadeInDown animated"><a href="services.php">Daily personal Vedic Rituals
								yagya</a></h4>
						<p class="wow fadeInDown animated">This yagya is done individually, 1-3 are done by trained
							Vedic Vedacharyas. You can participate in this yagya according to your purpose. You can
							choose between 1-3-6-12 months in this yagya depending on your choice. </p>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="box-shadows">
					<div class="services_matter">
						<h4 class="wow fadeInDown animated"><a href="services.php">Daily Group Vedic Rituals
								yagya.</a></h4>
						<p class="wow fadeInDown animated"> This yagna is performed by a group yagya, performed by
							trained Vedic Vedacharyas, you can participate in this yagya according to your purpose. You
							can choose between 1-3-6-12 months in this yagya depending on your choice. </p>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="box-shadows">
					<div class="services_matter">
						<h4 class="wow fadeInDown animated"><a href="services.php">Daily mantras chanting Vedic
								Rituals yagya</a></h4>
						<p class="wow fadeInDown animated"> In this yagya special Vedic mantras chanting by trained
							Vedic Vedacharyas, you can order this yagya according to your purpose. You can choose
							between 1-3-6-12 months in this yagya depending on your choice. </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Our Services End-->
<!-- testimonial -->
<div id="testimonials" class="testimonial_section">
	<div class="container-fluid">
		<div class="heading_wrapper wow fadeInDown animated">
			<h2 class="wow fadeInDown animated">What My Client Says</h2>
		</div>
		<div class="row">
			<div id="testimonial" class="owl-carousel owl-theme">
				<div class="item ">
					<div class="col-sm-12">
						<div class="testimonial_inner_matter">
							<img src="assets/image/testimonial/profile.png" class="wow fadeInDown animated">
							<p class="wow fadeInDown animated">Vedacharya Saurabh Kumar is a very energetic and talented astrologer.,
								with great expertise in Vedic yagyas. Very helpful, easy to talk to and provides a
								wealth of knowledge. I recommend him highly for consultation and guidance.</p>
							<h5 class="wow fadeInDown animated">Sahil</h5>
							<p class="text-center"> Canada </p>
						</div>
					</div>
				</div>
				<div class="item ">
					<div class="col-sm-12">
						<div class="testimonial_inner_matter">
							<img src="assets/image/testimonial/profile.png" class="wow fadeInDown animated">
							<p class="wow fadeInDown animated">I had a astrology rapport from Vedacharya Saurabh Kumar, it
								was very good made and he spent a lot of work on it, and everything in it was truth,
								so good, i was surprised about it. Thank 's a lot Vedacharya Saurabh Kumar. Best regards</p>
							<h5 class="wow fadeInDown animated"> Johnson Massey</h5>
							<p class="text-center"> USA </p>
						</div>
					</div>
				</div>
				<div class="item ">
					<div class="col-sm-12">
						<div class="testimonial_inner_matter">
							<img src="assets/image/testimonial/profile.png" class="wow fadeInDown animated">
							<p class="wow fadeInDown animated">Vedacharya Saurabh Kumar is a kind and generous Vedacharya who is
								knowledgeable about Yagya, Astrology (Jyotish), and many wonderful Vedic knowledge.
								He is clear and quick with responses and is a guide along all stages of the path.
							</p>
							<h5 class="wow fadeInDown animated">R.Pandey
							</h5>
							<p class="text-center">Ahmedabad India</p>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="col-sm-12">
						<div class="testimonial_inner_matter">
							<img src="assets/image/testimonial/profile.png" class="wow fadeInDown animated">
							<p class="wow fadeInDown animated">Yagya was last year to my birthday, I receive it 1 week ,
								it was great, wonderful and full of light and happiness. Sometime I will do it again.
								Thank you so much!</p>
							<h5 class="wow fadeInDown animated"> Chanchal </h5>
							<p class="text-center"> UK </p>
						</div>
					</div>
				</div>

				<div class="item">
					<div class="col-sm-12">
						<div class="testimonial_inner_matter">
							<img src="assets/image/testimonial/profile.png" class="wow fadeInDown animated">
							<p class="wow fadeInDown animated">Vedacharya Saurabh Kumar has good knowledge of astrology, Vedic yagya and
								spiritual practices. Had multiple positive conversations and extremely content to get a
								different perspective.</p>
							<h5 class="wow fadeInDown animated"> Rahul </h5>
							<p class="text-center"> Thailand </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- testimonial end -->
<!-- Start Footer -->

<?php include('footer.php') ?>