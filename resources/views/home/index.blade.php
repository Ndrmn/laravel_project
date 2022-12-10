@extends('../main.app')

@section('title-block')

Main

@endsection

@section('content')

<div class="wrapper">
<main>
				<!-- Get started -->		
				<section class="getStarted block">
					<div class="getStarted__offer">
						<h1 class="getStarted__title">
							Want anything to be easy with <b>LaslesVPN.</b>
						</h1>
						<h4 class="getStarted__subTitle">
							Provide a network for all your needs with ease and fun using <b>LaslesVPN</b> discover interesting features from us.
						</h4>
						<button class="getStarted__button">
							Get Started
						</button>
					</div>
					<div class="getStarted__image">
						<img src="img/offerImage.svg" alt="" class="img">
					</div>
				</section>
				<!-- Statistics -->
				<section class="stat block">
					<div class="stat__frame grayShadow">

						<div class="stat_block">
							<div class="stat__image">
								<img src="img/user.svg" alt="" class="img">
							</div>
							<div class="stat__text">
								<span class="stat__title">
									90+
								</span>
								<span class="stat__subtitle">
									Users
								</span>
							</div>
						</div>

						<div class="stat__line">
						</div>

						<div class="stat_block">
							<div class="stat__image">
								<img src="img/location.svg" alt="" class="img">
							</div>
							<div class="stat__text">
								<span class="stat__title">
									30+
								</span>
								<span class="stat__subtitle">
									Locations
								</span>
							</div>
						</div>

						<div class="stat__line">
						</div>

						<div class="stat_block">
							<div class="stat__image">
								<img src="img/server.svg" alt="" class="img">
							</div>
							<div class="stat__text">
								<span class="stat__title">
									50+
								</span>
								<span class="stat__subtitle">
									Servers
								</span>
							</div>
						</div>

					</div>
				</section>
				<!-- Features -->
				<section class="features block">
					<div class="features__block">
						<div class="features__image">
							<img src="img/featuresImage.svg" alt="" class="img">
						</div>
						<div class="features__text">
							<span class="features__title">
								We Provide Many Features You Can Use
							</span>
							<span class="features__subtitle">
								You can explore the features that we provide with fun and have their own functions each feature.
							</span>
							<ul>
								<li class="features__list">
									<div class="features__check">
										<img class="img" src="img/check.svg" alt="">
									</div>
									<span class="features__item">Powerfull online protection.</span>
								</li>
								<li class="features__list">
									<div class="features__check">
										<img class="img" src="img/check.svg" alt="">
									</div>
									<span class="features__item">Internet without borders.</span>
								</li>
								<li class="features__list">
									<div class="features__check">
										<img class="img" src="img/check.svg" alt="">
									</div>
									<span class="features__item">Supercharged VPN</span>
								</li>
								<li class="features__list">
									<div class="features__check">
										<img class="img" src="img/check.svg" alt="">
									</div>
									<span class="features__item">No specific time limits.</span>
								</li>
							</ul>
						</div>
					</div>
				</section>
				<!-- Plan -->
				<section class="plan containerTitle">
					<div class="plan__block block blockTitle">
						<div class="plan__title tileTitle">
							Choose Your Plan
						</div>
						<div class="plan__subtitle subtitleTitle">
							Let's choose the package that is best for you and explore it happily and cheerfully.
						</div>
					</div>
				</section>
				<!-- Cards Plans -->
				<section class="cards">
					<div class="cards__block block">

						<div class="cards__card">							
							<div class="cards__image">
								<img src="img/box.svg" alt="" class="img">
							</div>
							<h3 class="cards__title">
								Free Plan
							</h3>
							<ul class="cards__listBlock">
								<li class="cards__list">
									<div class="cards__icon">
										<img src="img/check2.svg" alt="" class="img">
									</div>
									<span class="cards__text">Unlimited Bandwitch</span>
								</li>
								<li class="cards__list">
									<div class="cards__icon">
										<img src="img/check2.svg" alt="" class="img">
									</div>
									<span class="cards__text">Encrypted Connection</span>
								</li>
								<li class="cards__list">
									<div class="cards__icon">
										<img src="img/check2.svg" alt="" class="img">
									</div>
									<span class="cards__text">No Traffic Logs</span>
								</li>
								<li class="cards__list">
									<div class="cards__icon">
										<img src="img/check2.svg" alt="" class="img">
									</div>
									<span class="cards__text">Works on All Devices</span>
								</li>
							</ul>
							<div class="cards__price"><b>Free</b></div>
							<button class="cards__button">Select</button>
						</div>
						<div class="cards__card">
							<div class="cards__image">
								<img src="img/box.svg" alt="" class="img">
							</div>
							<h3 class="cards__title">
								Standard Plan
							</h3>

							<ul class="cards__listBlock">
								<li class="cards__list">
									<div class="cards__icon">
										<img src="img/check2.svg" alt="" class="img">
									</div>
									<span class="cards__text">Unlimited Bandwitch</span>
								</li>
								<li class="cards__list">
									<div class="cards__icon">
										<img src="img/check2.svg" alt="" class="img">
									</div>
									<span class="cards__text">Encrypted Connection</span>
								</li>
								<li class="cards__list">
									<div class="cards__icon">
										<img src="img/check2.svg" alt="" class="img">
									</div>
									<span class="cards__text">Yes Traffic Logs</span>
								</li>
								<li class="cards__list">
									<div class="cards__icon">
										<img src="img/check2.svg" alt="" class="img">
									</div>
									<span class="cards__text">Works on All Devices</span>
								</li>

								<li class="cards__list">
									<div class="cards__icon">
										<img src="img/check2.svg" alt="" class="img">
									</div>
									<span class="cards__text">Connect Anyware</span>
								</li>
							</ul>

							<div class="cards__price"><b>$9</b> / mo</div>
							<button class="cards__button">Select</button>
						</div>

						<div class="cards__card">
							<div class="cards__image">
								<img src="img/box.svg" alt="" class="img">
							</div>
							<h3 class="cards__title">
								Premium Plan
							</h3>

							<ul class="cards__listBlock">
								<li class="cards__list">
									<div class="cards__icon">
										<img src="img/check2.svg" alt="" class="img">
									</div>
									<span class="cards__text">Unlimited Bandwitch</span>
								</li>
								<li class="cards__list">
									<div class="cards__icon">
										<img src="img/check2.svg" alt="" class="img">
									</div>
									<span class="cards__text">Encrypted Connection</span>
								</li>
								<li class="cards__list">
									<div class="cards__icon">
										<img src="img/check2.svg" alt="" class="img">
									</div>
									<span class="cards__text">Yes Traffic Logs</span>
								</li>
								<li class="cards__list">
									<div class="cards__icon">
										<img src="img/check2.svg" alt="" class="img">
									</div>
									<span class="cards__text">Works on All Devices</span>
								</li>
								<li class="cards__list">
									<div class="cards__icon">
										<img src="img/check2.svg" alt="" class="img">
									</div>
									<span class="cards__text">Connect Anyware</span>
								</li>
								<li class="cards__list">
									<div class="cards__icon">
										<img src="img/check2.svg" alt="" class="img">
									</div>
									<span class="cards__text">Get New Features</span>
								</li>
							</ul>

							<div class="cards__price"><b>$12</b> / mo</div>
							<button class="cards__button">Select</button>
						</div>
					</div>
				</section>
				<!-- Global network -->
				<section class="network containerTitle">
					<div class="network__block block blockTitle">
						<h2 class="network__title tileTitle">
							Huge Global Network of Fast VPN
						</h2>
						<h4 class="network__subtitle subtitleTitle">
							See <b>LaslesVPN</b> everywhere to make it easier for you when you move locations.
						</h4>
					</div>
				</section>
				<!-- Map -->
				<section class="map containerTitle">
					<div class="map__image block">
						<img src="img/map.svg" alt="" class="img">					
					</div>
				</section>
				<!-- Clients -->
				<section class="clients containerTitle">
					<div class="clients__block block">
						<div class="clients__logo">
							<img src="img/netflix2.png" alt="" class="img">
						</div>
						<div class="clients__logo">
							<img src="img/reddit2.png" alt="" class="img">
						</div>
						<div class="clients__logo">
							<img src="img/amazon2.png" alt="" class="img">
						</div>
						<div class="clients__logo">
							<img src="img/discord2.png" alt="" class="img">
						</div>
						<div class="clients__logo">
							<img src="img/spotify2.png" alt="" class="img">
						</div>
					</div>
				</section>
				<!-- Trusted -->
				<section class="trusted containerTitle">
					<div class="trusted__block block blockTitle">
						<h2 class="trusted__title tileTitle">
							Trusted by Thousands of Happy Customer
						</h2>
						<h4 class="trusted__subtitle subtitleTitle">
							These are the stories of our customers who have joined us with great pleasure when using this crazy feature.
						</h4>
					</div>
				</section>
				<!-- Customers -->
				<section class="customers">
					<div class="customers__block block">
