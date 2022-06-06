<?php
	if(ISSET($_GET['btn_submit'])){
		$digit = $_GET['txt_digit'];
		$currency = $_GET['currency'];
		if($digit != ""){
			switch($currency){
				case "Dollar":
					$output = $digit * 0.000274;
					echo"<center><label class='text-success' style='font-size:25px;'>$".$output."</label></center>";
				break;
				
				case "UGX":
					$output = $digit * 3870;
					echo"<center><label class='text-success' style='font-size:25px;'>UGX".$output."</label></center>";
				break;
				
				
			}
		}
	}
?>