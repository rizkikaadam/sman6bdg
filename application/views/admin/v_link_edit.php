			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Link Web</a><i class="icon-angle-right"></i></li>
				<li><a href="#">Edit</a></li>
			</ul>
			<div class="row-fluid">
			<!--awal badan-->
				<div class="row-fluid sortable">
					<div class="box span12">
						<div class="box-header" data-original-title>
							<h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Link</h2>
						</div>
						<div class="box-content">
						<?php foreach($t_news as $u){ ?>
							<form class="form-horizontal" action="<?php echo base_url(). 'index.php/link/update'; ?>" method="post">
							  <fieldset>
								<div class="control-group">
								  <label class="control-label" for="typeahead">id_link</label>
								  <div class="controls">
									<input type="hidden" class="span6 typeahead" id="typeahead" name="id" value="<?php echo $u->id_link ?>" >
									<input type="hidden" class="span6 typeahead" id="typeahead" name="id_user" value="<?php echo $u->id_user ?>" >
								  </div>
								</div>   
								<div class="control-group">
								  <label class="control-label" for="typeahead">Alamat</label>
								  <div class="controls">
									<input type="text" class="span6 typeahead" id="typeahead" name="alamat" value="<?php echo $u->alamat ?>" >
									<p class="help-block">Ditulis Alamat URL tidak perlu menggunakan http://</p>
								  </div>
								</div> 
								<div class="control-group hidden-phone">
								  <label class="control-label" for="textarea2">Keterangan</label>
								  <div class="controls">
									<textarea class="cleditor" id="textarea2" rows="8" name="ket"><?php echo $u->id_news ?></textarea>
								  </div>
								</div>
								<div class="control-group">
									<label class="control-label" for="selectError3">Jenis</label>
									<div class="controls">
									  <select id="selectError3" name="jenis">
										<option value="Pemerintah">Pemerintah</option>
										<option value="Organisasi">Organisasi</option>
										<option value="Tutorial">Tutorial</option>
										<option value="Project">Project</option>
										<option value="Sekolah">Sekolah</option>
										<option value="Umum">Umum</option>
										<option value="PLH">PLH</option>
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