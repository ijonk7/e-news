	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">Berita Terbaru</h2>
							</div>
						</div><br>
						<!-- post -->
						<div class="col-md-6">
							<div class="post">
								<a class="post-img" href="<?= base_url($artikel_statis[0]['kategori'].'/'.$artikel_statis[0]['id'].'/'.url_title($artikel_statis[0]['judul'], '-', TRUE)) ?>"><img src="<?= base_url('assets/img/artikel/'.$artikel_statis[0]['gambar']) ?>" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="<?= base_url($artikel_statis[0]['kategori']) ?>"><?= $artikel_statis[0]['kategori'] ?></a>
									</div>
									<h3 class="post-title"><a href="<?= base_url($artikel_statis[0]['kategori'].'/'.$artikel_statis[0]['id'].'/'.url_title($artikel_statis[0]['judul'], '-', TRUE)) ?>"><?= $artikel_statis[0]['judul'] ?></a></h3>
									<ul class="post-meta">
										<li><a href="<?= base_url('penulis') ?>"><?= $artikel_statis[0]['created_by'] ?></a></li>
										<li><?= formatTanggal($artikel_statis[0]['created_date']) ?></li>
									</ul>
									<p><?= word_limiter($artikel_statis[0]['deskripsi'], 20) ?></p>
								</div>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="col-md-6">
							<div class="post">
								<a class="post-img" href="<?= base_url($artikel_statis[3]['kategori'].'/'.$artikel_statis[3]['id'].'/'.url_title($artikel_statis[3]['judul'], '-', TRUE)) ?>"><img src="<?= base_url('assets/img/artikel/'.$artikel_statis[3]['gambar']) ?>" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="<?= base_url($artikel_statis[3]['kategori']) ?>"><?= $artikel_statis[3]['kategori'] ?></a>
									</div>
									<h3 class="post-title"><a href="<?= base_url($artikel_statis[3]['kategori'].'/'.$artikel_statis[3]['id'].'/'.url_title($artikel_statis[3]['judul'], '-', TRUE)) ?>"><?= $artikel_statis[3]['judul'] ?></a></h3>
									<ul class="post-meta">
										<li><a href="<?= base_url('penulis') ?>"><?= $artikel_statis[3]['created_by'] ?></a></li>
										<li><?= formatTanggal($artikel_statis[3]['created_date']) ?></li>
									</ul>
									<p><?= word_limiter($artikel_statis[3]['deskripsi'], 20) ?></p>
								</div>
							</div>
						</div>
						<!-- /post -->

						<div class="clearfix visible-md visible-lg"></div>

						<!-- post -->
						<div class="col-md-6">
							<div class="post">
								<a class="post-img" href="<?= base_url($artikel_statis[6]['kategori'].'/'.$artikel_statis[6]['id'].'/'.url_title($artikel_statis[6]['judul'], '-', TRUE)) ?>"><img src="<?= base_url('assets/img/artikel/'.$artikel_statis[6]['gambar']) ?>" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="<?= base_url($artikel_statis[6]['kategori']) ?>"><?= $artikel_statis[6]['kategori'] ?></a>
									</div>
									<h3 class="post-title"><a href="<?= base_url($artikel_statis[6]['kategori'].'/'.$artikel_statis[6]['id'].'/'.url_title($artikel_statis[6]['judul'], '-', TRUE)) ?>"><?= $artikel_statis[6]['judul'] ?></a></h3>
									<ul class="post-meta">
										<li><a href="<?= base_url('penulis') ?>"><?= $artikel_statis[6]['created_by'] ?></a></li>
										<li><?= formatTanggal($artikel_statis[6]['created_date']) ?></li>
									</ul>
									<p><?= word_limiter($artikel_statis[6]['deskripsi'], 20) ?></p>
								</div>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="col-md-6">
							<div class="post">
								<a class="post-img" href="<?= base_url($artikel_statis[9]['kategori'].'/'.$artikel_statis[9]['id'].'/'.url_title($artikel_statis[9]['judul'], '-', TRUE)) ?>"><img src="<?= base_url('assets/img/artikel/'.$artikel_statis[9]['gambar']) ?>" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="<?= base_url($artikel_statis[9]['kategori']) ?>"><?= $artikel_statis[9]['kategori'] ?></a>
									</div>
									<h3 class="post-title"><a href="<?= base_url($artikel_statis[9]['kategori'].'/'.$artikel_statis[9]['id'].'/'.url_title($artikel_statis[9]['judul'], '-', TRUE)) ?>"><?= $artikel_statis[9]['judul'] ?></a></h3>
									<ul class="post-meta">
										<li><a href="<?= base_url('penulis') ?>"><?= $artikel_statis[9]['created_by'] ?></a></li>
										<li><?= formatTanggal($artikel_statis[9]['created_date']) ?></li>
									</ul>
									<p><?= word_limiter($artikel_statis[9]['deskripsi'], 20) ?></p>
								</div>
							</div>
						</div>
						<!-- /post -->
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">Teknologi</h2>
							</div>
						</div>
						<!-- post -->
						<div class="col-md-4">
							<div class="post post-sm">
								<a class="post-img" href="<?= base_url($artikel_statis[0]['kategori'].'/'.$artikel_statis[0]['id'].'/'.url_title($artikel_statis[0]['judul'], '-', TRUE)) ?>"><img src="<?= base_url('assets/img/artikel/'.$artikel_statis[0]['gambar']) ?>" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="<?= base_url($artikel_statis[0]['kategori']) ?>"><?= $artikel_statis[0]['kategori'] ?></a>
									</div>
									<h3 class="post-title title-sm"><a href="<?= base_url($artikel_statis[0]['kategori'].'/'.$artikel_statis[0]['id'].'/'.url_title($artikel_statis[0]['judul'], '-', TRUE)) ?>"><?= $artikel_statis[0]['judul'] ?></a></h3>
									<ul class="post-meta">
										<li><a href="<?= base_url('penulis') ?>"><?= $artikel_statis[0]['created_by'] ?></a></li>
										<li><?= formatTanggal($artikel_statis[0]['created_date']) ?></li>
									</ul>
									<p><?= word_limiter($artikel_statis[0]['deskripsi'], 20) ?></p>
								</div>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="col-md-4">
							<div class="post post-sm">
								<a class="post-img" href="<?= base_url($artikel_statis[1]['kategori'].'/'.$artikel_statis[1]['id'].'/'.url_title($artikel_statis[1]['judul'], '-', TRUE)) ?>"><img src="<?= base_url('assets/img/artikel/'.$artikel_statis[1]['gambar']) ?>" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="<?= base_url($artikel_statis[1]['kategori']) ?>"><?= $artikel_statis[1]['kategori'] ?></a>
									</div>
									<h3 class="post-title title-sm"><a href="<?= base_url($artikel_statis[1]['kategori'].'/'.$artikel_statis[1]['id'].'/'.url_title($artikel_statis[1]['judul'], '-', TRUE)) ?>"><?= $artikel_statis[1]['judul'] ?></a></h3>
									<ul class="post-meta">
										<li><a href="<?= base_url('penulis') ?>"><?= $artikel_statis[1]['created_by'] ?></a></li>
										<li><?= formatTanggal($artikel_statis[1]['created_date']) ?></li>
									</ul>
									<p><?= word_limiter($artikel_statis[1]['deskripsi'], 20) ?></p>
								</div>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="col-md-4">
							<div class="post post-sm">
								<a class="post-img" href="<?= base_url($artikel_statis[2]['kategori'].'/'.$artikel_statis[2]['id'].'/'.url_title($artikel_statis[2]['judul'], '-', TRUE)) ?>"><img src="<?= base_url('assets/img/artikel/'.$artikel_statis[2]['gambar']) ?>" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="<?= base_url($artikel_statis[2]['kategori']) ?>"><?= $artikel_statis[2]['kategori'] ?></a>
									</div>
									<h3 class="post-title title-sm"><a href="<?= base_url($artikel_statis[2]['kategori'].'/'.$artikel_statis[2]['id'].'/'.url_title($artikel_statis[2]['judul'], '-', TRUE)) ?>"><?= $artikel_statis[2]['judul'] ?></a></h3>
									<ul class="post-meta">
										<li><a href="<?= base_url('penulis') ?>"><?= $artikel_statis[2]['created_by'] ?></a></li>
										<li><?= formatTanggal($artikel_statis[2]['created_date']) ?></li>
									</ul>
									<p><?= word_limiter($artikel_statis[2]['deskripsi'], 20) ?></p>
								</div>
							</div>
						</div>
						<!-- /post -->
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">Travel</h2>
							</div>
						</div>
						<!-- post -->
						<div class="col-md-4">
							<div class="post post-sm">
								<a class="post-img" href="<?= base_url($artikel_statis[3]['kategori'].'/'.$artikel_statis[3]['id'].'/'.url_title($artikel_statis[3]['judul'], '-', TRUE)) ?>"><img src="<?= base_url('assets/img/artikel/'.$artikel_statis[3]['gambar']) ?>" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="<?= base_url($artikel_statis[3]['kategori']) ?>"><?= $artikel_statis[3]['kategori'] ?></a>
									</div>
									<h3 class="post-title title-sm"><a href="<?= base_url($artikel_statis[3]['kategori'].'/'.$artikel_statis[3]['id'].'/'.url_title($artikel_statis[3]['judul'], '-', TRUE)) ?>"><?= $artikel_statis[3]['judul'] ?></a></h3>
									<ul class="post-meta">
										<li><a href="<?= base_url('penulis') ?>"><?= $artikel_statis[3]['created_by'] ?></a></li>
										<li><?= formatTanggal($artikel_statis[3]['created_date']) ?></li>
									</ul>
									<p><?= word_limiter($artikel_statis[3]['deskripsi'], 20) ?></p>
								</div>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="col-md-4">
							<div class="post post-sm">
								<a class="post-img" href="<?= base_url($artikel_statis[4]['kategori'].'/'.$artikel_statis[4]['id'].'/'.url_title($artikel_statis[4]['judul'], '-', TRUE)) ?>"><img src="<?= base_url('assets/img/artikel/'.$artikel_statis[4]['gambar']) ?>" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="<?= base_url($artikel_statis[4]['kategori']) ?>"><?= $artikel_statis[4]['kategori'] ?></a>
									</div>
									<h3 class="post-title title-sm"><a href="<?= base_url($artikel_statis[4]['kategori'].'/'.$artikel_statis[4]['id'].'/'.url_title($artikel_statis[4]['judul'], '-', TRUE)) ?>"><?= $artikel_statis[4]['judul'] ?></a></h3>
									<ul class="post-meta">
										<li><a href="<?= base_url('penulis') ?>"><?= $artikel_statis[4]['created_by'] ?></a></li>
										<li><?= formatTanggal($artikel_statis[4]['created_date']) ?></li>
									</ul>
									<p><?= word_limiter($artikel_statis[4]['deskripsi'], 20) ?></p>
								</div>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="col-md-4">
							<div class="post post-sm">
								<a class="post-img" href="<?= base_url($artikel_statis[5]['kategori'].'/'.$artikel_statis[5]['id'].'/'.url_title($artikel_statis[5]['judul'], '-', TRUE)) ?>"><img src="<?= base_url('assets/img/artikel/'.$artikel_statis[5]['gambar']) ?>" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="<?= base_url($artikel_statis[5]['kategori']) ?>"><?= $artikel_statis[5]['kategori'] ?></a>
									</div>
									<h3 class="post-title title-sm"><a href="<?= base_url($artikel_statis[5]['kategori'].'/'.$artikel_statis[5]['id'].'/'.url_title($artikel_statis[5]['judul'], '-', TRUE)) ?>"><?= $artikel_statis[5]['judul'] ?></a></h3>
									<ul class="post-meta">
										<li><a href="<?= base_url('penulis') ?>"><?= $artikel_statis[5]['created_by'] ?></a></li>
										<li><?= formatTanggal($artikel_statis[5]['created_date']) ?></li>
									</ul>
									<p><?= word_limiter($artikel_statis[5]['deskripsi'], 20) ?></p>
								</div>
							</div>
						</div>
						<!-- /post -->
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">Automotif</h2>
							</div>
						</div>
						<!-- post -->
						<div class="col-md-4">
							<div class="post post-sm">
								<a class="post-img" href="<?= base_url($artikel_statis[6]['kategori'].'/'.$artikel_statis[6]['id'].'/'.url_title($artikel_statis[6]['judul'], '-', TRUE)) ?>"><img src="<?= base_url('assets/img/artikel/'.$artikel_statis[6]['gambar']) ?>" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="<?= base_url($artikel_statis[6]['kategori']) ?>"><?= $artikel_statis[6]['kategori'] ?></a>
									</div>
									<h3 class="post-title title-sm"><a href="<?= base_url($artikel_statis[6]['kategori'].'/'.$artikel_statis[6]['id'].'/'.url_title($artikel_statis[6]['judul'], '-', TRUE)) ?>"><?= $artikel_statis[6]['judul'] ?></a></h3>
									<ul class="post-meta">
										<li><a href="<?= base_url('penulis') ?>"><?= $artikel_statis[6]['created_by'] ?></a></li>
										<li><?= formatTanggal($artikel_statis[6]['created_date']) ?></li>
									</ul>
									<p><?= word_limiter($artikel_statis[6]['deskripsi'], 20) ?></p>
								</div>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="col-md-4">
							<div class="post post-sm">
								<a class="post-img" href="<?= base_url($artikel_statis[7]['kategori'].'/'.$artikel_statis[7]['id'].'/'.url_title($artikel_statis[7]['judul'], '-', TRUE)) ?>"><img src="<?= base_url('assets/img/artikel/'.$artikel_statis[7]['gambar']) ?>" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="<?= base_url($artikel_statis[7]['kategori']) ?>"><?= $artikel_statis[7]['kategori'] ?></a>
									</div>
									<h3 class="post-title title-sm"><a href="<?= base_url($artikel_statis[7]['kategori'].'/'.$artikel_statis[7]['id'].'/'.url_title($artikel_statis[7]['judul'], '-', TRUE)) ?>"><?= $artikel_statis[7]['judul'] ?></a></h3>
									<ul class="post-meta">
										<li><a href="<?= base_url('penulis') ?>"><?= $artikel_statis[7]['created_by'] ?></a></li>
										<li><?= formatTanggal($artikel_statis[7]['created_date']) ?></li>
									</ul>
									<p><?= word_limiter($artikel_statis[7]['deskripsi'], 20) ?></p>
								</div>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="col-md-4">
							<div class="post post-sm">
								<a class="post-img" href="<?= base_url($artikel_statis[8]['kategori'].'/'.$artikel_statis[8]['id'].'/'.url_title($artikel_statis[8]['judul'], '-', TRUE)) ?>"><img src="<?= base_url('assets/img/artikel/'.$artikel_statis[8]['gambar']) ?>" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="<?= base_url($artikel_statis[8]['kategori']) ?>"><?= $artikel_statis[8]['kategori'] ?></a>
									</div>
									<h3 class="post-title title-sm"><a href="<?= base_url($artikel_statis[8]['kategori'].'/'.$artikel_statis[8]['id'].'/'.url_title($artikel_statis[8]['judul'], '-', TRUE)) ?>"><?= $artikel_statis[8]['judul'] ?></a></h3>
									<ul class="post-meta">
										<li><a href="<?= base_url('penulis') ?>"><?= $artikel_statis[8]['created_by'] ?></a></li>
										<li><?= formatTanggal($artikel_statis[8]['created_date']) ?></li>
									</ul>
									<p><?= word_limiter($artikel_statis[8]['deskripsi'], 20) ?></p>
								</div>
							</div>
						</div>
						<!-- /post -->
					</div>

					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">Olahraga</h2>
							</div>
						</div>
						<!-- post -->
						<div class="col-md-4">
							<div class="post post-sm">
								<a class="post-img" href="<?= base_url($artikel_statis[9]['kategori'].'/'.$artikel_statis[9]['id'].'/'.url_title($artikel_statis[9]['judul'], '-', TRUE)) ?>"><img src="<?= base_url('assets/img/artikel/'.$artikel_statis[9]['gambar']) ?>" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="<?= base_url($artikel_statis[9]['kategori']) ?>"><?= $artikel_statis[9]['kategori'] ?></a>
									</div>
									<h3 class="post-title title-sm"><a href="<?= base_url($artikel_statis[9]['kategori'].'/'.$artikel_statis[9]['id'].'/'.url_title($artikel_statis[9]['judul'], '-', TRUE)) ?>"><?= $artikel_statis[9]['judul'] ?></a></h3>
									<ul class="post-meta">
										<li><a href="<?= base_url('penulis') ?>"><?= $artikel_statis[9]['created_by'] ?></a></li>
										<li><?= formatTanggal($artikel_statis[9]['created_date']) ?></li>
									</ul>
									<p><?= word_limiter($artikel_statis[9]['deskripsi'], 20) ?></p>
								</div>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="col-md-4">
							<div class="post post-sm">
								<a class="post-img" href="<?= base_url($artikel_statis[10]['kategori'].'/'.$artikel_statis[10]['id'].'/'.url_title($artikel_statis[10]['judul'], '-', TRUE)) ?>"><img src="<?= base_url('assets/img/artikel/'.$artikel_statis[10]['gambar']) ?>" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="<?= base_url($artikel_statis[10]['kategori']) ?>"><?= $artikel_statis[10]['kategori'] ?></a>
									</div>
									<h3 class="post-title title-sm"><a href="<?= base_url($artikel_statis[10]['kategori'].'/'.$artikel_statis[10]['id'].'/'.url_title($artikel_statis[10]['judul'], '-', TRUE)) ?>"><?= $artikel_statis[10]['judul'] ?></a></h3>
									<ul class="post-meta">
										<li><a href="<?= base_url('penulis') ?>"><?= $artikel_statis[10]['created_by'] ?></a></li>
										<li><?= formatTanggal($artikel_statis[10]['created_date']) ?></li>
									</ul>
									<p><?= word_limiter($artikel_statis[10]['deskripsi'], 20) ?></p>
								</div>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="col-md-4">
							<div class="post post-sm">
								<a class="post-img" href="<?= base_url($artikel_statis[11]['kategori'].'/'.$artikel_statis[11]['id'].'/'.url_title($artikel_statis[11]['judul'], '-', TRUE)) ?>"><img src="<?= base_url('assets/img/artikel/'.$artikel_statis[11]['gambar']) ?>" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="<?= base_url($artikel_statis[11]['kategori']) ?>"><?= $artikel_statis[11]['kategori'] ?></a>
									</div>
									<h3 class="post-title title-sm"><a href="<?= base_url($artikel_statis[11]['kategori'].'/'.$artikel_statis[11]['id'].'/'.url_title($artikel_statis[11]['judul'], '-', TRUE)) ?>"><?= $artikel_statis[11]['judul'] ?></a></h3>
									<ul class="post-meta">
										<li><a href="<?= base_url('penulis') ?>"><?= $artikel_statis[11]['created_by'] ?></a></li>
										<li><?= formatTanggal($artikel_statis[11]['created_date']) ?></li>
									</ul>
									<p><?= word_limiter($artikel_statis[11]['deskripsi'], 20) ?></p>
								</div>
							</div>
						</div>
						<!-- /post -->
					</div>
					<!-- /row -->
				</div>