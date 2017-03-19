		<footer>
			<p style="font-weight:bold;text-align: center;padding-top: 1em;">© Yassine Latti | 2017.</p>	
		</footer>	
		<script type="text/javascript">

			// $("#error_if_no_session").on( "click", function() {

			// 	<?php// if(isset($_SESSION['client']) == true){

			// 		header("Location: http://yassinl.dijon.codeur.online/achievo_project/");

			// 	} else {

			// 		echo 'alert(\'Login please !\')';
			// 	}

			// 	?>
			// });

			$(document).ready(function animation(){
					$('#create_link').click('click',
						function show(){
					$('#effet_de_beaute').slideDown("slow");	
					}
				);
			})
			$(document).ready(function animation(){
					$('#bouton_slideUp').click('click',
						function hide(){
					$('#effet_de_beaute').slideUp("slow");	
					}					
				);
			}) 			

					// $('#bouton_slideUp').click('click', function hide(){
					
					// $('#effet_de_beaute').slideDown("slow");	
					// }									
			

			// $(document).ready(function(){

			// 	$("#form").click('click', function(){
			// 	$( this ).addClass( "inside" ).animate({transitionProperty: color, width}, 1000);
			// 		var mess = $("#message").val();
			// 		$("inside").html(mess);
			// 	});
			// });

		</script>	
	</body>
	<!-- '.base_url('index.php/create').' -->
</html>
