<footer>
      <div class="copyright text-center">
        Copyright &copy; 2020 <span>KPRI "Usaha Bersama" Balai Industri Semarang</span>
      </div>
    </footer>

<script>
  $(document).ready(function() {
  	var max = 0;
  	var x = 0;
    $.each($('.linkatas'), function(index) {
    	max = Math.max(index);
    	for(x=0; x<=max;x++){
    		$('#link'+x).on('click', function(e) {
    			e.preventDefault();
    			var link = $(this).data('recid');
    			console.log(link);

    			switch(link) {
    				case 'beranda':
    					$.ajax({
    						url: 'maincontent.php',
    						type: 'get',
    						success: function(response) {
    							$("#utama").html(response);
    						},
    						error: function(error) {
    							console.log(error);
    						}
    					})
    					break;

    				case 'link1':
    					$('#link0').removeClass('active');
                        $('#loading-state').fadeIn('fast');
                        $("#utama").html('asu');
                        $('#loading-state').fadeOut('fast');
    					break;
    			}
    		})
    	}
    })
  })
</script>
  </body>
</html>