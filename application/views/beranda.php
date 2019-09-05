<?php $this->load->view('template/head.php'); ?>
	
	<body>
		<!-- Menu -->
		<?php $this->load->view('template/menu.php'); ?>

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
						      	<button class="ui icon orange button"> <i class="pencil alternate small icon"></i> </button>
						      	<button class="ui icon green button"> <i class="print small icon"></i> </button>
						      	<button class="ui icon blue button"> <i class="eye small icon"></i> </button>
						      	<button class="ui icon red button"> <i class="trash small icon"></i> </button>
						      </td>
						    </tr>
						    <tr>
						      <td>2</td>
						      <td>998/RIK/2019</td>
						      <td>29-08-2019</td>
						      <td>ND-124/WPJ.1/KP.0101/2019</td>
						      <td>29-08-2019</td>
						      <td>Seksi Pemeriksaan</td>
						      <td>Usulan Pemeriksaan a.n. PT AHAYYY</td>
						      <td></td>
						      <td>
						      	<button class="ui icon orange button"> <i class="pencil alternate small icon"></i> </button>
						      	<button class="ui icon green button"> <i class="print small icon"></i> </button>
						      	<button class="ui icon blue button"> <i class="eye small icon"></i> </button>
						      	<button class="ui icon red button"> <i class="trash small icon"></i> </button>
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
		<form class="ui form">
		   <div class="field">
		      <label>Asal Surat</label>
		      <div class="ui selection dropdown">
		          <input type="hidden" name="seksi">
		          <i class="dropdown icon"></i>
		          <div class="default text">Pilih Asal</div>
		          <div class="menu">
		              <div class="item" data-value="1">Seksi</div>
		              <div class="item" data-value="0">Luar Kantor</div>
		          </div>
		      </div>
		  </div>
		  <div class="field">
		    <label>Asal Surat</label>
		    <input type="text" name="asal-surat" placeholder="KPP Pratama Kebumen">
		  </div>
		  <div class="field">
		      <label>Seksi</label>
		      <div class="ui selection dropdown">
		          <input type="hidden" name="seksi">
		          <i class="dropdown icon"></i>
		          <div class="default text">Pilih Seksi</div>
		          <div class="menu">
		              <div class="item" data-value="1">Seksi Pemeriksaan</div>
		              <div class="item" data-value="0">Seksi Pelayanan</div>
		          </div>
		      </div>
		  </div>
		  <div class="field">
		    <label>Nomor Sekretariat</label>
		    <input type="text" name="no-sekre" placeholder="999/99/069/KAP">
		  </div>
		  <div class="field">
		    <label>Hal</label>
		    <input type="text" name="hal-surat" placeholder="Perihal">
		  </div>
		  <div class="field">
		    <label>Scan Dokumen (.pdf)</label>
		    <input type="file" name="scan-dokumen">
		  </div>
		  <div class="field">
		      <div class="ui toggle checkbox">
		        <input type="checkbox" name="gift" tabindex="0" class="hidden">
		        <label>Cetak Disposisi</label>
		      </div>
		  </div>
		</form>
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
		    $('.ui.checkbox').checkbox();

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