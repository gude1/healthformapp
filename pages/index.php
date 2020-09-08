<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../styles/w3.css">
	<meta name="description" content="Health form">
	<style type="text/css">
		html,body{
			height: 100vh;
			margin: 0;
			font-family: sans-serif;
		}
		#formcontainer{
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			width:100vw;
			height: 100vh;
		}
		.healthformslist{
           display: flex;
			flex-direction: column;
			align-items: center;
		}
        .listitemcontainer{
		  width: 100%;
        }
		input,Button{
         outline: none;
		}
		.hide{
          display: none;
		}
	</style>
</head>
<body class="w3-animate-left w3-light-grey w3-display-container">
   <div id="formcontainer" class="w3-border">
   	<!-- first form -->
   	<?php  include_once "includes/firstform.php"?>
   	<!-- first form-->

   	<!--project details form-->
   	<?php  include_once "includes/projectdetailsform.php"?>
   	<!--project details form-->

   	<!--personal details form-->
   	<?php  include_once "includes/personaldetailsform.php"?>
   	<!--personal details form-->

   	<!--informedconsentform-->
   	<?php  include_once "includes/informedcosentform.php"?>
   	<!--informedconsentform-->

   	<!--precounselling form-->
   	<?php  include_once "includes/precounsellingform.php"?>
   	<!--precounselling form-->

   	<!--hivetestingservices form-->
   	<?php  include_once "includes/hivtestingservicesform.php"?>
   	<!--hivetestingservices form-->

   	<!--hivselftest form-->
   	<?php  include_once "includes/hivselftestingform.php"?>
   	<!--hivselftest form-->

   	<!--wellness-screeningform-->
   	<?php  include_once "includes/wellness-screeningform.php"?>
   	<!--wellness-screeningform-->

   		<!--wellness-screeningform-->
   	<?php  include_once "includes/tbinformationform.php"?>
   	<!--wellness-screeningform-->


   </div>
   <button onclick="substractSlides()" class="w3-display-left w3-small w3-btn w3-round w3-center w3-blue">Left</button>
	<button onclick="addSlides()" class="w3-display-right w3-small w3-round w3-btn w3-blue w3-center">Right</button>
   <!--script-->
   <script type="text/javascript">
   	var positon = 0;
   	var i = 0;
   	var classelements = document.querySelectorAll('.healthforms');
    function hideElements(){
   	 for (var i = 0; i < classelements.length; i++) {
         classelements[i].className += ' w3-hide';
     }
    }
  function addSlides(){
  	positon +=1;
  	positon = positon < 0 || positon >=classelements.length ? 0 : positon;
  	console.warn(positon);
  	hideElements();
  	classelements[positon].className = classelements[positon].className.replace(/w3-hide/g,'');
  }

  function substractSlides(){
  	positon -=1;
  	positon = positon < 0 || positon >= classelements.length ? classelements.length -1 : positon;
  	hideElements();
  	classelements[positon].className = classelements[positon].className.replace(/w3-hide/g,'');
  }

   
   </script>
</body>
</html>