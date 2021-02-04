	<!-- HEADER -->
	<header id="header">
		<!-- NAV -->
		<div id="nav">
        	<!-- Top Nav -->
			<div id="nav-top">
				<div class="container">
					<!-- social -->
					<ul class="nav-social">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
					</ul>
					<!-- /social -->

					<!-- logo -->
					<div class="nav-logo">
						<a href="<?= site_url() ?>" class="logo"><img src="<?= base_url('assets/img/logo2.png') ?>" alt=""></a>
					</div>
					<!-- /logo -->

					<!-- search & aside toggle -->
					<div class="nav-btns">
						<button class="aside-btn"><i class="fa fa-bars"></i></button>
						<button class="search-btn"><i class="fa fa-search"></i></button>
						<div id="nav-search">
							<?= form_open('pencarian/cari', 'method="get"'); ?>
								<?= form_input('kata_kunci', '', ['class' => 'input', 'placeholder' => 'Masukkan pencarian Anda...', 'required' => 'required']); ?>
							<?= form_close(); ?>
							<button class="nav-close search-close">
								<span></span>
							</button>
						</div>						
						<!-- <button><i class="fa fa-user-circle" style="font-size:20px" data-toggle="modal" data-target="#myModal"></i></button> -->

						<?php $is_login = $this->session->userdata('sudah_login'); ?>
						<?php if (!$is_login): ?>
							<button type="button" style="color:red;border: 1px solid red; border-radius: 5px; padding: 0px; margin: 0px;" data-toggle="modal" data-target="#myModal">
							<span>Login<span>
							</button>
  							<!-- Modal -->
  							<div class="modal fade" id="myModal" role="dialog">
  							  <div class="modal-dialog">

  							    <!-- Modal content-->
  							    <div class="modal-content">
  							      <div class="modal-header">
  							        <button type="button" class="close" data-dismiss="modal">&times;</button>
  							        <h4 class="modal-title">Silahkan Login</h4>
  							      </div>
  							      <div class="modal-body">
									  <a href="<?= $login_url_facebook ?>" class="btn btn-primary active btn-block" role="button"><i class="fa fa-facebook-official"></i> Login dengan Facebook</a>
									  <div style="text-align:center; margin-top: 5px; margin-bottom: 5px;"><strong>Atau:</strong></div>
									  <a href="<?= $login_url_google ?>" class="btn btn-danger active btn-block" role="button"><i class="fa fa-google"></i> Login dengan Google</a>
  							      </div>
  							    </div>

  							  </div>
  							</div>
						<?php else: ?>
							<button type="button"><img src="<?= '/assets/img/users/'.$this->session->userdata('photo_full') ?>" class="dropdown-akun" height="42" width="42">						
							</button>
						<?php endif; ?>
						
					</div>
					<!-- /search & aside toggle -->
				</div>
			</div>
			<!-- /Top Nav -->

			<!-- Main Nav -->
			<div id="nav-bottom">
				<div class="container">
					<!-- nav -->
					<ul class="nav-menu">
						<li><a href="<?= site_url() ?>"<?= $data['menu'] == 'beranda' ? ' style="color:#ec4366;"' : ''?>>Beranda</a></li>
						<li><a href="<?= base_url('teknologi') ?>"<?= $data['menu'] == 'teknologi' ? ' style="color:#ec4366;"' : ''?>>Teknologi</a></li>
						<li><a href="<?= base_url('travel') ?>"<?= $data['menu'] == 'travel' ? ' style="color:#ec4366;"' : ''?>>Travel</a></li>
						<li><a href="<?= base_url('automotif') ?>"<?= $data['menu'] == 'automotif' ? ' style="color:#ec4366;"' : ''?>>Automotif</a></li>
						<li><a href="<?= base_url('olahraga') ?>"<?= $data['menu'] == 'olahraga' ? ' style="color:#ec4366;"' : ''?>>Olahraga</a></li>
					</ul>
					<!-- /nav -->
				</div>
			</div>
			<!-- /Main Nav -->
            
			<!-- Aside Nav -->
			<div id="nav-aside">
				<ul class="nav-aside-menu">
					<li><a href="<?= site_url() ?>"<?= $data['menu'] == 'beranda' ? ' style="color:#ec4366;"' : ''?>>Beranda</a></li>
					<li class="has-dropdown"><a>Kategori</a>
						<ul class="dropdown">
							<li><a href="<?= base_url('teknologi') ?>"<?= $data['menu'] == 'teknologi' ? ' style="color:#ec4366;"' : ''?>>Teknologi</a></li>
							<li><a href="<?= base_url('travel') ?>"<?= $data['menu'] == 'travel' ? ' style="color:#ec4366;"' : ''?>>Travel</a></li>
							<li><a href="<?= base_url('automotif') ?>"<?= $data['menu'] == 'automotif' ? ' style="color:#ec4366;"' : ''?>>Automotif</a></li>
							<li><a href="<?= base_url('olahraga') ?>"<?= $data['menu'] == 'olahraga' ? ' style="color:#ec4366;"' : ''?>>Olahraga</a></li>
						</ul>
					</li>
					<li><a href="<?= base_url('tentang-kami') ?>"<?= $data['menu'] == 'tentang-kami' ? ' style="color:#ec4366;"' : ''?>>Tentang Kami</a></li>
					<li><a href="<?= base_url('kontak') ?>"<?= $data['menu'] == 'kontak' ? ' style="color:#ec4366;"' : ''?>>Kontak</a></li>
				</ul>
				<button class="nav-close nav-aside-close"><span></span></button>
			</div>
			<!-- /Aside Nav -->
		</div>
		<!-- /NAV -->

        <?php if(isset($data['header_kategori'])): ?>        
		<!-- PAGE HEADER -->
		<div class="page-header">
			<div class="page-header-bg" style="background-image: url('<?= base_url('assets/img/'.$data['header_kategori'].'.jpg') ?>');" data-stellar-background-ratio="0.5"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10 text-center">
						<h1 class="text-uppercase"><?= $data['header_kategori'] ?></h1>
					</div>
				</div>
			</div>
		</div>
		<!-- /PAGE HEADER -->
        <?php endif; ?>

        <?php if(isset($data['header_artikel'])): ?>        
		<!-- PAGE HEADER -->
		<div id="post-header" class="page-header">
			<div class="page-header-bg" style="background-image: url('<?= base_url('assets/img/artikel/'.$artikel['gambar']) ?>');" data-stellar-background-ratio="0.5"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						<div class="post-category">
							<a href="<?= base_url($artikel['kategori']) ?>"><?= $artikel['kategori'] ?></a>
						</div>
						<h1><?= $artikel['judul'] ?></h1>
						<ul class="post-meta">
							<li><a href="<?= base_url('penulis') ?>"><?= $artikel['created_by'] ?></a></li>
							<li><?= formatTanggal($artikel['created_date']) ?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- /PAGE HEADER -->
        <?php endif; ?>

        <?php if(!empty($data['single_page'])): ?> 
        <!-- PAGE HEADER -->
		<div class="page-header">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10 text-center">
						<h1 class="text-uppercase"><?= $data['single_page'] ?></h1>
					</div>
				</div>
			</div>
		</div>
		<!-- /PAGE HEADER -->
        <?php endif; ?>

	</header>
	<!-- /HEADER -->