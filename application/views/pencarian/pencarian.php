	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-12">
						<h3>Hasil pencarian judul artikel dengan kata kunci: <i>"<?= $data['pencarian'] ?>"</i></h3><br>
                <?php foreach( $hasil_pencarian as $data_pencarian ):  ?>
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
								<li><?= formatTanggal($data_pencarian['created_date']) ?></li>
							</ul>
							<p><?= word_limiter($data_pencarian['deskripsi'], 20) ?></p>
						</div>
					</div>
					<!-- /post -->
                <?php  endforeach; ?>
				</div>
			</div>
		</div>
	</div>