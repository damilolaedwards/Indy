	@extends('layouts.sellermaster')

@section('content')
@include('partials.sellerheader')
	<div class="main-header">
		<!----- start-header---->
			
		<!----- //End-header---->
		<!----start-slider-script---->
			
			
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!----//End-slider-script---->
			<!-- Slideshow 4 -->
			    <div  id="top" class="callbacks_container">
			      <ul class="rslides" id="slider4">
			        <li>
			        	<div class="tittle-head">
			        		<h1>Simple landing page</h1>
			          		<p>Just for you. </p>
			          		<div class="learn-button">
			          			<a class="slide-btn" href="#" style="
							    padding-bottom: 10px;
							    padding-left: 10px;
							    padding-top: 10px;
							    padding-right: 10px;
							    width: 320px;
							    height: 60px;
							">Open your Indy shop</a>
			          		</div>
			          	</div>
			        </li>
			        <li>
			        <div class="tittle-head">
			        		<h1>Lorem ipsum dolor</h1>
			          		<p>Welcome to Indy </p>
			          		<div class="learn-button">
			          			<a class="slide-btn" href="#">Download now</a>
			          		</div>
			          	</div>
			        </li>
			        <li>
			         <div class="tittle-head">
			        		<h1>Simple&pure design</h1>
			          		<p>Sell anything</p>
			          		<div class="learn-button">
			          			<a class="slide-btn" href="#">Download now</a>
			          		</div>
			          	</div>
			        </li>
			      </ul>
			    </div> 
			    <div class="clearfix"> </div>
			    </div>
			<!----- //End-slider---->
			<div id="about" class="about">
				<div class="container">
					<div class="about-head">
						<h3>About</h3>
						<span>Who we are?</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet lectus congue
						mi viverra congue in sed leo. Nullam magna nisl, hendrerit non urna et, eleifend pulvinar
						augue. Suspendisse lacinia molestie ipsum ac semper. Lorem ipsum dolor sit amet,
						consectetur adipiscing elit. Praesent vel scelerisque purus.</p>
					</div>
				</div>
				
			</div>
			<!----- //End-about---->
			<div id="services" class="services">
       		<div class="container">
       		   <div class="gallery-head text-center">
				  <h3>Services</h3>
				  <p>What we do?.</p>
			    </div>
       			<div class="row text-center feature">
       				<div class="col-md-4 service_grid">
       					<i class="icon1"> </i>
       					<h3>iOS Apps</h3>
       					<p>Vestibulum odio risus, interdum fringilla vulputate ac, placerat in mi. Vivamus pharetra, mauris vitae cursus ultricies.</p>
       				</div>
       				<div class="col-md-4 service_grid">
       				<i class="icon2"> </i>
       					<h3>Windows Apps</h3>
       					<p>Vestibulum odio risus, interdum fringilla vulputate ac, placerat in mi. Vivamus pharetra, mauris vitae cursus ultricies.</p>
       				</div>
       				<div class="col-md-4 service_grid">
       					<i class="icon3"> </i>
       					<h3>Android Apps</h3>
       					<p>Vestibulum odio risus, interdum fringilla vulputate ac, placerat in mi. Vivamus pharetra, mauris vitae cursus ultricies.</p>
       				</div>
       			</div>
       		</div>
       	</div>
	 <!--End-services-->
	 <div class="portfolio">
	 	<div class="container">
	 		<div class="potrfolio-head">
		 		<h2>This .psd theme is absolutely free!</h2>
				 <a class="prt-btn" href="#">Just download it!</a>
			 </div>
		</div>
	</div>
 	<div id="portfolio" class="potrfolio-content">
 		<div class="container">
 			<div class="port-head">
 				<h3>Portfolio</h3>
 				<p>Our work </p>
 			</div>
			 	<div id="portfoliolist">
					<div class="portfolio-grids">
						<div class="portfolio-wrapper">		
							<div class="view second-effect">
								<img src="images/p-1.png" />
								  <div class="mask">
										<a href="#" class="info">Read More</a>
								  </div>
							</div>
						</div>
					</div>	
					<div class="portfolio-grids">
						<div class="portfolio-wrapper">		
							<div class="view second-effect">
								<img src="images/p-2.png" />
									 <div class="mask">
										<a href="#" class="info">Read More</a>
									 </div>
							</div>
						</div>
					</div>	
					<div class="portfolio-grids">
						<div class="portfolio-wrapper">		
							<div class="view second-effect">
								<img src="images/p-3.png" />
								  <div class="mask">
									 <a href="#" class="info">Read More</a>
								 </div>
							</div>
						</div>
					</div>	
					<div class="portfolio-grids">
						<div class="portfolio-wrapper">		
							<div class="view second-effect">
							 <img src="images/p-4.png" />
								<div class="mask">
									<a href="#" class="info">Read More</a>
								</div>
							</div>
						</div>
					</div>
					<div class="portfolio-grids">
						<div class="portfolio-wrapper">		
							<div class="view second-effect">
								<img src="images/p-5.png" />
								 <div class="mask">
									<a href="#" class="info">Read More</a>
								</div>
							</div>
						</div>
					</div>	
				</div>
			 </div>
	 	 </div>
	 	  <!--End-portfolio-->
	 	    <!--End-portfolio-->
	 	 <div id="team" class="team">
	 	 	<div class="container">
	 	 		<div class="team-head">
	 	 			<h3>The team </h3>
 					<p>Meet us!</p>
	 	 		</div>
       			<div class="row text-center teams">
       				<div class="col-md-4 team_grid">
       					<div class="view2 second-effect2">
							 <img src="images/tm-1.png" />
								<div class="mask">
									<a href="#" class="info">Read More</a>
								</div>
							</div>
       					<h3>John Appleseed</h3>
       					<p>Vestibulum odio risus, interdum fringilla vulputate ac, placerat in mi. Vivamus pharetra, mauris vitae cursus ultricies.</p>
       				</div>
       				<div class="col-md-4 team_grid">
       				<div class="view2 second-effect2">
							 <img src="images/tm-2.png" />
								<div class="mask">
									<a href="#" class="info">Read More</a>
								</div>
							</div>
       					<h3>John Appleseed</h3>
       					<p>Vestibulum odio risus, interdum fringilla vulputate ac, placerat in mi. Vivamus pharetra, mauris vitae cursus ultricies.</p>
       				</div>
       				<div class="col-md-4 team_grid">
       					<div class="view2 second-effect2">
							 <img src="images/tm-3.png" />
								<div class="mask">
									<a href="#" class="info">Read More</a>
								</div>
							</div>
       					<h3>John Appleseed</h3>
       					<p>Vestibulum odio risus, interdum fringilla vulputate ac, placerat in mi. Vivamus pharetra, mauris vitae cursus ultricies.</p>
       				</div>
       			</div>
       		</div>
	 	 </div>
	 	 <!--End-team-->
	 	  <div class="contact">
	 	  	<div class="container">
	 		<div class="contact-head">
		 		<h3>It'still free!</h3>
				 <a class="con-btn" href="#">Just download it!</a>
			 </div>
			</div>
	 	  </div>
	 	  @stop