<!-- 						<div class="customers__cards"> -->

<!-- 							<div class="customers__card">
								<div class="customer__user">
									<div class="customer__info">
										<div class="customer__photo">
											<img src="img/robert.svg" alt="" class="img">
										</div>
										<div class="customer__text">
											<span class="customer__name">
												Viezh Robert
											</span>
											<span class="customer__location">
												Warsaw, Poland
											</span>
										</div>
									</div>
									<div class="customer__rating">
										<span class="customer__rate">
											4.5
										</span>
										<div class="customer__star">
											<img src="img/star.svg" alt="" class="img">
										</div>
									</div>
								</div>
								<p class="customer__comment">
									“Wow... I am very happy to use this VPN, it turned out to be more than my expectations and so far there have been no problems. LaslesVPN always the best”.
								</p>
							</div>

							<div class="customers__card">
								<div class="customer__user">
									<div class="customer__info">
										<div class="customer__photo">
											<img src="img/christy.svg" alt="" class="img">
										</div>
										<div class="customer__text">
											<span class="customer__name">
												Yessica Christy
											</span>
											<span class="customer__location">
												Shanxi, China
											</span>
										</div>
									</div>
									<div class="customer__rating">
										<span class="customer__rate">
											4.5
										</span>
										<div class="customer__star">
											<img src="img/star.svg" alt="" class="img">
										</div>
									</div>
								</div>
								<p class="customer__comment">
									“I like it because I like to travel far and still can connect with high speed.”.
								</p>
							</div>

							<div class="customers__card">
								<div class="customer__user">
									<div class="customer__info">
										<div class="customer__photo">
											<img src="img/kim.svg" alt="" class="img">
										</div>
										<div class="customer__text">
											<span class="customer__name">
												Kim Young Jou
											</span>
											<span class="customer__location">
												Seoul, South Korea
											</span>
										</div>
									</div>
									<div class="customer__rating">
										<span class="customer__rate">
											4.5
										</span>
										<div class="customer__star">
											<img src="img/star.svg" alt="" class="img">
										</div>
									</div>
								</div>
								<p class="customer__comment">
									“This is very unusual for my business that currently requires a virtual private network that has high security.”.
								</p>
							</div>

							<div class="customers__card">
								<div class="customer__user">
									<div class="customer__info">
										<div class="customer__photo">
											<img src="img/christy.svg" alt="" class="img">
										</div>
										<div class="customer__text">
											<span class="customer__name">
												Andrii Kultyshev
											</span>
											<span class="customer__location">
												Kharkiv, Ukraine
											</span>
										</div>
									</div>
									<div class="customer__rating">
										<span class="customer__rate">
											4.5
										</span>
										<div class="customer__star">
											<img src="img/star.svg" alt="" class="img">
										</div>
									</div>
								</div>
								<p class="customer__comment">
									“Hello! This is my test-project!”.
								</p>
							</div> -->
