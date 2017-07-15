	<footer class="footer">
		<div class="container">
			<div class="row footer-holder">
				<div class="col-md-6">
					<div class="footer-subscribe">
						<h3 class="footer-subscribe__heading">Subscribe to Newsletter</h3>
						<form action="" class="form">
							<input type="text" class="form-control footer-subscribe__input" name="subscribe_email" id="subscribe_email" placeholder="Email Address">
							<button class="btn footer-subscribe__btn">SEND</button>
						</form>
						<div class="footer-contact">
							<?php echo $site->address(); ?> <br>
							<?php echo $site->phone(); ?>, Fax No. <?php echo $site->fax(); ?>
						</div>
						<ul class="footer-menu">
							<li class="footer-menu__item">
								<a href="<?php echo url('about'); ?>" class="footer-menu__link">About</a>
							</li>
							<li class="footer-menu__item">
								<a href="<?php echo url('faq'); ?>" class="footer-menu__link">FAQ</a>
							</li>
							<li class="footer-menu__item">
								<a href="<?php echo url('membership-application'); ?>" class="footer-menu__link">Membership Application</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 footer-separator">
					<div class="footer-testimonials clearfix">
						<div class="footer-testimonials__item">
							<h1 class="heading">Rockwall</h1>
							<div class="footer-testimonials__description">
								I love going to the gym, so most of the time I’m at Rockwell Club, boxing. My favorite dining destination is Chef Jessi’s. Their food is very particular and perfect for a healthy and fast meal.
							</div>
							<div class="footer-testimonials__person">
								<span class="footer-testimonials__person__name">Ambra Gutierrez</span>
								Manansala Resident
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			Copyright 2017 &middot; <?php echo $site->title(); ?>
		</div>
	</footer>

	<?php echo js('assets/js/app.js?v=' . rand()); ?>
</body>
</html>