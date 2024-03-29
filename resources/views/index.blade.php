@extends('layouts.app')
@section('content')
	<!--banner-slider-->
	<!-- main-slider -->
	<section class="w3l-main-slider" id="home">
		<div class="banner-content">
			<div class="owl-one owl-carousel owl-theme">
				<div class="item">
					<li>
						<div class="slider-info banner-view bg bg2">
							<div class="banner-info">
								<div class="container">
									<div class="banner-info-bg">
{{--                    		<h6>@ itps</h6>--}}
										<h5>Seeking The Best Internship Always
										</h5>
										<a class="btn mt-sm-5 mt-4" href="{{route('register')}}">Apply for Placement</a>
									</div>
								</div>
							</div>
						</div>
					</li>
				</div>
				{{--<div class="item">
                    <li>
                        <div class="slider-info banner-view bg bg2">
                            <div class="banner-info">
                                <div class="container">
                                    <div class="banner-info-bg">
                                        --}}{{--                    		<h6>@ itps</h6>--}}{{--
                                        <h5>Seeking The Best Internship Always
                                        </h5>
                                        <a class="btn mt-sm-5 mt-4" href="services.html">Apply for Placement</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
				</div>
				<div class="item">
                    <li>
                        <div class="slider-info banner-view bg bg2">
                            <div class="banner-info">
                                <div class="container">
                                    <div class="banner-info-bg">
                                        --}}{{--                    		<h6>@ itps</h6>--}}{{--
                                        <h5>Seeking The Best Internship Always
                                        </h5>
                                        <a class="btn mt-sm-5 mt-4" href="services.html">Apply for Placement</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
				</div>
				<div class="item">
                    <li>
                        <div class="slider-info banner-view bg bg2">
                            <div class="banner-info">
                                <div class="container">
                                    <div class="banner-info-bg">
                                        --}}{{--                    		<h6>@ itps</h6>--}}{{--
                                        <h5>Seeking The Best Internship Always
                                        </h5>
                                        <a class="btn mt-sm-5 mt-4" href="services.html">Apply for Placement</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
				</div>--}}
			</div>
			<ul class="slide-social-icons list-unstyled">
				<li class="share">Share On : </li>
				<li>
					<a href="#" class="w3pvt_facebook">
						<span class="fa fa-facebook-f"></span>
					</a>
				</li>
				<li>
					<a href="#" class="w3pvt_twitter">
						<span class="fa fa-twitter"></span>
					</a>
				</li>
				<li>
					<a href="#" class="w3pvt_dribble">
						<span class="fa fa-dribbble"></span>
					</a>
				</li>
				<li>
					<a href="#" class="w3pvt_google">
						<span class="fa fa-google-plus"></span>
					</a>
				</li>
			</ul>
		</div>

	</section>
	<!-- /main-slider -->
	<!-- //banner-slider-->
	<!-- /content-6-->
	<section class="w3l-content-6">
		<!-- /content-6-main-->
		<div class="content-6-mian py-5">
			<div class="container py-lg-5">
				<div class="title-content text-left mb-4">
				<h6 class="sub-title">About Us</h6>
					<h3 class="hny-title">Welcome to itps</h3>
				</div>
				<div class="content-info-in row">
					<div class="content-gd col-lg-6 pl-lg-4">
						<p>Industrial Training Placement Securer (ITPS) Is an internship consulting firm duly registered with
                            the Cooperate Affairs Commission of Nigeria. We seek to secure the best Industrial Training Placement
                            that suit your career. At ITPS we make use of our
                            connections and relationship with companies in Nigeria to help the IT students secure the best Industrial
                            Training Placement (ITP) which suit their area of discipline.</p>
					</div>
					<div class="content-gd col-lg-6 pl-lg-4 pl-lg-4">
						<p>Industrial Training Placement Securer (ITPS) Is an internship consulting firm duly
                            registered with the Cooperate Affairs Commission of Nigeria. We seek to secure the best Industrial
                            Training Placement that suit your career. At ITPS we make use of our connections
                            and relationship with companies in Nigeria to help the IT students secure the best Industrial Training
                            Placement (ITP) which suit their area of discipline.</p>
					</div>

				</div>
		</div>
	</section>
	<!-- //content-6-->
	<!-- services block3 -->
	<div class="w3l-open-block-services py-5">
		<div class="container py-lg-5 pt-4">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="card text-center">
						<div class="icon-holder">
							<span class="fa fa-pencil service-icon" aria-hidden="true"></span>
						</div>
						<h4 class="mission">We Support</h4>
						<div class="open-description">
							<p>We support on how to write final year project report.</p>
							<a href="{{route('register')}}" class="btn btn-warning">Signup</a>
						</div>
					</div>
				</div>
                <div class="col-lg-4 col-md-6">
                    <div class="card text-center">
                        <div class="icon-holder">
                            <span class="fa fa-signal service-icon" aria-hidden="true"></span>
                        </div>
                        <h4 class="mission">We Seek</h4>
                        <div class="open-description">
                            <p>We Seek to secure the best ITP for potential IT students</p>
                            <a href="{{route('register')}}" class="btn btn-warning">Signup</a>
                        </div>
                    </div>
                </div>

				<div class="col-lg-4 col-md-4 mt-lg-0 mt-5 pt-lg-0 pt-3">
					<div class="card text-center">
						<div class="icon-holder">
							<span class="fa fa-magic service-icon" aria-hidden="true"></span>
						</div>
						<h4 class="mission">We Guide</h4>
						<div class="open-description">
							<p>We guide the IT students on how to write IT report. </p>
							<a href="#read" class="btn btn-warning">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //services block3 -->
	<!-- /w3l-content-with-photo-4-->
	<section class="w3l-content-with-photo-4">
		<!-- /content-grids-->
		<div class="content-photo-info py-5">
			<div class="container py-lg-5">
				<!-- /row-->
				<div class="content-photo-grids row">

					<div class="photo-6-inf-right col-lg-6 text-left pr-lg-5 mb-lg-0 mb-4">
						<h6 class="sub-title">How to Apply</h6>
						<h3 class="hny-title">  FOLLOW THE STEPS BELOW TO APPLY
						</h3>
						<div class="servehny-1 mt-4">

								<a href="#" class="ser1"><span class="fa fa-check"></span> As you log on to this website</a>
                                <a href="#" class="ser1"><span class="fa fa-check"></span>  Take your time to read through all the instructions on the web page before you apply</a>
                                <a href="#" class="ser1"><span class="fa fa-check"></span>  Make a non-refundable registration fee of #1000</a>
                                <a href="#" class="ser1"><span class="fa fa-check"></span> Create a portal (An email and user name is required)</a>
                                <a href="#" class="ser1"><span class="fa fa-check"></span>  Apply for Industrial Training Placement by filling the
                                    ITP application form (A passport photograph is required)</a>
                                <a href="#" class="ser1"><span class="fa fa-check"></span> Upload your IT request letter if you already have one,
                                    but in case you do not have one yet,
                                    you can skip the stage and Later send the IT request letter to us through (industrialtps@gmail.com) for verification.</a>


								<a href="# "class="ser1"><span class="fa fa-check"></span>Take your online aptitude test before submission of application	</a>
								<a href="#link" class="ser1"><span class="fa fa-check"></span>  Wait till we notify you for IT placement
								</a>





                        </div>
						<div class="read">
                            <hr>
                            <h4>Click the button below to apply</h4>
							<a class="btn mt-4" href="{{route('register')}}">   Apply</a>
						</div>
					</div>
					<div class="photo-6-inf-left col-lg-6 pr-lg-4">
						<a href="#"><img src="assets/images/agric2.jpg" class="img-fluid" alt=""></a>
					</div>
				</div>
				<!-- //row-->
			</div>
		</div>
	</section>
	<!-- /w3l-content-with-photo-4-->


	<!-- /specification-6-->
	{{--<section class="w3l-specification-6">
		<div class="specification-6-mian py-5">
			<div class="container py-lg-5">
				<div class="row story-6-grids text-left">
					<div class="col-lg-5 story-gd">
						<img src="assets/images/ab1.jpg" class="img-fluid" alt="/">
					</div>
					<div class="col-lg-7 story-gd pl-lg-4">
						<div class="title-content text-left mb-lg-5 mt-4">
							<h6 class="sub-title">For a New smile</h6>
							<h3 class="hny-title">Caring Technologies For Your Dental Health</h3>
							<p>Lorem illum facere aperiam sequi optio consectetur adipisicing elitFuga, suscipit totam
								animi
								consequatur saepe blanditiis.Lorem ipsum dolor sit amet</p>
						</div>
						<div class="skill_info mt-lg-5 mt-4">
							<div class="stats_left">
								<div class="counter_grid">
									<div class="icon_info">
										<p class="counter">165</p>
										<h4>Daily appointments</h4>
										<p class="counter-para">Lorem ipsum dolor sit amet consectetur adipisicing elit
										</p>
									</div>
								</div>
							</div>
							<div class="stats_left">
								<div class="counter_grid">
									<div class="icon_info">
										<p class="counter">563</p>
										<h4>Happy Clients</h4>
										<p class="counter-para">Lorem ipsum dolor sit amet consectetur adipisicing elit
										</p>
									</div>
								</div>
							</div>

						</div>

					</div>
				</div>
			</div>
		</div>
	</section>--}}
	<!-- //specification-6-->
	{{--<section class="w3l-about5">
		<div class="container-fluid px-0">
			<div class="history-info position-relative">
				<div class="heading text-center mx-auto">
					<h3 class="hny-title two">Creating the healthy smile you want through science and artistry.</h3>
					<p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit sunt in culpa qui officia
						sed deserunt mollit anim id est laborum mollit anim id est nulla.</p>
					<a href="#small-dialog" class="popup-with-zoom-anim play-view text-center position-absolute">
						<span class="video-play-icon">
							<span class="fa fa-play"></span>
						</span>
					</a>
				</div>
				<div class="position-relative">

					<!-- <a href="#popup-video" class="play-view text-center position-absolute">
							<span class="video-play-icon">
								<span class="fa fa-play"></span>
							</span>
						</a> -->


					<!-- dialog itself, mfp-hide class is required to make dialog hidden -->
					<div id="small-dialog" class="zoom-anim-dialog mfp-hide">
						<iframe src="https://player.vimeo.com/video/169036704" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
					</div>

					<style type="text/css">
						/* Styles for dialog window */
						#small-dialog {
							background: white;
							padding: 5px;
							max-width: 750px;
							margin: 40px auto;
							position: relative;
						}

						div#small-dialog iframe {
							width: 100%;
							height: 400px;
							display: block;
						}


						/**
		   * Fade-zoom animation for first dialog
		   */

						/* start state */
						.my-mfp-zoom-in .zoom-anim-dialog {
							opacity: 0;

							-webkit-transition: all 0.2s ease-in-out;
							-moz-transition: all 0.2s ease-in-out;
							-o-transition: all 0.2s ease-in-out;
							transition: all 0.2s ease-in-out;



							-webkit-transform: scale(0.8);
							-moz-transform: scale(0.8);
							-ms-transform: scale(0.8);
							-o-transform: scale(0.8);
							transform: scale(0.8);
						}

						/* animate in */
						.my-mfp-zoom-in.mfp-ready .zoom-anim-dialog {
							opacity: 1;

							-webkit-transform: scale(1);
							-moz-transform: scale(1);
							-ms-transform: scale(1);
							-o-transform: scale(1);
							transform: scale(1);
						}

						/* animate out */
						.my-mfp-zoom-in.mfp-removing .zoom-anim-dialog {
							-webkit-transform: scale(0.8);
							-moz-transform: scale(0.8);
							-ms-transform: scale(0.8);
							-o-transform: scale(0.8);
							transform: scale(0.8);

							opacity: 0;
						}

						/* Dark overlay, start state */
						.my-mfp-zoom-in.mfp-bg {
							opacity: 0;
							-webkit-transition: opacity 0.3s ease-out;
							-moz-transition: opacity 0.3s ease-out;
							-o-transition: opacity 0.3s ease-out;
							transition: opacity 0.3s ease-out;
						}

						/* animate in */
						.my-mfp-zoom-in.mfp-ready.mfp-bg {
							opacity: 0.8;
						}

						/* animate out */
						.my-mfp-zoom-in.mfp-removing.mfp-bg {
							opacity: 0;
						}



						/**
		   * Fade-move animation for second dialog
		   */

						/* at start */
						.my-mfp-slide-bottom .zoom-anim-dialog {
							opacity: 0;
							-webkit-transition: all 0.2s ease-out;
							-moz-transition: all 0.2s ease-out;
							-o-transition: all 0.2s ease-out;
							transition: all 0.2s ease-out;

							-webkit-transform: translateY(-20px) perspective(600px) rotateX(10deg);
							-moz-transform: translateY(-20px) perspective(600px) rotateX(10deg);
							-ms-transform: translateY(-20px) perspective(600px) rotateX(10deg);
							-o-transform: translateY(-20px) perspective(600px) rotateX(10deg);
							transform: translateY(-20px) perspective(600px) rotateX(10deg);

						}

						/* animate in */
						.my-mfp-slide-bottom.mfp-ready .zoom-anim-dialog {
							opacity: 1;
							-webkit-transform: translateY(0) perspective(600px) rotateX(0);
							-moz-transform: translateY(0) perspective(600px) rotateX(0);
							-ms-transform: translateY(0) perspective(600px) rotateX(0);
							-o-transform: translateY(0) perspective(600px) rotateX(0);
							transform: translateY(0) perspective(600px) rotateX(0);
						}

						/* animate out */
						.my-mfp-slide-bottom.mfp-removing .zoom-anim-dialog {
							opacity: 0;

							-webkit-transform: translateY(-10px) perspective(600px) rotateX(10deg);
							-moz-transform: translateY(-10px) perspective(600px) rotateX(10deg);
							-ms-transform: translateY(-10px) perspective(600px) rotateX(10deg);
							-o-transform: translateY(-10px) perspective(600px) rotateX(10deg);
							transform: translateY(-10px) perspective(600px) rotateX(10deg);
						}

						/* Dark overlay, start state */
						.my-mfp-slide-bottom.mfp-bg {
							opacity: 0;

							-webkit-transition: opacity 0.3s ease-out;
							-moz-transition: opacity 0.3s ease-out;
							-o-transition: opacity 0.3s ease-out;
							transition: opacity 0.3s ease-out;
						}

						/* animate in */
						.my-mfp-slide-bottom.mfp-ready.mfp-bg {
							opacity: 0.8;
						}

						/* animate out */
						.my-mfp-slide-bottom.mfp-removing.mfp-bg {
							opacity: 0;
						}
					</style>

					<!-- popup -->
					<div id="popup-video" class="pop-overlay">
						<div class="popup">
							<div class="align-popup-video">
								<iframe src="https://www.youtube.com/embed/JemJbNJ4ZtU" frameborder="0"
									allowfullscreen></iframe>
								<a class="close" href="#portfolio">&times;</a>
							</div>

						</div>
					</div>
					<!-- /popup -->
				</div>
			</div>
		</div>
	</section>--}}
	<!--/testimonials-->
	{{--<section class="w3l-free-consultion">
		<div class="container">
			<div class="consultation-grids">
				<div class="apply-form">
					<h5>Free Consultation</h5>
					<form action="#" method="post">
						<div class="admission-form">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Full Name*" required="">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Phone Number*" required="">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Email*" required="">
							</div>
							<select class="form-control">
								<option>Dental Crowns</option>
								<option>Teeth whitening</option>
								<option>Others</option>
							</select>
						</div>
						<div class="form-group">
							<textarea name="Comment" class="form-control" placeholder="Message*" required=""></textarea>
						</div>
						<button type="submit" class="btn btn-primary submit">Get a Free Consultation</button>
					</form>
				</div>
				<div class="consultation-img">
					<img src="assets/images/ab.jpg" class="img-fluid" alt="/">
				</div>
			</div>
		</div>
	</section>--}}
	<section class="w3l-testimonials" id="testimonials">
		<div class="testimonials py-lg-5 py-4">
			<div class="container py-lg-5">
				<div class="row pb-lg-4 pb-5">
					<div class="col-md-10 mx-auto">
						<div class="owl-two owl-carousel owl-theme">
							<div class="item">
								<div class="slider-info mt-lg-4 mt-3">
									<div class="text-content">
										<div class="test-left">
											<div class="img-circle">
												{{--<img src="assets/images/c1.jpg" class="img-fluid testimonial-img"
													alt="client">--}}
											</div>
											<div class="name">
												<h4>Soji Adeniji</h4>
												<p class="description">Lautech</p>
											</div>
										</div>
										<div class="message">
											<div class="quote-icon"><span class="fa fa-quote-left"
													aria-hidden="true"></span></div>
											<p> Thanks for helping out with my Industrial attachment placement </p>

										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="slider-info mt-lg-4 mt-3">
									<div class="text-content">
										<div class="test-left">
											<div class="img-circle">
												{{--<img src="assets/images/c2.jpg" class="img-fluid testimonial-img"
													alt="client">--}}
											</div>
                                            <div class="name">
                                                <h4>Soji Adeniji</h4>
                                                <p class="description">Lautech</p>
                                            </div>
										</div>
										<div class="message">
											<div class="quote-icon"><span class="fa fa-quote-left"
													aria-hidden="true"></span></div>
                                            <p> Thanks for helping out with my Industrial attachment placement </p>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="slider-info mt-lg-4 mt-3">
									<div class="text-content">
										<div class="test-left">
											<div class="img-circle">
												{{--<img src="assets/images/c4.jpg" class="img-fluid testimonial-img"
													alt="client">--}}
											</div>
                                            <div class="name">
                                                <h4>Soji Adeniji</h4>
                                                <p class="description">Lautech</p>
                                            </div>
										</div>
										<div class="message">
											<div class="quote-icon"><span class="fa fa-quote-left"
													aria-hidden="true"></span></div>
                                            <p> Thanks for helping out with my Industrial attachment placement </p>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--//testimonials-->
@endsection
