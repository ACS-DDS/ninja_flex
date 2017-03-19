<section id="create">
	<aside class="create_section_parent">
		<aside class="formulaire_creer">
			<form action="<?=base_url('index.php/create');?>" method="POST">			
				<input class='padding_input' placeholder="Title" type="text" id="creer_tache" name="titre" />		
				<input class='padding_input' placeholder="Entitled" type="text" id="creer_tache" name="intitulle" />
				<input class='padding_input' placeholder="Goal" type="text" id="creer_tache" name="objectif" />
				<input class='padding_input' placeholder="Progression" type="text" id="creer_tache" name="progression" />
				<input id="send_info" class="btn btn-default" type="submit" value="Create my sticky" />
			</form>
		</aside>
	</aside>	
</section>
<section id="plop">
	<aside class="plop_desc">
		<aside class="desc">
			<p><h3>The short instruction guide</h3>
			You can create your sticky note by respecting the fields of the form.
			The goal field must be greater than the progression.</p>
			<button class="btn btn-default" id="bouton_slideUp">^</button>					
		</aside>
	</aside>
</section>