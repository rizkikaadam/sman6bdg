			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Data Kategori Link</a></li>
				<i class="icon-angle-right"></i>
				<li><a href="#">Edit</a></li>
			</ul>
			<div class="row-fluid">
			<!--awal badan-->
				<div class="row-fluid sortable">
					<div class="box span12">
						<div class="box-header" data-original-title>
							<h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Kategori Link</h2>
						</div>
						<div class="box-content">
						<?php foreach($t_kategori as $u){ ?>
							<form class="form-horizontal" action="<?php echo base_url(). 'index.php/kategori_link/update'; ?>" method="post">
							  <fieldset>
								<div class="control-group">
								  <label class="control-label" for="typeahead">Kategori Link</label>
								  <div class="controls">
									<input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" name="kategori" value="<?php echo $u->kategori ?>">
									<input type="hidden" class="span6 typeahead" id="typeahead" name="id_gambar_atas" value="<?php echo $u->id_kategori ?>">
								  </div>
								</div>
								<div class="control-group">
									<label class="control-label" for="selectError">Jenis Link</label>
									<div class="controls">
									  <select id="selectError" data-rel="chosen" name="jenis">
										<option>Link Web</option>
										<option>Materi Uji</option>
										<option>Materi Ajar</option>
										<option>Banner</option>
									  </select>
									</div>
								</div> 
								<div class="form-actions">
								  <button type="submit" class="btn btn-primary">Simpan</button>
								  <button type="reset" class="btn">Batal</button>
								</div>
							  </fieldset>
							</form>   
						<?php }?>
						</div>
					</div><!--/span-->

				</div><!--/row-->

			<!--akhir badan-->
			</div>
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