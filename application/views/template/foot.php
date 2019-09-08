	<!-- Modal -->
		<div id="modal-tentang" class="ui tiny modal">
		  <div id="judul-modal" class="header">
		    Tentang Aplikasi
		  </div>
		  <div class="content">
			<div class="ui items">
			  <div class="item">
			    <div class="content">
			      <div class="description">
			        <p>Aplikasi Surat KPP adalah aplikasi surat menyurat untuk mempermudah proses administrasi surat di kantor khususnya di Kantor Pelayanan Pajak.</p>
			        <div class="ui list">
		        	  <div class="item">
					    <div class="header">Kritik dan Saran atau Troubleshoot</div>
					  </div>
					  <div class="item">
					    <i class="user secret icon"></i>
					    <div class="content">Heryan Dwiyoga Putra
					    </div>
					  </div>
					  <div class="item">
					    <i class="mail icon"></i>
					    <div class="content">
					      <a href="mailto:heryan.putra@pajak.go.id">heryan.putra@pajak.go.id</a>
					    </div>
					  </div>
					  <div class="item">
					    <i class="linkify icon"></i>
					    <div class="content">
					      <a href="http://server.heryandp.com">server.heryandp.com</a>
					    </div>
					  </div>
					  <div class="item">
					    <i class="github icon"></i>
					    <div class="content">
					      <a href="https://github.com/heryandp/">https://github.com/heryandp</a>
					    </div>
					  </div>
					</div>
			      </div>
			     
			    </div>
			  </div>
		  </div>
		</div>
		<script type="text/javascript">
			$(function(){
				$("#menu-tentang").click(function(){
					$('#judul-modal').text('Tentang Aplikasi');
				    $('#modal-tentang').modal('show');
				});

				$("#modal-tentang").modal({
					closable: true
				});
			});
		</script>
</html>