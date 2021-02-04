                <div class="col-md-4">
                    
					<!-- ad widget-->
					<div class="aside-widget text-center">
						<a href="#" style="display: inline-block;margin: auto;">
							<img class="img-responsive" src="<?= base_url('assets/img/ad-3.jpg') ?>" alt="">
						</a>
					</div>
					<!-- /ad widget -->

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

                    <?php if(!isset($data['header_kontak'])): ?>
					<!-- category widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Kategori</h2>
						</div>
						<div class="category-widget">
							<ul>
								<li><a href="<?= base_url('teknologi') ?>">Teknologi <span><?= $total_artikel[0]['total_teknologi'] ?></span></a></li>
								<li><a href="<?= base_url('travel') ?>">Travel <span><?= $total_artikel[0]['total_travel'] ?></span></a></li>
								<li><a href="<?= base_url('automotif') ?>">Automotif <span><?= $total_artikel[0]['total_automotif'] ?></span></a></li>
								<li><a href="<?= base_url('olahraga') ?>">Olahraga <span><?= $total_artikel[0]['total_olahraga'] ?></span></a></li>
							</ul>
						</div>
					</div>
					<!-- /category widget -->
                    <?php endif; ?>

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

                    <?php if(!isset($data['header_kontak'])): ?>
					<!-- post widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Berita Populer</h2>
						</div>
						<!-- post -->
						<div class="post post-widget">
							<a class="post-img" href="<?= base_url($artikel_random[0]['kategori'].'/'.$artikel_random[0]['id'].'/'.url_title($artikel_random[0]['judul'], '-', TRUE)) ?>"><img src="<?= base_url('assets/img/artikel/'.$artikel_random[0]['gambar']) ?>" alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="<?= base_url($artikel_random[0]['kategori']) ?>"><?= $artikel_random[0]['kategori'] ?></a>
									<small><?= formatTanggal($artikel_random[0]['created_date']) ?></small>
								</div>
								<h3 class="post-title"><a href="<?= base_url($artikel_random[0]['kategori'].'/'.$artikel_random[0]['id'].'/'.url_title($artikel_random[0]['judul'], '-', TRUE)) ?>"><?= $artikel_random[0]['judul'] ?></a></h3>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="post post-widget">
							<a class="post-img" href="<?= base_url($artikel_random[1]['kategori'].'/'.$artikel_random[1]['id'].'/'.url_title($artikel_random[1]['judul'], '-', TRUE)) ?>"><img src="<?= base_url('assets/img/artikel/'.$artikel_random[1]['gambar']) ?>" alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="<?= base_url($artikel_random[1]['kategori']) ?>"><?= $artikel_random[1]['kategori'] ?></a>
									<small><?= formatTanggal($artikel_random[1]['created_date']) ?></small>
								</div>
								<h3 class="post-title"><a href="<?= base_url($artikel_random[1]['kategori'].'/'.$artikel_random[1]['id'].'/'.url_title($artikel_random[1]['judul'], '-', TRUE)) ?>"><?= $artikel_random[1]['judul'] ?></a></h3>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="post post-widget">
							<a class="post-img" href="<?= base_url($artikel_random[2]['kategori'].'/'.$artikel_random[2]['id'].'/'.url_title($artikel_random[2]['judul'], '-', TRUE)) ?>"><img src="<?= base_url('assets/img/artikel/'.$artikel_random[2]['gambar']) ?>" alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="<?= base_url($artikel_random[2]['kategori']) ?>"><?= $artikel_random[2]['kategori'] ?></a>
									<small><?= formatTanggal($artikel_random[2]['created_date']) ?></small>
								</div>
								<h3 class="post-title"><a href="<?= base_url($artikel_random[2]['kategori'].'/'.$artikel_random[2]['id'].'/'.url_title($artikel_random[2]['judul'], '-', TRUE)) ?>"><?= $artikel_random[2]['judul'] ?></a></h3>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="post post-widget">
							<a class="post-img" href="<?= base_url($artikel_random[3]['kategori'].'/'.$artikel_random[3]['id'].'/'.url_title($artikel_random[3]['judul'], '-', TRUE)) ?>"><img src="<?= base_url('assets/img/artikel/'.$artikel_random[3]['gambar']) ?>" alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="<?= base_url($artikel_random[3]['kategori']) ?>"><?= $artikel_random[3]['kategori'] ?></a>
									<small><?= formatTanggal($artikel_random[3]['created_date']) ?></small>
								</div>
								<h3 class="post-title"><a href="<?= base_url($artikel_random[3]['kategori'].'/'.$artikel_random[3]['id'].'/'.url_title($artikel_random[3]['judul'], '-', TRUE)) ?>"><?= $artikel_random[3]['judul'] ?></a></h3>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="post post-widget">
							<a class="post-img" href="<?= base_url($artikel_random[4]['kategori'].'/'.$artikel_random[4]['id'].'/'.url_title($artikel_random[4]['judul'], '-', TRUE)) ?>"><img src="<?= base_url('assets/img/artikel/'.$artikel_random[4]['gambar']) ?>" alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="<?= base_url($artikel_random[4]['kategori']) ?>"><?= $artikel_random[4]['kategori'] ?></a>
									<small><?= formatTanggal($artikel_random[4]['created_date']) ?></small>
								</div>
								<h3 class="post-title"><a href="<?= base_url($artikel_random[4]['kategori'].'/'.$artikel_random[4]['id'].'/'.url_title($artikel_random[4]['judul'], '-', TRUE)) ?>"><?= $artikel_random[4]['judul'] ?></a></h3>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="post post-widget">
							<a class="post-img" href="<?= base_url($artikel_random[5]['kategori'].'/'.$artikel_random[5]['id'].'/'.url_title($artikel_random[5]['judul'], '-', TRUE)) ?>"><img src="<?= base_url('assets/img/artikel/'.$artikel_random[5]['gambar']) ?>" alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="<?= base_url($artikel_random[5]['kategori']) ?>"><?= $artikel_random[5]['kategori'] ?></a>
									<small><?= formatTanggal($artikel_random[5]['created_date']) ?></small>
								</div>
								<h3 class="post-title"><a href="<?= base_url($artikel_random[5]['kategori'].'/'.$artikel_random[5]['id'].'/'.url_title($artikel_random[5]['judul'], '-', TRUE)) ?>"><?= $artikel_random[5]['judul'] ?></a></h3>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="post post-widget">
							<a class="post-img" href="<?= base_url($artikel_random[6]['kategori'].'/'.$artikel_random[6]['id'].'/'.url_title($artikel_random[6]['judul'], '-', TRUE)) ?>"><img src="<?= base_url('assets/img/artikel/'.$artikel_random[6]['gambar']) ?>" alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="<?= base_url($artikel_random[6]['kategori']) ?>"><?= $artikel_random[6]['kategori'] ?></a>
									<small><?= formatTanggal($artikel_random[6]['created_date']) ?></small>
								</div>
								<h3 class="post-title"><a href="<?= base_url($artikel_random[6]['kategori'].'/'.$artikel_random[6]['id'].'/'.url_title($artikel_random[6]['judul'], '-', TRUE)) ?>"><?= $artikel_random[6]['judul'] ?></a></h3>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="post post-widget">
							<a class="post-img" href="<?= base_url($artikel_random[7]['kategori'].'/'.$artikel_random[7]['id'].'/'.url_title($artikel_random[7]['judul'], '-', TRUE)) ?>"><img src="<?= base_url('assets/img/artikel/'.$artikel_random[7]['gambar']) ?>" alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="<?= base_url($artikel_random[7]['kategori']) ?>"><?= $artikel_random[7]['kategori'] ?></a>
									<small><?= formatTanggal($artikel_random[7]['created_date']) ?></small>
								</div>
								<h3 class="post-title"><a href="<?= base_url($artikel_random[7]['kategori'].'/'.$artikel_random[7]['id'].'/'.url_title($artikel_random[7]['judul'], '-', TRUE)) ?>"><?= $artikel_random[7]['judul'] ?></a></h3>
							</div>
						</div>
						<!-- /post -->

					</div>
					<!-- /post widget -->
                    <?php endif; ?>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->