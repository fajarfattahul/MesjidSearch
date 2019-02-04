<!DOCTYPE html>
<html lang="en">

@include('partial.head')

<body>
		
	<div id="page">
		
	<header class="header menu_fixed">
		<div id="logo">
			<a href="index.html" title="Masjidpedia - Inspirasi Masjid Berdaya">
				<!-- <img src="img/logo.svg" width="165" height="35" alt="" class="logo_normal"> -->
				<!-- <img src="img/logo_sticky.svg" width="165" height="35" alt="" class="logo_sticky"> -->
				<h2 class="text-light logo_normal">MASJIDPEDIA</h2>
				<h2 class="text-dark logo_sticky">MASJIDPEDIA</h2>
			</a>
		</div>
		<ul id="top_menu">
			<li><a href="account.html" class="btn_add">Add Listing</a></li>
			<li><a href="#sign-in-dialog" id="sign-in" class="login" title="Sign In">Sign In</a></li>
			<li><a href="wishlist.html" class="wishlist_bt_top" title="Your wishlist">Your wishlist</a></li>
		</ul>
		<!-- /top_menu -->
		<a href="#menu" class="btn_mobile">
			<div class="hamburger hamburger--spin" id="hamburger">
				<div class="hamburger-box">
					<div class="hamburger-inner"></div>
				</div>
			</div>
		</a>
		<nav id="menu" class="main-menu">
			<ul>
				<li><span><a href="#0">Home</a></span>
					<ul>
						<li><a href="index.html">Home version 1</a></li>
						<li><a href="index-2.html">Home version 2</a></li>
						<li><a href="index-3.html">Home version 3</a></li>
						<li><a href="index-4.html">Home version 4</a></li>
						<li><a href="index-5.html">Home version 5</a></li>
						<li><a href="index-6.html">Home version 6 (GDPR)</a></li>
					</ul>
				</li>
				<li><span><a href="#0">Listings</a></span>
					<ul>
						<li>
							<span><a href="#0">Grid Layout</a></span>
							<ul>
								<li><a href="grid-listings-filterscol-search-aside.html">Sidebar+Search mobile 1</a></li>
								<li><a href="grid-listings-filterstop-search-aside.html">Full+Search mobile 1</a></li>
								<li><a href="grid-listings-filterscol.html">Sidebar+Search mobile 2</a></li>
								<li><a href="grid-listings-filterstop.html">Full+Search mobile 2</a></li>
								<li><a href="grid-listings-isotope.html">Full+Isotope filter</a></li>
							</ul>
						</li>
						<li>
							<span><a href="#0">Row Layout</a></span>
							<ul>
								<li><a href="row-listings-filterscol-search-aside.html">Sidebar+Search mobile 1</a></li>
								<li><a href="row-listings-filterstop-search-aside.html">Full+Search mobile 1</a></li>
								<li><a href="row-listings-filterscol.html">Sidebar+Search mobile 2</a></li>
								<li><a href="row-listings-filterstop.html">Full+Search mobile 2</a></li>
								<li><a href="row-listings-isotope.html">Full+Isotope filter</a></li>
							</ul>
						</li>
						<li><a href="listing-map.html">Listing Map</a></li>
						<li>
							<span><a href="#0">Detail pages</a></span>
							<ul>
								<li><a href="detail-hotel.html">Detail page 1</a></li>
								<li><a href="detail-restaurant.html">Detail page 2</a></li>
								<li><a href="detail-shop.html">Detail page 3</a></li>
							</ul>
						</li>
                        <li><a href="bookings.html">Bookings - Purchases</a></li>
						<li><a href="checkout.html">Checkout</a></li>
						<li><a href="confirm.html">Confirm</a></li>
					</ul>
				</li>
				<li><span><a href="#0">Pages</a></span>
					<ul>
						<li><a href="admin_section/index.html">Admin section</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="account.html">Account</a></li>
						<li><a href="help.html">Help Section</a></li>
						<li><a href="faq.html">Faq Section</a></li>
						<li><a href="wishlist.html">Wishlist page</a></li>
						<li><a href="contacts.html">Contacts</a></li>
						<li>
							<span><a href="#0">Icon Packs</a></span>
							<ul>
								<li><a href="icon-pack-1.html">Icon pack 1</a></li>
								<li><a href="icon-pack-2.html">Icon pack 2</a></li>
								<li><a href="icon-pack-3.html">Icon pack 3</a></li>
								<li><a href="icon-pack-4.html">Icon pack 4</a></li>
							</ul>
						</li>
						<li><a href="about.html">About</a></li>
						<li><a href="media-gallery.html">Media gallery</a></li>
					</ul>
				</li>
				<li><span><a href="#0">Extra</a></span>
					<ul>
						<li><a href="404.html">404 page</a></li>
						<li><a href="contacts-2.html">Contacts 2</a></li>
						<li><a href="pricing-tables.html">Pricing tables</a></li>
						<li><a href="login.html">Login</a></li>
						<li><a href="register.html">Register</a></li>
						<li><a href="menu-options.html">Menu Options</a></li>
						<li><a href="invoice.html">Invoice</a></li>
						<li><a href="coming_soon/index.html">Coming Soon</a></li>
					</ul>
				</li>
				<li><span><a href="#0">Buy template</a></span></li>
			</ul>
		</nav>
	</header>
	<!-- /header -->
	
	<main class="pattern">
		<section class="hero_single version_2">
			<div class="wrapper">
				<div class="container">
					<h3>Temukan masjid di sekitarmu!</h3>
					<p>Discover top rated hotels, shops and restaurants around the world</p>
					<form method="post" action="grid-listings-filterscol.html">
						<div class="row no-gutters custom-search-input-2">
							<div class="col-lg-4">
								<div class="form-group">
									<input class="form-control" type="text" placeholder="What are you looking for...">
									<i class="icon_search"></i>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Where">
									<i class="icon_pin_alt"></i>
								</div>
							</div>
							<div class="col-lg-3">
								<select class="wide">
									<option>All Categories</option>	
									<option>Shops</option>
									<option>Hotels</option>
									<option>Restaurants</option>
									<option>Bars</option>
									<option>Events</option>
									<option>Fitness</option>
								</select>
							</div>
							<div class="col-lg-2">
								<input type="submit" value="Search">
							</div>
						</div>
						<!-- /row -->
					</form>
				</div>
			</div>
		</section>
		<!-- /hero_single -->
		
		<div class="main_categories">
			<div class="container">
				<ul class="clearfix">
					<li>
						<a href="grid-listings-filterscol.html">
							<i class="icon-shop"></i>
							<h3>Shops</h3>
						</a>
					</li>
					<li>
						<a href="grid-listings-filterscol.html">
							<i class="icon-lodging"></i>
							<h3>Hotels</h3>
						</a>
					</li>
					<li>
						<a href="grid-listings-filterscol.html">
							<i class="icon-restaurant"></i>
							<h3>Restaurants</h3>
						</a>
					</li>
					<li>
						<a href="grid-listings-filterscol.html">
							<i class="icon-bar"></i>
							<h3>Bars</h3>
						</a>
					</li>
					<li>
						<a href="grid-listings-filterscol.html">
							<i class="icon-dot-3"></i>
							<h3>More</h3>
						</a>
					</li>
				</ul>
			</div>
			<!-- /container -->
		</div>
		<!-- /main_categories -->
		
		@include('partial.list')
		
		<div class="call_section">
			<div class="wrapper">
				<div class="container margin_80_55">
					<div class="main_title_2">
						<span><em></em></span>
						<h2>How it Works</h2>
						<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="box_how">
								<i class="pe-7s-search"></i>
								<h3>Search Locations</h3>
								<p>An nec placerat repudiare scripserit, temporibus complectitur at sea, vel ignota fierent eloquentiam id.</p>
								<span></span>
							</div>
						</div>
						<div class="col-md-4">
							<div class="box_how">
								<i class="pe-7s-info"></i>
								<h3>View Location Info</h3>
								<p>An nec placerat repudiare scripserit, temporibus complectitur at sea, vel ignota fierent eloquentiam id.</p>
								<span></span>
							</div>
						</div>
						<div class="col-md-4">
							<div class="box_how">
								<i class="pe-7s-like2"></i>
								<h3>Book, Reach or Call</h3>
								<p>An nec placerat repudiare scripserit, temporibus complectitur at sea, vel ignota fierent eloquentiam id.</p>
							</div>
						</div>
					</div>
					<!-- /row -->
					<p class="text-center add_top_30 wow bounceIn" data-wow-delay="0.5s"><a href="account.html" class="btn_1 rounded">Register Now</a></p>
				</div>
				<canvas id="hero-canvas" width="1920" height="1080"></canvas>
			</div>
			<!-- /wrapper -->
		</div>
		<!--/call_section-->
		
		<div class="container margin_80_55">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>Sparker App Available</h2>
				<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
			</div>
			<div class="row justify-content-center text-center">
				<div class="col-md-6">
					<img src="img/mobile.svg" alt="" class="img-fluid add_bottom_45">
					<div class="app_icons">
						<a href="#0" class="pr-lg-2"><img src="img/app_android.svg" alt=""></a>
						<a href="#0" class="pl-lg-2"><img src="img/app_apple.svg" alt=""></a>
					</div>
					<div class="add_bottom_15"><small>*An eum dolores tractatos, aeterno menandri deseruisse ut eum.</small></div>
				</div>
			</div>
		</div>
		<!-- /container -->
	</main>
	<!-- /main -->

    @include('partial.footer')

	</div>
	<!-- page -->
	
	<!-- Sign In Popup -->
	<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
		<div class="small-dialog-header">
			<h3>Sign In</h3>
		</div>
		<form>
			<div class="sign-in-wrapper">
				<a href="#0" class="social_bt facebook">Login with Facebook</a>
				<a href="#0" class="social_bt google">Login with Google</a>
				<div class="divider"><span>Or</span></div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" id="email">
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" id="password" value="">
					<i class="icon_lock_alt"></i>
				</div>
				<div class="clearfix add_bottom_15">
					<div class="checkboxes float-left">
						<label class="container_check">Remember me
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
					</div>
					<div class="float-right mt-1"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
				</div>
				<div class="text-center"><input type="submit" value="Log In" class="btn_1 full-width"></div>
				<div class="text-center">
					Don’t have an account? <a href="register.html">Sign up</a>
				</div>
				<div id="forgot_pw">
					<div class="form-group">
						<label>Please confirm login email below</label>
						<input type="email" class="form-control" name="email_forgot" id="email_forgot">
						<i class="icon_mail_alt"></i>
					</div>
					<p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
					<div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
				</div>
			</div>
		</form>
		<!--form -->
	</div>
	<!-- /Sign In Popup -->
	
	<div id="toTop"></div><!-- Back to top button -->
    
    @include('partial.script')

</body>
</html>