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
	          		<p>
	          			<?php 
	          				if($_GET['error'] == "access")
	          					if(isset($_GET['id']))
	          						echo "شما به بخش  <span class='text-danger'>[".getActionName($_GET['id'])."]</span> دسترسی ندارید";
	          					else
	          						echo "شما به بخش  مورد نظر  دسترسی ندارید";
	          				elseif($_GET['error'] == "?")
	          					echo "";
	          			?>
	          		</p>
	          		<button id="hideModal" class="float-left btn btn-light">پنهان کردن</button>
	        	</div>
	      	</div>
    	</div>
  	</div>

  	<script>
	$(document).ready(function(){
	  // Show the Modal on load
	  $("#errorModal").modal("show");
	    
	  // Hide the Modal
	  $("#hideModal").click(function(){
	    $("#errorModal").modal("hide");
	  });
	});
	</script>