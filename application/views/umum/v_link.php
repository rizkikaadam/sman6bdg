	<div class="col-md-9">
			<!--awal visi,misi, Sekolah-->
				<div class="panel panel-info">
				  	<div class="panel-heading">Link</h3>
				  	</div>
				    <div class="panel-body">
						<div class="tabs alternative">
				                <ul class="nav nav-tabs">
				                    <li class="active"><a href="#sample-2a" data-toggle="tab">Pemerintah</a></li>
				                    <li><a href="#sample-2b" data-toggle="tab">Organisasi</a></li>
				                    <li><a href="#sample-2c" data-toggle="tab">Tutorial</a></li>
				                    <li><a href="#sample-2d" data-toggle="tab">Project</a></li>
				                    <li><a href="#sample-2e" data-toggle="tab">Sekolah</a></li>
				                    <li><a href="#sample-2f" data-toggle="tab">Umum</a></li>
				                </ul>
				                <div class="tab-content">
				                    <div class="tab-pane fade in active" id="sample-2a">
				                    	<table class="table table-striped">
											<tr class="active">
												<th>No.</th>
												<th>URL</th>
												<th>Keterangan</th>
											</tr>
											<?php $no=1; foreach ($link1 as $data_link) {?>
											<tr>
												<td><?php echo $no++; ?></td>
												<td><a href="http://<?php echo $data_link->alamat; ?>"><?php echo $data_link->alamat; ?></a></td>
												<td><?php echo $data_link->ket; ?></td>
											</tr>
											<?php } ?>
										</table>
				                    </div>
				                    <div class="tab-pane fade in" id="sample-2b">
				                    	<table class="table table-striped">
											<tr class="active">
												<th>No.</th>
												<th>URL</th>
												<th>Keterangan</th>
											</tr>
											<?php $no=1; foreach ($link2 as $data_link2) {?>
											<tr>
												<td><?php echo $no++; ?></td>
												<td><a href="http://<?php echo $data_link2->alamat; ?>"><?php echo $data_link2->alamat; ?></a></td>
												<td><?php echo $data_link->ket; ?></td>
											</tr>
											<?php } ?>
										</table>
				                    </div>
				                    <div class="tab-pane fade in" id="sample-2c">
				                    	<table class="table table-striped">
											<tr class="active">
												<th>No.</th>
												<th>URL</th>
												<th>Keterangan</th>
											</tr>
											<?php $no=1; foreach ($link3 as $data_link3) {?>
											<tr>
												<td><?php echo $no++; ?></td>
												<td><a href="http://<?php echo $data_link3->alamat; ?>"><?php echo $data_link3->alamat; ?></a></td>
												<td><?php echo $data_link->ket; ?></td>
											</tr>
											<?php } ?>
										</table>
				                    </div>
				                    <div class="tab-pane fade in" id="sample-2d">
				                    	<table class="table table-striped">
											<tr class="active">
												<th>No.</th>
												<th>URL</th>
												<th>Keterangan</th>
											</tr>
											<?php $no=1; foreach ($link4 as $data_link4) {?>
											<tr>
												<td><?php echo $no++; ?></td>
												<td><a href="http://<?php echo $data_link4->alamat; ?>"><?php echo $data_link4->alamat; ?></a></td>
												<td><?php echo $data_link->ket; ?></td>
											</tr>
											<?php } ?>
										</table>
				                    </div>
				                    <div class="tab-pane fade in" id="sample-2e">
				                    	<table class="table table-striped">
											<tr class="active">
												<th>No.</th>
												<th>URL</th>
												<th>Keterangan</th>
											</tr>
											<?php $no=1; foreach ($link5 as $data_link5) {?>
											<tr>
												<td><?php echo $no++; ?></td>
												<td><a href="http://<?php echo $data_link5->alamat; ?>"><?php echo $data_link5->alamat; ?></a></td>
												<td><?php echo $data_link->ket; ?></td>
											</tr>
											<?php } ?>
										</table>
				                    </div>
				                    <div class="tab-pane fade in" id="sample-2f">
				                    	<table class="table table-striped">
											<tr class="active">
												<th>No.</th>
												<th>URL</th>
												<th>Keterangan</th>
											</tr>
											<?php $no=1; foreach ($link6 as $data_link6) {?>
											<tr>
												<td><?php echo $no++; ?></td>
												<td><a href="http://<?php echo $data_link6->alamat; ?>"><?php echo $data_link6->alamat; ?></a></td>
												<td><?php echo $data_link->ket; ?></td>
											</tr>
											<?php } ?>
										</table>
				                    </div>
				                   </div>
				                </div>
				            </div>
				  	</div>
				</div>
			<!--akhir visi,misi, Sekolah-->
			</div>
		</div>
	</div>
</div>
<!-- === END CONTENT === -->