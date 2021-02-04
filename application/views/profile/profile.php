<hr>
<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-12">

                    <div class="container">
                      <h2>Lihat Profile</h2>
                      <form class="form-horizontal" action="/action_page.php">
                        <div class="form-group">
                          <label class="control-label col-sm-2" for="nama">Nama:</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?= !empty($data_user['nama']) ? $data_user['nama'] : '' ?>" id="nama" placeholder="Masukkan nama" name="nama" readonly>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-2" for="username">Username:</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?= !empty($data_user['username']) ? $data_user['username'] : '' ?>" id="username" name="username" readonly>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-2" for="email">Email:</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" value="<?= !empty($data_user['email']) ? $data_user['email'] : '' ?>" id="email" placeholder="Masukkan email" name="email" readonly>
                          </div>
                        </div>
                      </form>
                    </div>

				</div>
			</div>
		</div>
	</div>