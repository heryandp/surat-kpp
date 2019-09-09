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
				  <a class="active section">Pengaturan</a>
				</div>
				<div class="ui segments">
				  <div class="ui segment">
				    <p>Pengaturan</p>
				  </div>
				  <div class="ui secondary segment">
				  	<div class="ui top attached tabular menu">
					  <div class="active item" data-tab="tab-pengguna">Pengguna</div>
					  <div class="item" data-tab="tab-seksi">Seksi</div>
					  <div class="item" data-tab="tab-surat">Format Surat</div>
					  <div class="item" data-tab="tab-impor">Impor dan Ekspor</div>
					</div>
					<div class="ui bottom attached tab segment active" data-tab="tab-pengguna">
					  <p>Tab Pengguna</p>
					</div>
					<div class="ui bottom attached tab segment" data-tab="tab-seksi">
					  <p>Tab Seksi</p>
					</div>
					<div class="ui bottom attached tab segment" data-tab="tab-surat">
					  <p>Tab Surat</p>
					</div>
					<div class="ui bottom attached tab segment" data-tab="tab-impor">
					  <p>Tab Impor dan Ekspor</p>
					</div>
				  </div>
				</div>
			</div>
		</div>
		<!-- Active -->
		<script>
			$("#menu-pengaturan").addClass("item active");
		</script>

		<script>
			// Title
			$(function(){
			   $(document).attr("title", "Pengaturan - KPP Pratama XXX");
			});

			$( document ).ready(function() {
			    $('.ui.dropdown').dropdown();
			    $('.ui.checkbox').checkbox();
			    $('.tabular.menu .item').tab();
			});
		</script>
	</body>

<?php $this->load->view('template/foot'); ?>