		<div class="col-md-9">
				<!--awal visi,misi, Sekolah-->
					<div class="panel panel-info">
					  	<div class="panel-heading">Info Alumni</h3>
					  	</div>
					    <div class="panel-body">
							<?php foreach ($t_alumni as $data_alumni) { ?>
							<div class="carousel slide testimonials" id="testimonials1">
		                        <div class="carousel-inner">
		                            <div class="item active">
		                                <div class="col-md-12">
		                                    <p><?php echo $data_alumni->pesan; ?></p><span class="date"><i class="fa fa-calendar fa-lg"></i> <?php echo $data_alumni->tanggal; ?></span>
		                                    <div class="testimonial-info">
		                                        <span class="testimonial-author">
		                                        <i class="fa fa-user fa-lg"></i> <?php echo $data_alumni->nama; ?>
		                                        </span>
		                                    </div>
		                                </div>
		                                <div class="clearfix"></div>
		                            </div>
		                        </div>
		                    </div>
		                    <?php } ?>
					  	</div>
					</div>
				<!--akhir visi,misi, Sekolah-->
				</div>
			</div>
		</div>
	</div>
	<!-- === END CONTENT === -->