<!-- 						</div> -->
					</div>
				</section>
				<!-- Buttons -->
				<section class="buttons">
					<div class="buttons__block block">
<!-- 						<div class="buttons__left">
							<button class="button_dot button_redDot"></button>
							<button class="button_dot"></button>
							<button class="button_dot"></button>
							<button class="button_dot"></button>
						</div> -->
 						<div class="buttons__left">
<!--  							<ul class="buttons__left ">

 								
 							
 							<li class="">
 								<button type="button" class="button_dot button_redDot"></button>
 							</li>
 							<li class="">
 								<button type="button" class="button_dot"></button>
 							</li>
 							<li class="">
 								<button type="button" class="button_dot"></button>
 							</li>
 							<li class="">
 								<button type="button" class="button_dot"></button>
 							</li>
 							</ul> -->
						</div>					

						<div class="buttons__right">
							<div class="buttons__arrow left">
								<svg class="buttons__arrowLeft" width=“20” height="19" viewBox="0 0 20 19" fill=“none” xmlns="http://www.w3.org/2000/svg">
									<path d="M18.75 8.00291H3.925L8.4625 2.55291C8.67467 2.29764 8.77675 1.96854 8.74628 1.638C8.7158 1.30747 8.55527 1.00258 8.3 0.790408C8.04473 0.578235 7.71563 0.476157 7.3851 0.506632C7.05456 0.537107 6.74967 0.697637 6.5375 0.952908L0.2875 8.45291C0.245451 8.51256 0.207849 8.57523 0.175 8.64041C0.175 8.70291 0.175 8.74041 0.0875002 8.80291C0.0308421 8.94623 0.0011764 9.0988 0 9.25291C0.0011764 9.40702 0.0308421 9.55958 0.0875002 9.70291C0.0875002 9.76541 0.0874998 9.80291 0.175 9.86541C0.207849 9.93058 0.245451 9.99325 0.2875 10.0529L6.5375 17.5529C6.65503 17.694 6.8022 17.8075 6.96856 17.8853C7.13491 17.963 7.31636 18.0032 7.5 18.0029C7.79207 18.0035 8.07511 17.9018 8.3 17.7154C8.42657 17.6105 8.5312 17.4816 8.60789 17.3362C8.68458 17.1907 8.73183 17.0316 8.74692 16.8679C8.76202 16.7042 8.74466 16.5391 8.69586 16.3821C8.64705 16.2251 8.56775 16.0792 8.4625 15.9529L3.925 10.5029H18.75C19.0815 10.5029 19.3995 10.3712 19.6339 10.1368C19.8683 9.90237 20 9.58443 20 9.25291C20 8.92139 19.8683 8.60345 19.6339 8.36902C19.3995 8.1346 19.0815 8.00291 18.75 8.00291Z” fill=“#000000"/>
								</svg>						
							</div>
							<div class="buttons__arrow right">
								<svg class="buttons__arrowRight" width=“20” height="19" viewBox="0 0 20 19" fill=“none” xmlns="http://www.w3.org/2000/svg">
									<path d="M18.75 8.00291H3.925L8.4625 2.55291C8.67467 2.29764 8.77675 1.96854 8.74628 1.638C8.7158 1.30747 8.55527 1.00258 8.3 0.790408C8.04473 0.578235 7.71563 0.476157 7.3851 0.506632C7.05456 0.537107 6.74967 0.697637 6.5375 0.952908L0.2875 8.45291C0.245451 8.51256 0.207849 8.57523 0.175 8.64041C0.175 8.70291 0.175 8.74041 0.0875002 8.80291C0.0308421 8.94623 0.0011764 9.0988 0 9.25291C0.0011764 9.40702 0.0308421 9.55958 0.0875002 9.70291C0.0875002 9.76541 0.0874998 9.80291 0.175 9.86541C0.207849 9.93058 0.245451 9.99325 0.2875 10.0529L6.5375 17.5529C6.65503 17.694 6.8022 17.8075 6.96856 17.8853C7.13491 17.963 7.31636 18.0032 7.5 18.0029C7.79207 18.0035 8.07511 17.9018 8.3 17.7154C8.42657 17.6105 8.5312 17.4816 8.60789 17.3362C8.68458 17.1907 8.73183 17.0316 8.74692 16.8679C8.76202 16.7042 8.74466 16.5391 8.69586 16.3821C8.64705 16.2251 8.56775 16.0792 8.4625 15.9529L3.925 10.5029H18.75C19.0815 10.5029 19.3995 10.3712 19.6339 10.1368C19.8683 9.90237 20 9.58443 20 9.25291C20 8.92139 19.8683 8.60345 19.6339 8.36902C19.3995 8.1346 19.0815 8.00291 18.75 8.00291Z” fill=“#000000"/>
								</svg>
							</div>
						</div>

					</div>
				</section>
				<!-- Subscribe -->
				<section class="subscribe">
					<div class="block">
						<div class="subscribe__block grayShadow">
							<div class="subscribe__text">
								<h2 class="subscribe__title">
									Subscribe Now for Get Special Features!
								</h2>
								<h4 class="subscribe__subtitle">
									Let's subscribe with us and find the fun.
								</h4>
							</div>
							<button class="subscribe__button">
								Subscribe Now
							</button>
						</div>
					</div>
				</section>
			</main>
</div>

@endsection