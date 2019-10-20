		<div class="col-md-9">
				<!--awal visi,misi, Sekolah-->
					<div class="panel panel-info">
					  	<div class="panel-heading">Sejarah</h3>
					  	</div>
					    <div class="panel-body">
							<p>
								<?php foreach ($t_profil as $data_sejarah) {
									echo $data_sejarah->isi;
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