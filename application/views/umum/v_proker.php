<div class="col-md-9">
				<!--awal visi,misi, Sekolah-->
					<div class="panel panel-info">
					  	<div class="panel-heading">
					    	<h3 class="panel-title"><i class="fa fa-clipboard fa-lg"></i> Program Kerja</h3>
					  	</div>
					    <div class="panel-body">
							<p>
								<?php foreach ($t_proker as $data_proker) {
									echo $data_proker->isi;
								} ?>
							</p>
					  	</div>
					</div>
				<!--akhir visi,misi, Sekolah-->
				</div>
			</div>
		</div>
	</div>
	<!-- === END CONTENT === -->