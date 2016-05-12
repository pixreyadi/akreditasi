<div class="col-md-12 content-header">
	Data Borang <small><small>Standar 1</small></small>
</div>
<div class="col-md-12 content-data">
	<div class="col-md-12 box">
		<div class="box-header"><b>Daftar Borang Standar 1</b>
			<a href="<?php echo site_url('akr_prodi/standarSatu/formStandarSatu/tambah'); ?>" class="btn btn-success" style="padding-top:2px;padding-bottom:2px;font-size:8pt;float:right;margin-top:10px;margin-right:10px;" >Tambah</a>
		</div>
		<div class="col-md-12 box-content">
			<div class="table-responsive">
				<table id="example" class="table table-striped table-bordered">
					<thead>
					<tr>
					<th>Mekanisme Penyusunan</th>
					<th>Visi</th>
					<th>Misi</th>
					<th>Tujuan</th>
					<th>Sasaran</th>
					<th>Sosialisasi</th>
					<th>Aksi</th>
					</tr>
					</thead>
					<tbody>

					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<script src='<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js'></script>
<script src='<?php echo base_url(); ?>assets/js/dataTables.bootstrap.min.js'></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#example').DataTable();
});
</script>