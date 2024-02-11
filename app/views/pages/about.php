<?php require APPROOT . '/views/inc/header.php'; ?>
  <h1><?php echo $data['title']; ?></h1>
  <p><?php echo $data['description']; ?></p>
  <p>Version: <strong><?php echo APPVERSION; ?></strong></p>
<?php require APPROOT . '/views/inc/footer.php'; ?>

  
  <header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html">
						<img src="<?php echo URLROOT; ?>/img/logo.png" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-center mx-auto">
							<li class="nav-item">
								<a class="nav-link" href="index.html">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="category.html">Category</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="archive.html">Archive</a>
							</li>
							<li class="nav-item submenu dropdown active">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
								<ul class="dropdown-menu">
									<li class="nav-item">
										<a class="nav-link" href="elements.html">Elements</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="single-blog.html">Post Details</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="contact.html">Contact</a>
							</li>
						</ul>
						<ul class="nav navbar-nav ml-auto search">
								<li class="nav-item d-flex align-items-center mr-10">
									<div class="menu-form" style="display: none;">
										<form>
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Search here">
											</div>
										</form>
									</div>
									<button type="submit" class="search-icon">
										<i class="lnr lnr-magnifier"></i>
									</button>
								</li>
							</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>