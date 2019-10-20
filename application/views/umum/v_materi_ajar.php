		<div class="col-md-9">
				<!--awal visi,misi, Sekolah-->
					<div class="panel panel-info">
					  	<div class="panel-heading">Materi Ajar</h3>
					  	</div>
					    <div class="panel-body">
							<h6>Data Materi Ajar : </h6>
							<table class="table table-stripped">
								<tr class="active">
									<th>Judul</th>
									<th>Pelajaran</th>
									<th>Download</th>
								</tr>
								<?php foreach ($t_materi_ajar as $data_materi_ajar) { ?>
								<tr>
									<td><?php echo $data_materi_ajar->judul; ?></td>
									<td><?php echo $data_materi_ajar->file; ?></td>
									<td><a href="<?php echo $data_materi_ajar->file; ?>"><i class="fa fa-download  fa-lg"></i> </a></td>
								</tr>
								<?php  } ?>
							</table>
					  	</div>
					</div>
				<!--akhir visi,misi, Sekolah-->
				</div>
			</div>
		</div>
	</div>
	<!-- === END CONTENT === -->