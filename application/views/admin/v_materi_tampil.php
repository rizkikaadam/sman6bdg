			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Data Materi</a></li>
			</ul>
			<!--awal badan-->
			<div class="row-fluid">
				<div class="row-fluid sortable">	
				<div class="box span12">
					<div class="box-header">
						<h2><i class="halflings-icon align-justify"></i><span class="break"></span>Data Materi</h2>
						<div class="box-icon">
						</div>
					</div>
					<div class="box-content"> 
						<table class="table table-bordered table-striped table-condensed">
							  <thead>
								  <tr>
									<th>No</th>
									<th>Tanggal</th>
									<th>Judul</th>
									<th>Deskripsi</th>
									<th>File</th>
									<th>Kategori</th>
									<th>Aksi</th>                                       
								  </tr>
							  </thead>   
							  <tbody>
							  	<?php 
								$no = 1;
								foreach($t_materi as $u){ 
								?>
								<tr>
									<td><?php echo $no++ ?></td>
									<td><?php echo $u->tanggal ?></td>
									<td><?php echo $u->judul ?></td>
									<td><?php echo $u->deskripsi ?></td>
									<td><?php echo $u->file ?></td>
									<td><?php echo $u->kategori ?></td>
									<td>
						                <?php echo anchor('materi/hapus/'.$u->id_download,'Hapus'); ?>
									</td>                                                                        
								</tr>
								<?php } ?>                               
							  </tbody>
						 </table>  
						 <div class="pagination pagination-centered">
						  <ul>
							<li><a href="#">Prev</a></li>
							<li class="active">
							  <a href="#">1</a>
							</li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">Next</a></li>
						  </ul>
						</div>     
					</div>
				</div><!--/span-->
			</div><!--/row-->
			</div>
			<!--akhir badan-->
			<hr/>
	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>