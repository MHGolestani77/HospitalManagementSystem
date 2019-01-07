<!-- Modal -->
  	<div class="modal fade" id="errorModal" role="dialog">
    	<div class="modal-dialog">
	      	<!-- Modal content-->
	      	<div class="modal-content">
	        	<div class="modal-header">
	          		<h4 class="modal-title">
	          		پیغام خطا
					<i class="fas fa-exclamation-triangle text-danger"></i>
	          		</h4>
	        	</div>
	        	<div class="modal-body">
	          		<p class="">
	          			<?php 
	          				if($_GET['error'] == "notUploaded")
	          					echo "عکس مورد نظر آپلود نشد";
	          			?>
	          		</p>
	          		<button id="hideErrorModal" class="float-left btn btn-light">پنهان کردن</button>
	        	</div>
	      	</div>
    	</div>
  	</div>

  	<script>
	$(document).ready(function(){
	  // Show the Modal on load
	  $("#errorModal").modal("show");
	    
	  // Hide the Modal
	  $("#hideErrorModal").click(function(){
	    $("#errorModal").modal("hide");
	  });
	});
	</script>