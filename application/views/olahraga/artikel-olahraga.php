	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<!-- post share -->
					<div class="section-row">
						<div class="post-share">
							<a href="http://www.facebook.com/sharer.php?u=<?= current_url() ?>" class="social-facebook"><i class="fa fa-facebook"></i><span>Share</span></a>
							<a href="https://twitter.com/share?url=<?= current_url() ?>" class="social-twitter"><i class="fa fa-twitter"></i><span>Tweet</span></a>
							<a href="https://plus.google.com/share?url=<?= current_url() ?>" class="social-pinterest"><i class="fa fa-google"></i><span>Google Plus</span></a>
							<a href="#" ><i class="fa fa-envelope"></i><span>Email</span></a>
						</div>
					</div>
					<!-- /post share -->

					<!-- post content -->
					<div class="section-row" style="text-align: justify;">
						<?= $artikel['deskripsi'] ?>
					</div>
					<!-- /post content -->

					<hr>

					<!-- post nav -->
					<div class="section-row">
						<div class="post-nav">
							<?php if(!empty($artikel_sebelumnya)): ?>
							<div class="prev-post">
								<a class="post-img" href="<?= base_url('olahraga/'.$artikel_sebelumnya['id'].'/'.url_title($artikel_sebelumnya['judul'], '-', TRUE)) ?>"><img src="<?= base_url('assets/img/artikel/'.$artikel_sebelumnya['gambar']) ?>" alt=""></a>
								<h3 class="post-title"><a href="<?= base_url('olahraga/'.$artikel_sebelumnya['id'].'/'.url_title($artikel_sebelumnya['judul'], '-', TRUE)) ?>"><?= $artikel_sebelumnya['judul'] ?></a></h3>
								<span>Berita sebelumnya</span>
							</div>
							<?php endif; ?>

							<?php if(!empty($artikel_selanjutnya)): ?>
							<div class="next-post">
								<a class="post-img" href="<?= base_url('olahraga/'.$artikel_selanjutnya['id'].'/'.url_title($artikel_selanjutnya['judul'], '-', TRUE)) ?>"><img src="<?= base_url('assets/img/artikel/'.$artikel_selanjutnya['gambar']) ?>" alt=""></a>
								<h3 class="post-title"><a href="<?= base_url('olahraga/'.$artikel_selanjutnya['id'].'/'.url_title($artikel_selanjutnya['judul'], '-', TRUE)) ?>"><?= $artikel_selanjutnya['judul'] ?></a></h3>
								<span>Berita selanjutnya</span>
							</div>
							<?php endif; ?>
						</div>
					</div>
					<!-- /post nav  -->

					<!-- post author -->
					<div class="section-row">
						<div class="section-title">
							<h3 class="title">About <a href="<?= base_url('penulis') ?>"><?= $artikel['created_by'] ?></a></h3>
						</div>
						<div class="author media">
							<div class="media-left">
								<a href="<?= base_url('penulis') ?>">
									<img class="author-img media-object" src="<?= base_url('assets/img/avatar-1.jpg') ?>" alt="">
								</a>
							</div>
							<div class="media-body">
								<p>Lahir di Jakarta dan memiliki hobi menulis.</p>
								<ul class="author-social">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /post author -->

					<!-- /related post -->
					<div>
						<div class="section-title">
							<h3 class="title">Related Posts</h3>
						</div>
						<div class="row">
							<!-- post -->
							<div class="col-md-4">
								<div class="post post-sm">
									<a class="post-img" href="<?= base_url('olahraga/'.$artikel_terkait[0]['id'].'/'.url_title($artikel_terkait[0]['judul'], '-', TRUE)) ?>"><img src="<?= base_url('assets/img/artikel/'.$artikel_terkait[0]['gambar']) ?>" alt=""></a>
									<div class="post-body">
										<div class="post-category">
											<a href="category.html"><?= $artikel_terkait[0]['kategori'] ?></a>
										</div>
										<h3 class="post-title title-sm"><a href="<?= base_url('olahraga/'.$artikel_terkait[0]['id'].'/'.url_title($artikel_terkait[0]['judul'], '-', TRUE)) ?>"><?= $artikel_terkait[0]['judul'] ?></a></h3>
										<ul class="post-meta">
											<li><a href="<?= base_url('penulis') ?>"><?= $artikel_terkait[0]['created_by'] ?></a></li>
											<li><?= formatTanggal($artikel_terkait[0]['created_date']) ?></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- /post -->

							<!-- post -->
							<div class="col-md-4">
								<div class="post post-sm">
									<a class="post-img" href="<?= base_url('olahraga/'.$artikel_terkait[1]['id'].'/'.url_title($artikel_terkait[1]['judul'], '-', TRUE)) ?>"><img src="<?= base_url('assets/img/artikel/'.$artikel_terkait[1]['gambar']) ?>" alt=""></a>
									<div class="post-body">
										<div class="post-category">
											<a href="category.html"><?= $artikel_terkait[1]['kategori'] ?></a>
										</div>
										<h3 class="post-title title-sm"><a href="<?= base_url('olahraga/'.$artikel_terkait[1]['id'].'/'.url_title($artikel_terkait[1]['judul'], '-', TRUE)) ?>"><?= $artikel_terkait[1]['judul'] ?></a></h3>
										<ul class="post-meta">
											<li><a href="<?= base_url('penulis') ?>"><?= $artikel_terkait[1]['created_by'] ?></a></li>
											<li><?= formatTanggal($artikel_terkait[1]['created_date']) ?></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- /post -->

							<!-- post -->
							<div class="col-md-4">
								<div class="post post-sm">
									<a class="post-img" href="<?= base_url('olahraga/'.$artikel_terkait[2]['id'].'/'.url_title($artikel_terkait[2]['judul'], '-', TRUE)) ?>"><img src="<?= base_url('assets/img/artikel/'.$artikel_terkait[2]['gambar']) ?>" alt=""></a>
									<div class="post-body">
										<div class="post-category">
											<a href="category.html"><?= $artikel_terkait[2]['kategori'] ?></a>
										</div>
										<h3 class="post-title title-sm"><a href="<?= base_url('olahraga/'.$artikel_terkait[2]['id'].'/'.url_title($artikel_terkait[2]['judul'], '-', TRUE)) ?>"><?= $artikel_terkait[2]['judul'] ?></a></h3>
										<ul class="post-meta">
											<li><a href="<?= base_url('penulis') ?>"><?= $artikel_terkait[2]['created_by'] ?></a></li>
											<li><?= formatTanggal($artikel_terkait[2]['created_date']) ?></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- /post -->
						</div>
					</div>
					<!-- /related post -->
				</div>