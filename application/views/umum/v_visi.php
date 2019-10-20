				<div class="col-md-9">
				<!--awal visi,misi, Sekolah-->
					<div class="panel panel-info">
					  	<div class="panel-heading">
					    	<h3 class="panel-title">Visi, Misi, Strategi & Tujuan</h3>
					  	</div>
					    <div class="panel-body">
							<p>
								<?php foreach ($t_profil as $data_visi) {
									echo $data_visi->isi;
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