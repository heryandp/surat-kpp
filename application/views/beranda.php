<html>
	<head>
		<title>Surat Kantor - KPP Pratama Jakarta Grogol Petamburan</title>

		<!-- css -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/semantic/semantic.min.css') ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/datatables/datatables.min.css') ?>">
		<style>
			/*.datatbles_length { display: inline-block;margin-right: 2em; }
			.dataTables_filter { display: inline-block; position: absolute !important; right: 2em; }
			table.dataTable.table { margin-top: 1em; }*/
			.datatableku {
				display: flex;
			    justify-content: space-between;
			    padding-bottom: 0.5em;
			    padding-top: 0.5em;
			}
		</style>

		<!-- js -->
		<script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js') ?>"></script>
		<script src="<?php echo base_url('assets/datatables/datatables.min.js') ?>"></script>
		<script src="<?php echo base_url('assets/semantic/semantic.min.js') ?>"></script>
	</head>
	<body>
		<!-- Menu -->
		<div class="ui large stackable menu">
		  <div class="item">
		  	<a class="ui large label">
				<i class="envelope icon"></i> Surat Kantor
			</a>
		  </div>
		  <a id="menu-dashboard" class="item"><i class="home icon"></i> Dashboard</a>
		  <a id="menu-surat-masuk" class="item"><i class="inbox green icon"></i> Surat Masuk</a>
		  <a id="menu-surat-keluar" class="item"><i class="inbox blue icon"></i> Surat Keluar</a>
		  <a id="menu-pengaturan" class="item"><i class="sliders horizontal icon"></i> Pengaturan</a>
		  <div class="right menu">
		    <div class="ui dropdown item">
		      <i class="user circle outline icon"></i> Heryan Dwiyoga Putra <i class="dropdown icon"></i>
		      <div class="menu">
		        <a class="item">Ubah Kata Sandi</a>
		      </div>
		    </div>
		    <div class="item">
		        <div class="ui red button">Keluar</div>
		    </div>
		  </div>
		</div>
		<!-- Isi -->
		<div class="ui centered grid">
		    <div class="fourteen wide column"> 
				<div class="ui breadcrumb">
				  <a class="section">Dashboard</a>
				  <div class="divider"> / </div>
				  <a class="active section">Surat Masuk</a>
				</div>
				<div class="ui segments">
				  <div class="ui segment">
				    <p>Surat Masuk</p>
				  </div>
				  <div class="ui secondary segment">
				  	<div id="tambah-surat" class="ui green button">Tambah</div>
				  	<div id="tambah-surat-massal" class="ui primary button">Tambah Massal</div>
					<table id="surat-masuk" class="ui six wide celled small table">
					  	<thead>
					    	<tr>
							    <th>No</th>
							    <th>No Agenda</th>
							    <th>Tgl Agenda</th>
							    <th>No Surat</th>
							    <th>Tgl Surat</th>
							    <th>Asal Surat</th>
							    <th>Hal</th>
							    <th>Pelaksana</th>
							    <th>Aksi</th>
					  		</tr>
						</thead>
					  	<tbody>
						    <tr>
						      <td>1</td>
						      <td>999/RIK/2019</td>
						      <td>30-08-2019</td>
						      <td>ND-123/WPJ.1/KP.0101/2019</td>
						      <td>29-08-2019</td>
						      <td>Seksi Pemeriksaan</td>
						      <td>Usulan Pemeriksaan a.n. PT AHAYYY</td>
						      <td>Heryan Dwiyoga P</td>
						      <td>
						      	<button class="ui icon orange button"> <i class="pencil alternate icon"></i> </button>
						      	<button class="ui icon red button"> <i class="trash icon"></i> </button>
						      </td>
						    </tr>
					  	</tbody>
					</table>
				  </div>
				</div>
			</div>
		</div>
	</body>

	<!-- Modal -->
	<div class="ui tiny modal">
	  <div id="judul-modal" class="header">
	    Tambah Surat Masuk
	  </div>
	  <div class="content">
		Test
	  </div>
	  <div class="actions">
	    <div class="ui black deny button">
	      Batal
	    </div>
	    <div class="ui positive button">
	      Tambahkan
	    </div>
	  </div>
	</div>

	<!-- Active -->
	<script>
		$("#menu-surat-masuk").addClass("item active");
	</script>

	<script>
		$( document ).ready(function() {
		    $('.ui.dropdown').dropdown();

		    $('#surat-masuk').DataTable({
		    	responsive: true,
		    	autoFill: true,
		    	dom: '<"datatableku"lBf>t<"datatableku"ip>',
		    	// dom: 'lBfrtip',
			    buttons: [
			        'copy', 'excel', 'pdf'
			    ]
			});
		});

		$(function(){
			$("#tambah-surat").click(function(){
			    $('.ui.modal').modal('show');
			    $('#judul-modal').text('Tambah Surat Masuk');
			});
			$("#tambah-surat-massal").click(function(){
			    $('.ui.modal').modal('show');
			    $('#judul-modal').text('Tambah Surat Masuk Massal');
			});
			$(".ui.modal").modal({
				closable: true
			});
		});
		// $('.ui.dropdown').dropdown();
	</script>
</html>