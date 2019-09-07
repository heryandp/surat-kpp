<?php $this->load->view('template/head.php'); ?>
	
	<body>
		<!-- Menu -->
		<?php $this->load->view('template/menu.php'); ?>

		<!-- Isi -->
		<div class="ui centered grid">
		    <div class="fourteen wide column"> 
				<div class="ui breadcrumb">
				  <a class="active section">Dashboard</a>
				</div>
				<div class="ui segments">
				  <div class="ui segment">
				    <p>Dashboard</p>
				  </div>
				  <div class="ui secondary segment">
					
				  </div>
				</div>
			</div>
		</div>

		<!-- Active -->
		<script>
			$("#menu-dashboard").addClass("item active");
		</script>

		<script>
			// Title
			$(function(){
			   $(document).attr("title", "Dashboard - KPP Pratama XXX");
			});
		</script>
	</body>

<?php $this->load->view('template/foot'); ?>