	<?php if(!isset($data['single_page'])): ?>
    <!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- ad -->
				<div class="col-md-12 section-row text-center">
					<a href="#" style="display: inline-block;margin: auto;">
						<img class="img-responsive" src="<?= base_url('assets/img/ad-2.jpg') ?>" alt="">
					</a>
				</div>
				<!-- /ad -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->
    <?php endif; ?>

	<!-- FOOTER -->
	<footer id="footer">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-4">
					<div class="footer-widget">
						<div class="footer-logo">
							<a href="<?= site_url() ?>" class="logo"><img src="<?= base_url('assets/img/logo-alt2.png') ?>" alt=""></a>
						</div>
						<p>Ikuti kami di:</p>
						<ul class="contact-social">
							<li><a href="#" class="social-facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="social-twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="social-google-plus"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="social-instagram"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="footer-widget">
						<h3 class="footer-title">Kategori</h3>
						<div class="category-widget">
							<ul>
								<li><a href="<?= base_url('teknologi') ?>">Teknologi <span><?= $total_artikel[0]['total_teknologi'] ?></span></a></li>
								<li><a href="<?= base_url('travel') ?>">Travel <span><?= $total_artikel[0]['total_travel'] ?></span></a></li>
								<li><a href="<?= base_url('automotif') ?>">Automotif <span><?= $total_artikel[0]['total_automotif'] ?></span></a></li>
								<li><a href="<?= base_url('olahraga') ?>">Olahraga <span><?= $total_artikel[0]['total_olahraga'] ?></span></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="footer-widget">
						<h3 class="footer-title">Newsletter</h3>
						<div class="newsletter-widget">
							<?= form_open('newsletter/simpan'); ?>
								<p>Dapatkan info berita terbaru melalui email Anda</p>
								<?= form_input('newsletter', '', ['class' => 'input', 'placeholder' => 'Alamat Email Anda', 'required' => 'required']); ?>
								<?= form_hidden('url_aktif', current_url()); ?>
								<button class="primary-button">Berlangganan</button>
							<?= form_close(); ?>
						</div>
					</div>
				</div>
			</div>
			<!-- /row -->

			<!-- row -->
			<div class="footer-bottom row">
				<div class="col-md-6 col-md-push-6">
					<ul class="footer-nav">
						<li><a href="<?= site_url() ?>"<?= $data['menu'] == 'beranda' ? ' style="color:#ec4366;"' : ''?>>Beranda</a></li>
						<li><a href="<?= base_url('tentang-kami') ?>"<?= $data['menu'] == 'tentang-kami' ? ' style="color:#ec4366;"' : ''?>>Tentang Kami</a></li>
						<li><a href="<?= base_url('kontak') ?>"<?= $data['menu'] == 'kontak' ? ' style="color:#ec4366;"' : ''?>>Kontak</a></li>
						<li><a href="<?= base_url('privasi') ?>"<?= $data['menu'] == 'privasi' ? ' style="color:#ec4366;"' : ''?>>Privasi</a></li>
						<li><a href="<?= base_url('disclaimer') ?>"<?= $data['menu'] == 'disclaimer' ? ' style="color:#ec4366;"' : ''?>>Disclaimer</a></li>
					</ul>
				</div>
				<div class="col-md-6 col-md-pull-6">
					<div class="footer-copyright">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->