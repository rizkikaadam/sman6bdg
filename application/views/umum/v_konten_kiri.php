		<!-- === BEGIN CONTENT === -->
		<div id="content" class="container" style="box-shadow: 4px 4px 5px #817f88;background-color: #ffffff;border: 1px solid #ddd;">
			<div class="row margin-top-10">
				
			</div>
			<div class="row show-grid" style="padding-top: 10px;">
				<!--content sebelah kanan-->
				<div class="col-md-3">
					<!-- Awal Login  -->
					<div class="panel panel-info">
					  	<div class="panel-heading">
					    	<h3 class="panel-title"><i class="fa fa-user fa-lg"></i> Login</h3>
					  	</div>
					    <div class="panel-body">
					      	<form class="">
								<div class="input-group margin-bottom-20">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input placeholder="Username" class="form-control" type="text">
								</div>
								<div class="input-group margin-bottom-20">
									<span class="input-group-addon"><i class="fa fa-lock"></i></span>
									<input placeholder="Password" class="form-control" type="password">
								</div>
								<div class="row">
									<div class="col-md-4">
										<button class="btn btn-primary pull-right" type="submit">Login</button>
									</div>
								</div>
							</form>
					  	</div>
					</div>
					<!-- Akhir Login  -->
					<!-- Awal Daftar Link -->
					<div class="panel panel-info">
					  	<div class="panel-heading">
					    	<h3 class="panel-title"><i class="fa fa-external-link fa-lg"></i> Daftar Link</h3>
					  	</div>
					    <div class="panel-body">
							<ul class="list-unstyled list-services">
							<!-- menampilkan data link -->
							<?php 
							foreach ($t_link as $data_link) {
								?>
								<a href="<?php echo $data_link->alamat;?>"><li><i class='fa fa-external-link fa-lg'> </i><?php echo $data_link->alamat;?></li></a>
							<?php
							}
							?>
							</ul>
					  	</div>
					</div>
					<!-- Akhir Daftar Link -->
					<!-- Awal Agenda  -->
					<div class="panel panel-info">
					  	<div class="panel-heading">
					    	<h3 class="panel-title"><i class="fa fa-calendar fa-lg"></i>  Agenda</h3>
					  	</div>
					    <div class="panel-body">
					    	<?php echo $t_kalender; ?>
					  	</div>
					</div>
					<!-- Akhir Agenda  -->
					<!-- Awal Info Sekolah  -->
					<div class="panel panel-info">
					  	<div class="panel-heading">
					    	<h3 class="panel-title"><i class="fa fa-info-circle fa-lg"></i> Info Sekolah</h3>
					  	</div>
					    <div class="panel-body">
					    <!--menampilkan data info-->
					    <?php foreach ($t_info as $data_info){?>					    
					      <ul class="list-unstyled list-services">
								<a href=""><li><i class="fa fa-info-circle fa-lg"></i> <?php echo $data_info->subject; ?></li></a>
							</ul>
						<?php }?>
					  	</div>
					</div>
					<!-- Akhir Info Sekolah  -->
				</div>
				<!--akhir content sebelah kanan-->