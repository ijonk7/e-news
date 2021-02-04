	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<div class="section-row">
						<div class="section-title">
							<h2 class="title">Informasi Kontak</h2>
						</div>
						<ul class="contact">
							<li><i class="fa fa-phone"></i> 081X-XXXX-XXXX</li>
							<li><i class="fa fa-envelope"></i> <a href="#">info@muhammadrizal.com</a></li>
							<li><i class="fa fa-map-marker"></i> Slipi, Jakarta Barat 11480</li>
						</ul>
					</div>

					<div class="section-row">
						<div class="section-title">
							<h2 class="title">Hubungi Kami</h2>
						</div>
						<form>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<input class="input" type="email" name="email" placeholder="Email">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input class="input" type="text" name="subject" placeholder="Judul Pesan">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea class="input" name="message" placeholder="Isi Pesan"></textarea>
									</div>
									<button class="primary-button">Kirim</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-4">
					<!-- social widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Social Media</h2>
						</div>
						<div class="social-widget">
							<ul>
								<li>
									<a href="#" class="social-facebook">
										<i class="fa fa-facebook"></i>
										<span>21.2K<br>Followers</span>
									</a>
								</li>
								<li>
									<a href="#" class="social-twitter">
										<i class="fa fa-twitter"></i>
										<span>10.2K<br>Followers</span>
									</a>
								</li>
								<li>
									<a href="#" class="social-google-plus">
										<i class="fa fa-google-plus"></i>
										<span>5K<br>Followers</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- /social widget -->

					<!-- newsletter widget -->
					<div class="aside-widget" id="newsletter">
						<div class="section-title">
							<h2 class="title">Newsletter</h2>
						</div>
						<div class="newsletter-widget">
							<?php $pendaftaran_berhasil = $this->session->flashdata('pendaftaran_berhasil'); ?>
							<?php if (!empty($pendaftaran_berhasil)): ?>
								<h4 style="color: DarkGreen; text-align: center;"><?= $pendaftaran_berhasil?></h4>
							<?php endif; ?>
							<?= form_open('newsletter/simpan'); ?>
								<p>Dapatkan info berita terbaru melalui email Anda</p>
								<?= form_input('newsletter', '', ['class' => 'input', 'placeholder' => 'Alamat Email Anda', 'required' => 'required']); ?>
								<?= form_hidden('url_aktif', current_url()); ?>
								<button class="primary-button">Berlangganan</button>
							<?= form_close(); ?>
						</div>
					</div>
					<!-- /newsletter widget -->
				</div>
			</div>
		</div>
	</div>