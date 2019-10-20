<div class="col-md-6">
	<!--Awal Berita-->
	<div class="panel panel-info">
	  	<div class="panel-heading">
	    	<h3 class="panel-title"><i class="fa fa-bars fa-lg"></i> Berita</h3>
	  	</div>
	    <div class="panel-body">
	      <!--Awal Menampilkan List Berita-->
	      <?php foreach ($t_news as $data_berita) {
	       ?>
	      	<div class="blog-post padding-bottom-20">
				<!-- Blog Item Header -->
				<div class="blog-item-header">
					<!-- Date -->
					<div class="blog-post-date pull-left">
						<span class="day">14</span>
						<span class="month">Dec</span>
					</div>
					<!-- End Date -->
					<!-- Title -->
					<h2><?php echo anchor('umum/tampil_berita/'.$data_berita->id_news,$data_berita->subject); ?></h2>
					<div class="clearfix"></div>
					<!-- End Title -->
				</div>
				<!-- End Blog Item Header -->
				<!-- Blog Item Body -->
				<div class="blog">
					<div class="clearfix"></div>
					<div class="blog-post-body row">
						<div class="col-md-12" style="padding-left:20px;">

							<p><?php echo word_limiter($data_berita->isi,'25'); ?></a></p>
							<!-- Read More -->
							<a href="#" class="btn btn-primary">
								Read More <i class="icon-chevron-right readmore-icon"></i>
							</a>
							<!-- End Read More -->
						</div>
					</div>
				</div>
				<!-- End Blog Item Body -->
			</div>
			<?php  } ?>
	      <!--Akhir Menampilkan List Berita-->
		    <ul class="list-unstyled list-services">
				<!-- menampilkan data list berita -->
				<label>Berita Lainnya :</label>
				<?php 
				foreach ($t_news_list as $data_news) {
					?>
					<li><i class='fa fa-chevron-circle-right'> </i><?php echo anchor('umum/tampil_berita/'.$data_berita->id_news,$data_news->subject); ?></li>
				<?php
				}
				?>
			</ul>
	  	</div>
	</div>
	<!--Akhir Berita-->
	<!--Awal Artikel-->
	<div class="panel panel-info">
	  	<div class="panel-heading">
	    	<h3 class="panel-title"><i class="fa fa-bars fa-lg"></i> Artikel</h3>
	  	</div>
	    <div class="panel-body">
	      <!--Awal Menampilkan List Artikel-->
	      <?php foreach ($t_artikel as $data_artikel) {?>
	      	<div class="blog-post padding-bottom-20">
				<!-- Blog Item Header -->
				<div class="blog-item-header">
					<!-- Date -->
					<div class="blog-post-date pull-left">
						<span class="day">14</span>
						<span class="month">Dec</span>
					</div>
					<!-- End Date -->
					<!-- Title -->
					<h2><?php echo anchor('umum/tampil_artikel/'.$data_artikel->id_artikel,$data_artikel->judul); ?></h2>
					<div class="clearfix"></div>
					<!-- End Title -->
				</div>
				<!-- End Blog Item Header -->
				<!-- Blog Item Body -->
				<div class="blog">
					<div class="clearfix"></div>
					<div class="blog-post-body row margin-top-15">
						<div class="col-md-12" style="padding-left:20px;">
							<p><?php echo word_limiter($data_artikel->isi,'25'); ?></a></p>
							<!-- Read More -->
							<a href="#" class="btn btn-primary">
								Read More <i class="icon-chevron-right readmore-icon"></i>
							</a>
							<!-- End Read More -->
						</div>
					</div>
				</div>
				<!-- End Blog Item Body -->
			</div>
			<?php } ?>
	      <!--Akhir Menampilkan List Artikel-->
	      	<ul class="list-unstyled list-services">
				<!-- menampilkan data list berita -->
				<label>Berita Lainnya :</label>
				<?php 
				foreach ($t_artikel_list as $data_artikel) {
					?>
					<li><i class='fa fa-chevron-circle-right'> </i><?php echo anchor('umum/tampil_artikel/'.$data_artikel->id_artikel,$data_artikel->judul); ?></li>
				<?php
				}
				?>
			</ul>
	  	</div>
	</div>
	<!--Akhir Akhirs-->
</div>