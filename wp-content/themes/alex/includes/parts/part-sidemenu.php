<nav id="nav">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<ul class="menu">
					<li>
						<a href="<?php echo home_uri('/front-page.php/'); ?>">Hem</a>
					</li>
					<li>
						<a href="<?php echo site_uri('/home.php/'); ?>">Blogg</a>
					</li>
					<li>
						<a href=" <?php echo site_uri('/page1/'); ?>">Undersida</a>
					</li>
					<li>
					<a href="<?php echo site_uri('/page1/'); ?>">Undersida</a>
					</li>
					<li>
					<a href="<?php echo site_uri('/includes/template-page3.php/'); ?>">Undersida</a>
					</li>
					<li class="<?php if (is_page('undersida4')) {echo 'current-menu-item';} ?>">
					<a href="<?php echo site_uri('/includes/template-page4.php/'); ?>">Undersida</a>
					</li>
					<li>
					<a href="<?php echo site_uri('/includes/template-contactus.php/'); ?>">Undersida</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</nav>
