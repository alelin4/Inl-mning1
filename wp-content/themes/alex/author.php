<?php
get_header();
?>

<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<h1>Peter Pärmenäs</h1>
							<article>
							<img src="<?php echo get_template_directory_uri() . '/images/washington.jpg'; ?>" />
								<h2 class="title">
									<a href="http://localhost/inl%C3%A4mning1/2023/04/14/blogg/">Det tredje inlägget</a>
								</h2>
								<ul class="meta">
									<li>
										<i class="fa fa-calendar"></i> 1 januari, 2016
									</li>
									<li>
										<i class="fa fa-user"></i> <a href="author.php">Peter Pärmenäs</a>
									</li>
									<li>
										<i class="fa fa-tag"></i> <a href="category.php">Kategori 1</a>, <a href="category.php">Kategori 2</a>
									</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed sodales mauris. Aliquam felis est, efficitur vel fringilla quis, vehicula quis ex. Phasellus tristique nunc in leo faucibus, a consequat nulla sagittis. In sed mi mi. Praesent condimentum sollicitudin nibh. Vivamus vulputate purus quis volutpat fringilla. Ut tortor libero, semper eget dolor vel, hendrerit tempus dui. Suspendisse dictum efficitur blandit. In porta scelerisque nulla ac placerat.</p>
							</article>
							<article>
							<img src="<?php echo get_template_directory_uri() . '/images/london.jpg'; ?>" />
								<h2 class="title">
									<a href="file:///C:/Users/alexa/Downloads/labb1-filer/blogg.html">Hej världen!</a>
								</h2>
								<ul class="meta">
									<li>
										<i class="fa fa-calendar"></i> 1 januari, 2016
									</li>
									<li>
										<i class="fa fa-user"></i> <a href="author.php">Peter Pärmenäs</a>
									</li>
									<li>
										<i class="fa fa-tag"></i> <a href="category.php">Kategori 1</a>, <a href="category.php">Kategori 2</a>, <a href="category.php">Kategori 3</a>
									</li>
								</ul>
								<p>Sed pretium metus in urna vehicula imperdiet. Fusce at odio vitae felis maximus tincidunt. Nunc porttitor ex a elementum dictum. Maecenas eget arcu nulla. Cras auctor dui aliquet, condimentum orci vel, venenatis nisl. Ut semper magna urna, ac congue dui cursus vitae. Nam sed pharetra leo, vel tincidunt est. Phasellus volutpat tortor nec nulla feugiat congue. Donec quis ligula varius, euismod nisl eu, aliquet metus. Aliquam tempus iaculis odio, sed volutpat mi aliquam aliquet.</p>
							</article>
							<nav class="navigation pagination">
								<h2 class="screen-reader-text">Inläggsnavigering</h2>
								<a class="prev page-numbers" href="">Föregående</a>
								<span class="page-numbers current">1</span>
								<a class="page-numbers" href="">2</a>
								<a class="next page-numbers" href="">Nästa</a>
							</nav>
						</div>
						<aside id="secondary" class="col-xs-12 col-md-3">
							<div id="sidebar">
								<ul>
									<li>
										<form id="searchform" class="searchform">
											<div>
												<label class="screen-reader-text">Sök efter:</label>
												<input type="text" />
												<input type="submit" value="Sök" />
											</div>
										</form>
									</li>
								</ul>
								<ul role="navigation">
									<li class="pagenav">
										<h2>Sidor</h2>
										<ul>
											<li class="page_item current_page_item">
												<a href="">Blogg</a>
											</li>
											<li class="page_item">
												<a href="">Exempelsida</a>
											</li>
											<li class="page_item">
												<a href="">Kontakt</a>
											</li>
											<li class="page_item page_item_has_children">
												<a href="">Om mig</a>
												<ul class="children">
													<li class="page_item">
														<a href="">Intressen</a>
													</li>
													<li class="page_item page_item_has_children">
														<a href="">Portfolio</a>
														<ul class="children">
															<li class="page_item">
																<a href="">Projekt 1</a>
															</li>
														</ul>
													</li>
												</ul>
											</li>
											<li class="page_item">
												<a href="">Startsida</a>
											</li>
										</ul>
									</li>
									<li>
										<h2>Arkiv</h2>
										<ul>
											<li>
												<a href="archive.php">oktober 2016</a>
											</li>
										</ul>
									</li>
									<li class="categories">
										<h2>Kategorier</h2>
										<ul>
											<li class="cat-item">
												<a href="">Natur</a> (1)
											</li>
											<li class="cat-item">
												<a href="">Okategoriserade</a> (3)
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</aside>
					</div>
				</div>
			</section>
		</main>

<?php
get_footer();
?>