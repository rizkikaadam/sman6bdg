			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Registrasi Member Orang Tua/wali</a></li>
			</ul>
			<!--awal badan-->
			<div class="row-fluid">
				<div class="row-fluid sortable">	
				<div class="box span12">
					<div class="box-header">
						<h2><i class="halflings-icon align-justify"></i><span class="break"></span>Data Siswa</h2>
						<div class="box-icon">
						</div>
					</div>
					<div class="box-content">
					<a href="#" class=""><button class="btn btn-small btn-primary"><?php echo anchor('wali/tambah','Tambah Data'); ?></button></a><br/><br/>
						<table class="table table-bordered table-striped table-condensed">
							  <thead>
								  <tr>
									<th>No</th>
									<th>NIS</th>
									<th>Nama</th>
									<th>Kelas</th>
									<th>Daftar</th>
									<th>aksi</th>                                       
								  </tr>
							  </thead>   
							  <tbody>
							  	<?php 
								//$no = 1;
								//foreach($t_wali as $u){ 
								?>
								<tr>
									<td><?php //echo $no++ ?></td>
									<td><?php //echo $u->id_wali ?></td>
									<td><?php //echo $u->id_staf ?></td>
									<td><?php //echo $u->id_pelajaran ?></td>
									<td><?php echo anchor('wali/tambah','registrasi'); ?></td>
									<td>
									      <button class="btn btn-small btn-success"> <?php //echo anchor('wali/edit/'.$u->id_wali,'Edit'); ?></button>
									      <button class="btn btn-small btn-danger"> <?php //echo anchor('wali/hapus/'.$u->id_wali,'Hapus'); ?></button>
									</td>                                                                        
								</tr>
								<?php //} ?>                               
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