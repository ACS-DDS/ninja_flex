<section class="id_tache">
	<aside class="tache">
		<table style="background:rgb(82, 97, 117); color:white;">		
			<thead>
				<tr>
					<th style="border:solid 1.5px white;padding:1em 1em 1em 1em;">Titre</th>
					<th style="border:solid 1.5px white;padding:1em 1em 1em 1em;">Intitullé</th>
					<th style="border:solid 1.5px white;padding:1em 1em 1em 1em;">Objectif</th>
					<th style="border:solid 1.5px white;padding:1em 1em 1em 1em;">Progression</th>						
				</tr>
			</thead>

			<tbody>
			<tr>
			<?php
				foreach($id_user as $id){
					echo '<td style="border:solid 1.5px white;padding:1.5em 1.5em 1.5em 1.5em;">'.$id.'</td>';
				}	
			?>
			</tr>
			</tbody>			
		</table>
	</aside>
</section> 