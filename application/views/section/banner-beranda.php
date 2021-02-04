	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div id="hot-post" class="row hot-post">
				<div class="col-md-8 hot-post-left">
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="<?= base_url($artikel_random[0]['kategori'].'/'.$artikel_random[0]['id'].'/'.url_title($artikel_random[0]['judul'], '-', TRUE)) ?>"><img src="<?= base_url('assets/img/artikel/'.$artikel_random[0]['gambar']) ?>" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="<?= base_url($artikel_random[0]['kategori']) ?>"><?= $artikel_random[0]['kategori'] ?></a>
							</div>
							<h3 class="post-title title-lg"><a href="<?= base_url($artikel_random[0]['kategori'].'/'.$artikel_random[0]['id'].'/'.url_title($artikel_random[0]['judul'], '-', TRUE)) ?>"><?= $artikel_random[0]['judul'] ?></a></h3>
							<ul class="post-meta">
								<li><a href="<?= base_url('penulis') ?>"><?= $artikel_random[0]['created_by'] ?></a></li>
								<li><?= formatTanggal($artikel_random[0]['created_date']) ?></li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
				<div class="col-md-4 hot-post-right">
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="<?= base_url($artikel_random[1]['kategori'].'/'.$artikel_random[1]['id'].'/'.url_title($artikel_random[1]['judul'], '-', TRUE)) ?>"><img src="<?= base_url('assets/img/artikel/'.$artikel_random[1]['gambar']) ?>" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="<?= base_url($artikel_random[1]['kategori']) ?>"><?= $artikel_random[1]['kategori'] ?></a>
							</div>
							<h3 class="post-title"><a href="<?= base_url($artikel_random[1]['kategori'].'/'.$artikel_random[1]['id'].'/'.url_title($artikel_random[1]['judul'], '-', TRUE)) ?>"><?= $artikel_random[1]['judul'] ?></a></h3>
							<ul class="post-meta">
								<li><a href="<?= base_url('penulis') ?>"><?= $artikel_random[1]['created_by'] ?></a></li>
								<li><?= formatTanggal($artikel_random[1]['created_date']) ?></li>
							</ul>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="<?= base_url($artikel_random[2]['kategori'].'/'.$artikel_random[2]['id'].'/'.url_title($artikel_random[2]['judul'], '-', TRUE)) ?>"><img src="<?= base_url('assets/img/artikel/'.$artikel_random[2]['gambar']) ?>" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="<?= base_url($artikel_random[2]['kategori']) ?>"><?= $artikel_random[2]['kategori'] ?></a>
							</div>
							<h3 class="post-title"><a href="<?= base_url($artikel_random[2]['kategori'].'/'.$artikel_random[2]['id'].'/'.url_title($artikel_random[2]['judul'], '-', TRUE)) ?>"><?= $artikel_random[2]['judul'] ?></a></h3>
							<ul class="post-meta">
								<li><a href="<?= base_url('penulis') ?>"><?= $artikel_random[2]['created_by'] ?></a></li>
								<li><?= formatTanggal($artikel_random[2]['created_date']) ?></li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->