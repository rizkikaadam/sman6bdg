			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Jawab Buku Tamu</a></li>
			</ul>
			<div class="row-fluid">
			<!--awal badan-->
				<div class="row-fluid sortable">
					<div class="box span12">
						<div class="box-header" data-original-title>
							<h2><i class="halflings-icon edit"></i><span class="break"></span>Jawab Buku Tamu</h2>
						</div>
						<div class="box-content">
						<?php foreach($t_buku as $u){ ?>
							<form class="form-horizontal" action="<?php echo base_url(). 'index.php/bukutamu/Jawab'; ?>" method="post">
							  <fieldset>
								<div class="control-group">
									<label class="control-label" for="disabledInput">Pengirim</label>
									<div class="controls">
									  <input class="input-xlarge disabled" id="disabledInput" type="text" value="<?php echo $u->email ?>" name="email" disabled="">
									  <input type="hidden" class="span6 typeahead" id="typeahead" name="id" value="<?php echo $u->id_buku ?>" >
									</div>
								</div> 
								<div class="control-group hidden-phone">
								  <label class="control-label" for="textarea2">Pesan</label>
								  <div class="controls">
									<textarea class="cleditor" id="textarea2" rows="8" name="isi"><?php echo $u->komentar ?></textarea>
								  </div>
								</div> 
								<div class="control-group hidden-phone">
								  <label class="control-label" for="textarea2">Jawaban</label>
								  <div class="controls">
									<textarea class="cleditor" id="textarea2" rows="8" name="tanggapan"></textarea>
								  </div>
								</div> 
								<div class="form-actions">
								  <button type="submit" class="btn btn-primary">Simpan</button>
								  <button type="reset" class="btn">Batal</button>
								</div>
							  </fieldset>
							</form>  
						</div>
					</div><!--/span-->
					<?php } ?>
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