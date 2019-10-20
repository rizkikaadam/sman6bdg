		<div class="col-md-9">
				<!--awal visi,misi, Sekolah-->
					<div class="panel panel-info">
					  	<div class="panel-heading">
					    	<h3 class="panel-title"><i class="fa fa-building-o fa-lg"></i> Sarana & Prasarana</h3>
					  	</div>
					    <div class="panel-body">
							<table class="table table-bordered">
							<p>Berikut adalah data sarana dan prasarana yang dimiliki oleh sekolah SMAN 6 Bandung.</p>
								<tr class="active">
									<th>No.</th>
									<th>Fasilitas</th>
									<th>Jumlah</th>
								</tr>
								<?php 
								$no=1;
								foreach ($t_sarana as $data_sarana) {
								?>
								<tr>
									<td><?php echo $no++;?></td>
									<td><?php echo $data_sarana->nama;?></td>
									<td><?php echo $data_sarana->jumlah;?></td>
								</tr>
								<?php } ?>
							</table>
					  	</div>
					</div>
				<!--akhir visi,misi, Sekolah-->
				</div>
			</div>
		</div>
	</div>
	<!-- === END CONTENT === -->