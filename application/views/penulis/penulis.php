		<!-- PAGE HEADER -->
		<div class="page-header">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10 text-center">
						<div class="author">
							<img class="author-img center-block" src="<?= base_url('assets/img/muhammad-rizal-2.jpg') ?>" alt="">
							<h1 class="text-uppercase">Muhammad Rizal</h1>
							<p class="lead">Lahir di Jakarta. Hobi coding dan menulis.</p>
							<ul class="author-social">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /PAGE HEADER -->
        
        
        
        	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">


                <?php foreach( $artikel_penulis as $data_pencarian ):  ?>
					<!-- post -->
					<div class="post post-row">
						<a class="post-img" href="<?= base_url($data_pencarian['kategori'].'/'.$data_pencarian['id'].'/'.url_title($data_pencarian['judul'], '-', TRUE)) ?>"><img src="<?= base_url('assets/img/artikel/'.$data_pencarian['gambar']) ?>" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="<?= base_url($data_pencarian['kategori']) ?>"><?= $data_pencarian['kategori'] ?></a>
							</div>
							<h3 class="post-title"><a href="<?= base_url($data_pencarian['kategori'].'/'.$data_pencarian['id'].'/'.url_title($data_pencarian['judul'], '-', TRUE)) ?>"><?= $data_pencarian['judul'] ?></a></h3>
							<ul class="post-meta">
								<li><a href="<?= base_url('penulis') ?>"><?= $data_pencarian['created_by'] ?></a></li>
								<li><?= date('d-m-Y', strtotime($data_pencarian['created_date'])) ?></li>
							</ul>
							<p><?= word_limiter($data_pencarian['deskripsi'], 20) ?></p>
						</div>
					</div>
					<!-- /post -->
                <?php  endforeach; ?>


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